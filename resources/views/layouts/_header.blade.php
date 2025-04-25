<nav class="bg-white/90 backdrop-blur-sm shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16 items-center">
            <!-- 动态Logo -->
            <a href="/" class="flex items-center space-x-2 hover:scale-105 transition-transform">
                <lord-icon
                    src="https://cdn.lordicon.com/lewtedlh.json"
                    trigger="loop"
                    colors="primary:#3b82f6"
                    style="width:32px;height:32px">
                </lord-icon>
                <span class="text-xl font-bold text-gray-800">智学新境引擎</span>
            </a>

            <!-- 桌面导航 -->
            <div class="hidden md:flex space-x-6">
                <a href="/" class="nav-link {{ request()->routeIs('home') ? 'text-blue-500' : 'text-gray-600' }}">
                    首页
                </a>
                <a href="#" class="nav-link">关于</a>
            </div>
        </div>
    </div>
</nav>

<style>
.nav-link {
    @apply hover:text-blue-400 transition-colors font-medium;
}
</style>