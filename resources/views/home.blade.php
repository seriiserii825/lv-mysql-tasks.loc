@extends('layouts.default')
@section('content')
    <p>
        {{--        Таблица Product представляет производителя (maker), номер модели (model) и тип ('PC' - ПК, 'Laptop' - ПК-блокнот или 'Printer' - принтер).--}}
        {{--        Предполагается, что номера моделей в таблице Product уникальны для всех производителей и типов продуктов.--}}
        {{--        В таблице PC для каждого ПК, однозначно определяемого уникальным кодом – code, указаны модель – model (внешний ключ к таблице Product), скорость - speed (процессора в мегагерцах), объем памяти - ram (в мегабайтах), размер диска - hd (в гигабайтах), скорость считывающего устройства - cd (например, '4x') и цена - price.--}}
        {{--        Таблица Laptop аналогична таблице РС за исключением того, что вместо скорости CD содержит размер экрана -screen (в дюймах).--}}
        {{--        В таблице Printer для каждой модели принтера указывается, является ли он цветным - color ('y', если цветной), тип принтера - type (лазерный – 'Laser', струйный – 'Jet' или матричный – 'Matrix') и цена - price.--}}
    </p>
    <div class="table">
        @if(count($product_types))
            <div class="table__item">
                <h3 class="table__title">Product Type</h3>
                <div class="table__info">Таблица <strong> product_type</strong> определяет тип продукта.</div>
                <table>
                    <thead>
                    <th>id</th>
                    <th>type</th>
                    </thead>
                    <tbody>
                    @foreach($product_types as $product_type)
                        <tr>
                            <td>{{ $product_type->id }}</td>
                            <td>{{ $product_type->type }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        @if(count($products))
            <div class="table__item">
                <h3 class="table__title">Products</h3>
                <div class="table__info">Таблица <strong> products</strong> определяет тип продукта.</div>
                <table>
                    <thead>
                    <th>id</th>
                    <th>model</th>
                    <th>type</th>
                    <th>maker</th>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->model }}</td>
                            <td>{{ $product->product_type->type }}</td>
                            <td>{{ $product->maker->title }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
