<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- 动态标题与SEO -->
    <title>{{ config('app.name', 'Laravel 11') }} | @yield('title')</title>
    
    <!-- Vite资源加载 -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- 动态矢量图标库 -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
</head>
<body class="bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
    <!-- 动态导航栏 -->
    @include('layouts._header')

    <!-- 主内容容器 -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- 全局页脚 -->
    @include('layouts._footer')

    <!-- 交互增强 -->
    <div id="modal-portal"></div>
</body>
</html>