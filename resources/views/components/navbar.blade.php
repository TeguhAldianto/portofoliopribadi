<nav class="bg-white dark:bg-gray-900 shadow-md transition-colors duration-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            {{-- Logo/Brand --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}"
                    class="text-2xl font-bold text-primary-600 dark:text-primary-400 hover:text-primary-700 transition-colors">
                    TA
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                    class="@if(request()->routeIs('home')) text-primary-600 dark:text-primary-400 @else text-gray-700 dark:text-gray-300 @endif hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    Home
                </a>
                <a href="{{ route('about') }}"
                    class="@if(request()->routeIs('about')) text-primary-600 dark:text-primary-400 @else text-gray-700 dark:text-gray-300 @endif hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    About
                </a>
                <a href="{{ route('experience') }}"
                    class="@if(request()->routeIs('experience')) text-primary-600 dark:text-primary-400 @else text-gray-700 dark:text-gray-300 @endif hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    Experience
                </a>
                <a href="{{ route('projects.index') }}"
                    class="@if(request()->routeIs('projects.*')) text-primary-600 dark:text-primary-400 @else text-gray-700 dark:text-gray-300 @endif hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    Projects
                </a>
                <a href="{{ route('skills') }}"
                    class="@if(request()->routeIs('skills')) text-primary-600 dark:text-primary-400 @else text-gray-700 dark:text-gray-300 @endif hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    Skills
                </a>
                <a href="{{ route('resume') }}"
                    class="@if(request()->routeIs('resume')) text-primary-600 dark:text-primary-400 @else text-gray-700 dark:text-gray-300 @endif hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    Resume
                </a>
                <a href="{{ route('contact') }}"
                    class="@if(request()->routeIs('contact')) text-primary-600 dark:text-primary-400 @else text-gray-700 dark:text-gray-300 @endif hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    Contact
                </a>

                {{-- Dark Mode Toggle --}}
                <button onclick="toggleDarkMode()"
                    class="p-2 rounded-lg bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors"
                    aria-label="Toggle dark mode">
                    <svg class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z">
                        </path>
                    </svg>
                </button>
            </div>

            {{-- Mobile Menu Button --}}
            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" x-data="{ mobileMenuOpen: false }"
                    class="text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-data="{ mobiMenuOpen: false }" x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
        class="md:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}"
                class="block px-3 py-2 rounded-md text-base font-medium @if(request()->routeIs('home')) text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-gray-700 @else text-gray-700 dark:text-gray-300 @endif hover:bg-primary-50 dark:hover:bg-gray-700">
                Home
            </a>
            <a href="{{ route('about') }}"
                class="block px-3 py-2 rounded-md text-base font-medium @if(request()->routeIs('about')) text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-gray-700 @else text-gray-700 dark:text-gray-300 @endif hover:bg-primary-50 dark:hover:bg-gray-700">
                About
            </a>
            <a href="{{ route('experience') }}"
                class="block px-3 py-2 rounded-md text-base font-medium @if(request()->routeIs('experience')) text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-gray-700 @else text-gray-700 dark:text-gray-300 @endif hover:bg-primary-50 dark:hover:bg-gray-700">
                Experience
            </a>
            <a href="{{ route('projects.index') }}"
                class="block px-3 py-2 rounded-md text-base font-medium @if(request()->routeIs('projects.*')) text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-gray-700 @else text-gray-700 dark:text-gray-300 @endif hover:bg-primary-50 dark:hover:bg-gray-700">
                Projects
            </a>
            <a href="{{ route('skills') }}"
                class="block px-3 py-2 rounded-md text-base font-medium @if(request()->routeIs('skills')) text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-gray-700 @else text-gray-700 dark:text-gray-300 @endif hover:bg-primary-50 dark:hover:bg-gray-700">
                Skills
            </a>
            <a href="{{ route('resume') }}"
                class="block px-3 py-2 rounded-md text-base font-medium @if(request()->routeIs('resume')) text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-gray-700 @else text-gray-700 dark:text-gray-300 @endif hover:bg-primary-50 dark:hover:bg-gray-700">
                Resume
            </a>
            <a href="{{ route('contact') }}"
                class="block px-3 py-2 rounded-md text-base font-medium @if(request()->routeIs('contact')) text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-gray-700 @else text-gray-700 dark:text-gray-300 @endif hover:bg-primary-50 dark:hover:bg-gray-700">
                Contact
            </a>
            <button onclick="toggleDarkMode()"
                class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-primary-50 dark:hover:bg-gray-700">
                Toggle Dark Mode
            </button>
        </div>
    </div>
</nav>