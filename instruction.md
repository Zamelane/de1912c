# 1. Устанавливаем и настраиваем
```shell
composer create-project laravel/laravel .
php artisan install:api
php artisan config:publish cors
```
## 2. Указать данные дял подключения
## 3. Настроить сессии на хранение в файле

# 2. Создаём модели для таблиц

Для `partner_types` таблицы:
```shell
php artisan make:model PartnerType
```

Для `partners` таблицы:
```shell
php artisan make:model Partner
```

Для `partner_products` таблицы:
```shell
php artisan make:model PartnerProduct
```

Ну и по аналогии ...

# 3. Деалем контроллеры
```shell
php artisan make:controller PartnerController
```

# 4. Делаем шаблон страницы
```shell
php artisan make:view layouts/layout
```

# 5. Делаем файл стилей
Создаём файл `public/assets/css/style.css`.

# 6. Добавляем шрифт
Ложим в `public/assets/fonts/SegoeUIVF.ttf`.

# 7. Описываем стили по заданию
См `style.css`.

# 8. Загружаем изображения по заданию
В папку `public/assets/images`.

# 9. Подключаем стили к лайаута
Пишем в `resources/views/layouts/layout.blade.php` в `head`:
```html
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
```

# 10. Подключаем иконку
Там же добавляем:
```html
<link rel="icon" href="{{ asset('assets/images/master_floor.ico') }}">
```

# 11. Указываем заголовок
Там же меняем `title`:
```html
<title>@yield('title')</title>
```

# 12. Настраиваем контент
В `body` пишем:
```html
// см сам ...
```

# 13. Настраиваем пути веб-страниц
См. как писать в `routes/web.php`.

# 14. Описываем контроллер и создаём представление для отображения
Контроллер:
```php
public function index() {
    $partners = Partner::all();
    return view('partners.index', compact('partners'));
}
```

Представление (страница):
```shell
php artisan make:view partners/index
```
# 15. Описываем связи между моделями
См. модель `app/Models/Partner.php`.
