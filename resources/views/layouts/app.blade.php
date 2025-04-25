<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'NHLE') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- 动态矢量图标库 -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    </head>
    <body class=class="bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
        
            @include('layouts.navigation')<!-- 头部组件 -->

          
            <main class="max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </main>
        
    @include('layouts._footer') <!-- 尾部组件 -->
    <!-- 引入全局JS -->
    <div id="modal-portal"></div>
    </body>
</html>
