<footer class="bg-gray-800 text-white mt-16">
    <div class="max-w-7xl mx-auto py-12 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- 品牌信息 -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">技术生态</h3>
                <p class="text-gray-300">基于 Laravel 11 + Vite 构建</p>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-400 transition-colors">
                        <lord-icon src="https://cdn.lordicon.com/ifclergl.json" trigger="hover"/>
                    </a>
                    <!-- 更多社交图标 -->
                </div>
            </div>
            
            <!-- 快速链接 -->
            <div>
                <h3 class="text-lg font-semibold">快速导航</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="hover:text-blue-400 transition-colors">文档中心</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition-colors">API 参考</a></li>
                </ul>
            </div>
            
            <!-- 动态信息 -->
            <div>
                <h3 class="text-lg font-semibold">系统状态</h3>
                <div class="mt-4 space-y-2 text-sm">
                    <p>版本: {{ config('app.version', '1.0.0') }}</p>
                    <p>环境: {{ config('app.env') }}</p>
                </div>
            </div>
        </div>
        
        <!-- 版权声明 -->
        <div class="border-t border-gray-700 mt-8 pt-8 text-center">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</footer>