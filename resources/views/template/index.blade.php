<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - PPDB SMK BABUSSALAM</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

        @isset($page)
            @if ($page == 'dashboard' or $page == 'register')
                @include('template/navbar')
            @endif
        @endisset
    <div class="container">

        @yield('content')
    </div>

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
