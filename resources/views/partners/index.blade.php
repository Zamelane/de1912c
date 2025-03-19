@extends('layouts.layout')

@section('title', 'Список партнёров')

@section('content')
    @foreach($partners as $partner)
        <div class="flex border">
            <div class="div85">
                <div class="bigFontSize">{{ $partner->partnerType->name }} | {{ $partner->name }}</div>
                <div>{{ $partner->director }}</div>
                <div>+7 {{ $partner->phone }}</div>
                <div>Рейтинг: {{ $partner->raiting }}</div>
            </div>
            <div class="div15">
                {{ $partner->discount }}%
            </div>
        </div>
    @endforeach
@endsection
