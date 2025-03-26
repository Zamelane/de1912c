@extends('layouts.layout')

@section('title', 'Редактирование партнёра')


@section('content')
    <a class="btn" href="{{ route('partners.index') }}">Назад</a>

    <form
        action="{{ route('partners.edit', [$partner->id]) }}"
        method="post"
        enctype="application/x-www-form-urlencoded"
    >
        @csrf
        @if($errors->any())
            <script>
                alert('Ошибка валидации данных! Изучите ошибки валидации и исправьте данные.')
            </script>
        @endif
        <div>
            @error('partner_type_id')
                <p class="warning">{{ $message }}</p>
            @enderror
            <select name="partner_type_id" required>
                @foreach($types as $type)
                    <option
                        value="{{ $type->id }}"
                        @if($type->id === $partner->partnerType->id) selected @endif
                    >
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            @error('name')
                <p class="warning">{{ $message }}</p>
            @enderror
            <input type="text" name="name" placeholder="Введите название" value="{{ $partner->name }}" required>
        </div>
        <div>
            @error('director')
                <p class="warning">{{ $message }}</p>
            @enderror
            <input type="text" name="director" placeholder="Введите ФИО директора" value="{{ $partner->director }}" required>
        </div>
        <div>
            @error('email')
                <p class="warning">{{ $message }}</p>
            @enderror
            <input type="email" name="email" placeholder="Введите почту" value="{{ $partner->email }}" required>
        </div>
        <div>
            @error('phone')
                <p class="warning">{{ $message }}</p>
            @enderror
            <input type="text" name="phone" placeholder="Введите номер телефона" value="{{ $partner->phone }}" required>
        </div>
        <div>
            @error('address')
                <p class="warning">{{ $message }}</p>
            @enderror
            <input type="text" name="address" placeholder="Введите адрес" value="{{ $partner->address }}" required>
        </div>
        <div>
            @error('inn')
                <p class="warning">{{ $message }}</p>
            @enderror
            <input type="text" name="inn" value="{{ $partner->inn }}" required>
        </div>
        <div>
            @error('rating')
                <p class="warning">{{ $message }}</p>
            @enderror
            <input type="number" name="rating" placeholder="Введите inn" value="{{ $partner->rating }}" min="0" max="10" required>
        </div>
        <button type="submit">Обновить данные</button>
    </form>
@endsection
