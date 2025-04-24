@extends('layouts.app')

@section('title', '')

@section('content')
<div class="bg-white rounded-xl shadow-lg p-6">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">欢迎使用新一代开发框架</h1>
    <p class="text-gray-600 mb-6">整合最新技术栈的现代化开发体验</p>
    
    <div class="grid md:grid-cols-2 gap-6">
        <div class="p-6 bg-blue-50 rounded-lg">
            <h2 class="text-2xl font-semibold mb-3">核心特性</h2>
            <ul class="space-y-2">
                <li class="flex items-center">
                    <lord-icon src="https://cdn.lordicon.com/wloilxuq.json" trigger="hover" class="mr-20"/>
                    
                </li>
                <!-- 更多特性 -->
            </ul>
        </div>
    </div>
</div>
@endsection