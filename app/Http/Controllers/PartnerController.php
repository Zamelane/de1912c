<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use App\Models\PartnerProduct;
use App\Models\PartnerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function index() {
        $partners = Partner::all();
        $quantity_partners = PartnerProduct::select('partner_id', DB::raw('SUM(quantity) AS total_quantity'))
            ->groupBy('partner_id')
            ->get();
        foreach ($partners as &$partner) {
            foreach ($quantity_partners as $quantity_partner) {
                if ($partner->id == $quantity_partner->partner_id) {
                    $c = $quantity_partner->total_quantity;
                    $partner->discount = $c < 10000
                        ? 0
                        : ($c < 50000
                            ? 5
                            : ($c <= 300000
                                ? 10
                                : 15));
                    break;
                }
            }
        }
        return view('partners.index', compact('partners', 'quantity_partners'));
    }

    public function create()
    {
        // Получаем список типов партнёров и отдаём представлению
        $types = PartnerType::all();
        return view('partners.create', compact('types'));
    }

    public function store(PartnerRequest $request)
    {
        $partner = Partner::create($request->validated());
        return redirect()->route('partners.index');
    }

    public function edit(Partner $partner)
    {
        // Получаем список типов партнёров и отдаём представлению
        $types = PartnerType::all();
        return view('partners.edit', compact('partner', 'types'));
    }

    public function update(PartnerRequest $request, Partner $partner)
    {
        $partner->update($request->validated());
        return redirect()->route('partners.index');
    }
}
