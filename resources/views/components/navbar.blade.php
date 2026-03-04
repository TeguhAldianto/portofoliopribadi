{{-- Pindahkan x-data ke tag <nav> agar berlaku untuk seluruh elemen di dalamnya --}}
<nav x-data="{ mobileMenuOpen: false }"
    class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 sticky top-0 z-50 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
<a href="{{ route('home') }}" class="flex items-center gap-3 hover:scale-105 transition-transform duration-300">
    <img src="{{ asset('images/foto_teguh.jpg') }}" alt="Logo Teguh" class="w-10 h-10 rounded-full object-cover border-2 border-primary-500">
    <span class="text-xl font-black text-gray-900 dark:text-white hidden sm:block">Teguh.</span>
</a>

            {{-- Desktop Navigation --}}
            <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
                @php
                    $navItems = [
                        ['name' => 'Home', 'route' => 'home', 'active' => request()->routeIs('home')],
                        ['name' => 'About', 'route' => 'about', 'active' => request()->routeIs('about')],
                        ['name' => 'Experience', 'route' => 'experience', 'active' => request()->routeIs('experience')],
                        [
                            'name' => 'Projects',
                            'route' => 'projects.index',
                            'active' => request()->routeIs('projects.*'),
                        ],
                        ['name' => 'Skills', 'route' => 'skills', 'active' => request()->routeIs('skills')],
                        ['name' => 'Resume', 'route' => 'resume', 'active' => request()->routeIs('resume')],
                        ['name' => 'Contact', 'route' => 'contact', 'active' => request()->routeIs('contact')],
                    ];
                @endphp

                @foreach ($navItems as $item)
                    <a href="{{ route($item['route']) }}"
                        class="px-4 py-2 rounded-lg font-semibold transition-all duration-300
                        {{ $item['active']
                            ? 'text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-primary-900/30'
                            : 'text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 hover:bg-gray-50 dark:hover:bg-gray-800' }}">
                        {{ $item['name'] }}
                    </a>
                @endforeach

                {{-- Dark Mode Toggle --}}
                <div class="pl-4 border-l border-gray-200 dark:border-gray-700 ml-2">
                    <button onclick="toggleDarkMode()"
                        class="p-2.5 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors"
                        aria-label="Toggle dark mode">
                        <svg class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg class="w-5 h-5 hidden dark:block text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile Menu Button --}}
            <div class="md:hidden flex items-center">
                {{-- x-data dihapus dari sini --}}
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="p-2 rounded-lg text-gray-600 dark:text-gray-400 bg-gray-100 dark:bg-gray-800">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    {{-- x-data dihapus dari sini karena sudah diwariskan dari tag <nav> --}}
    <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" x-transition style="display: none;"
        class="md:hidden bg-white/95 dark:bg-gray-900/95 backdrop-blur-lg border-t border-gray-100 dark:border-gray-800 shadow-xl absolute w-full">
        <div class="px-4 pt-2 pb-6 space-y-2">
            @isset($navItems)
                @foreach ($navItems as $item)
                    <a href="{{ route($item['route']) }}"
                        class="block px-4 py-3 rounded-xl text-base font-semibold {{ $item['active'] ? 'text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-primary-900/30' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800' }}">
                        {{ $item['name'] }}
                    </a>
                @endforeach
            @endisset
            <button onclick="toggleDarkMode()"
                class="w-full text-left mt-4 px-4 py-3 rounded-xl text-base font-semibold text-gray-600 dark:text-gray-400 bg-gray-50 dark:bg-gray-800 flex items-center justify-between">
                <span>Toggle Dark Mode</span>
                <svg class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg class="w-5 h-5 hidden dark:block text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</nav>
