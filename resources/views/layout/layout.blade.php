<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Comparision Online shopping Store</title>

    @include('admin.includes.links')
</head>
<body>
            @include('admin.includes.topbar')
            @include('admin.includes.header')
            @yield('pages-content')
            @include('admin.includes.footer')
            <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    @include('admin.includes.scripts')
</body>
</html>