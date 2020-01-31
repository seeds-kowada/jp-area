# JpArea

## Installation

```shell
composer require wdkta3/jp-area
```

## Usage

- Get area

```php
$hokkaido = JpArea\JpArea::get(1);
```

- Check if whether the area exists

```php
$exists = JpArea\JpArea::exists(1) // bool(true)
$exists = JpArea\JpArea::exists(9) // bool(false)
```

- Get all areas

```php
$areas = JpArea\JpArea::all();
```

- Get area list

```php
$areas = JpArea\JpArea::asList();
```
```
        Array
        (
            [1] => '北海道',
            [2] => '東北',
            [3] => '関東',
            [4] => '中部',
            [5] => '近畿',
            [6] => '中国',
            [7] => '四国',
            [8] => '九州',
        );

```

