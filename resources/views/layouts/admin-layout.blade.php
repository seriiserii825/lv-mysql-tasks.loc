<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
<main class="admin-layout">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="admin-layout__wrap">
        <div class="admin-layout__sidebar">
            <ul class="sidebar-list">
                <li>
                    <a class="btn btn--danger" href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a class="btn {{ request()->is('admin/product') || request()->is('admin/product/create') || request()->is('admin/product/*/edit') ? 'btn--success' : '' }}"
                       href="{{ route('product.index') }}">Products</a>
                    <ul>
                        <li>
                            <a class="btn {{ request()->is('admin/product_type') ? 'btn--success' : '' }}"
                               href="{{ route('product_type.index') }}">Product types</a>
                        </li>
                        <li>
                            <a class="btn {{ request()->is('admin/maker') ? 'btn--success' : '' }}"
                               href="{{ route('maker.index') }}">Makers</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="btn {{ request()->is('admin/pc') || request()->is('admin/pc/create') || request()->is('admin/pc/*/edit') ? 'btn--success' : '' }}"
                       href="{{ route('pc.index') }}">Pc</a>
                </li>
            </ul>
        </div>
        <div class="admin-layout__content">
            @yield('content')
        </div>
    </div>
</main>
<script src="/js/app.js"></script>
</body>

</html>
