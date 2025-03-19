# 1. Настраиваем
```shell
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
