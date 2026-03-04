@extends('layouts.app')

@section('title', 'Teguh Aldianto - Full-Stack & Mobile Developer')
@section('description', 'Lulusan D4 Manajemen Informatika Unesa dengan IPK 3.81. Berpengalaman dalam pengembangan Web
    Full-Stack (Laravel) dan Android Mobile Development (Kotlin).')

@section('content')
    {{-- Hero Section with Particle Background --}}
    <section id="hero-particles"
        class="hero-particles relative bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 dark:from-gray-900 dark:via-purple-900 dark:to-gray-900 py-24 lg:py-36 overflow-hidden">
        <!-- Animated gradient orbs -->
        <div
            class="absolute top-0 left-1/4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float">
        </div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"
            style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"
            style="animation-delay: 4s;"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
            <div class="text-center">
                <!-- Animated Avatar -->
                <div class="reveal inline-block mb-8">
                    <div class="relative">
                        <div
                            class="w-40 h-40 mx-auto rounded-full bg-gradient-to-br from-purple-400 via-pink-500 to-blue-500 flex items-center justify-center text-white text-6xl font-black shadow-2xl shadow-purple-500/50 animate-float hover:scale-110 transition-transform duration-300 cursor-pointer">
                            TA
                        </div>
                        <div
                            class="absolute -bottom-2 -right-2 w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center text-2xl shadow-lg">
                            ⭐
                        </div>
                    </div>
                </div>

                <!-- Name with gradient text -->
                <h1 class="reveal text-6xl md:text-8xl font-black text-white mb-6" style="animation-delay: 0.2s;">
                    <span
                        class="inline-block bg-gradient-to-r from-yellow-200 via-pink-200 to-purple-200 bg-clip-text text-transparent hover:scale-105 transition-transform">
                        TEGUH ALDIANTO
                    </span>
                </h1>

                <!-- Subtitle with typing effect -->
                <div class="reveal mb-8" style="animation-delay: 0.4s;">
                    <p class="text-3xl md:text-4xl text-purple-200 font-bold mb-3 tracking-wide">
                        💻 Full-Stack & Mobile Developer
                    </p>
                    <div class="flex items-center justify-center gap-6 text-white/80 text-lg">
                        <span class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <strong class="text-yellow-300">GPA 3.81</strong> (Cumlaude)
                        </span>
                        <span class="text-2xl">•</span>
                        <span>🎓 Unesa Graduate</span>
                    </div>
                </div>

                <!-- Description -->
                <p class="reveal text-xl text-purple-100 max-w-4xl mx-auto mb-10 leading-relaxed px-4"
                    style="animation-delay: 0.6s;">
                    Passionate about creating <strong class="text-yellow-300">elegant solutions</strong> to complex
                    problems.
                    Specialized in <strong class="text-pink-300">Laravel</strong>, <strong
                        class="text-blue-300">Kotlin</strong>, and modern web technologies.
                </p>

                <!-- CTA Buttons -->
                <div class="reveal flex flex-col sm:flex-row gap-5 justify-center" style="animation-delay: 0.8s;">
                    <a href="{{ route('projects.index') }}"
                        class="group px-10 py-5 bg-white text-purple-600 font-bold text-lg rounded-2xl hover:bg-yellow-300 hover:text-purple-900 transition-all duration-300 shadow-2xl hover:shadow-yellow-300/50 hover:-translate-y-2 inline-flex items-center justify-center btn-ripple">
                        <svg class="w-6 h-6 mr-3 group-hover:rotate-12 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                        View My Work
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="{{ route('resume.download') }}"
                        class="group px-10 py-5 glass-card text-white font-bold text-lg rounded-2xl hover:bg-white/20 transition-all duration-300 shadow-2xl hover:-translate-y-2 inline-flex items-center justify-center border-2 border-white/30 btn-ripple">
                        <svg class="w-6 h-6 mr-3 group-hover:animate-bounce" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        Download CV
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-16 bg-white dark:bg-gray-900 border-y border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="reveal text-center group hover-lift cursor-pointer" data-animate>
                    <div class="text-5xl font-black text-gradient-animated mb-2" data-counter data-target="3">0</div>
                    <div class="text-gray-600 dark:text-gray-400 font-semibold">Major Projects</div>
                </div>
                <div class="reveal text-center group hover-lift cursor-pointer" data-animate style="animation-delay: 0.1s;">
                    <div class="text-5xl font-black text-gradient-animated mb-2" data-counter data-target="20">0</div>
                    <div class="text-gray-600 dark:text-gray-400 font-semibold">Skills Mastered</div>
                </div>
                <div class="reveal text-center group hover-lift cursor-pointer" data-animate style="animation-delay: 0.2s;">
                    <div class="text-5xl font-black text-gradient-animated mb-2" data-counter data-target="6">0</div>
                    <div class="text-gray-600 dark:text-gray-400 font-semibold">Months Experience</div>
                </div>
                <div class="reveal text-center group hover-lift cursor-pointer" data-animate style="animation-delay: 0.3s;">
                    <div class="text-5xl font-black text-gradient-animated mb-2">3.81</div>
                    <div class="text-gray-600 dark:text-gray-400 font-semibold">GPA (Cumlaude)</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Skills --}}
    <section class="py-20 bg-gradient-to-br from-gray-50 to-purple-50 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title reveal" data-animate>💎 Core Skills</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 reveal" data-animate style="animation-delay: 0.2s;">
                    Technologies I work with daily
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ($skills as $index => $skill)
                    <div data-animate
                        class="reveal group premium-hover p-8 bg-white dark:bg-gray-800 rounded-3xl text-center hover-lift shadow-premium hover:shadow-premium-lg cursor-pointer border-2 border-transparent hover:border-purple-500 transition-all duration-300"
                        style="animation-delay: {{ $index * 0.08 }}s;">
                        <div
                            class="text-5xl mb-4 group-hover:scale-125 group-hover:rotate-12 transition-transform duration-300">
                            @switch($skill->category)
                                @case('Backend')
                                    ⚙️
                                @break

                                @case('Frontend')
                                    🎨
                                @break

                                @case('Mobile')
                                    📱
                                @break

                                @case('Database')
                                    🗄️
                                @break

                                @default
                                    💻
                            @endswitch
                        </div>
                        <span class="text-lg font-black text-gray-900 dark:text-white block mb-1">{{ $skill->name }}</span>
                        <span
                            class="text-sm text-purple-600 dark:text-purple-400 font-semibold">{{ $skill->category }}</span>

                        <!-- Skill level indicator -->
                        <div class="mt-4 skill-progress">
                            <div class="skill-progress-bar" style="width: {{ $skill->proficiency_level }}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('skills') }}"
                    class="reveal inline-flex items-center text-purple-600 dark:text-purple-400 hover:text-purple-700 font-bold text-lg group"
                    data-animate>
                    Explore All Skills
                    <svg class="w-6 h-6 ml-2 group-hover:translate-x-3 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Featured Projects --}}
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title reveal" data-animate>🚀 Featured Projects</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 reveal" data-animate style="animation-delay: 0.2s;">
                    Showcasing my best work
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($featuredProjects as $index => $project)
                    <div class="reveal card group cursor-pointer" data-animate
                        style="animation-delay: {{ $index * 0.12 }}s;">
                        <div class="relative overflow-hidden h-56">
                            @if ($project->image)
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                            @else
                                <div
                                    class="w-full h-full bg-gradient-to-br from-purple-500 via-pink-500 to-blue-500 flex items-center justify-center relative overflow-hidden">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 to-pink-400/20 animate-shimmer">
                                    </div>
                                    <svg class="w-20 h-20 text-white animate-float relative z-10" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute top-4 right-4">
                                <span
                                    class="badge-animated px-4 py-2 bg-yellow-400 text-yellow-900 text-xs font-black rounded-full shadow-lg">
                                    ⭐ FEATURED
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3
                                class="text-2xl font-black text-gray-900 dark:text-white mb-3 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-600 group-hover:to-pink-600 group-hover:bg-clip-text transition-all">
                                {{ $project->title }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-5 line-clamp-3 leading-relaxed">
                                {{ $project->description }}
                            </p>
                            <div class="flex flex-wrap gap-2 mb-5">
                                @foreach (array_slice($project->technologies, 0, 3) as $tech)
                                    <span
                                        class="px-3 py-1 bg-gradient-to-r from-purple-100 to-pink-100 dark:from-purple-900 dark:to-pink-900 text-purple-700 dark:text-purple-300 text-sm rounded-full font-bold hover:scale-110 transition-transform cursor-pointer">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                            <a href="{{ route('projects.show', $project->slug) }}"
                                class="inline-flex items-center font-black text-purple-600 dark:text-purple-400 hover:gap-3 gap-2 transition-all group/link">
                                View Project
                                <svg class="w-5 h-5 group-hover/link:translate-x-2 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-14">
                <a href="{{ route('projects.index') }}"
                    class="reveal btn-primary inline-flex items-center text-xl py-5 px-10" data-animate>
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    View All Projects
                </a>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="relative py-24 bg-gradient-to-br from-purple-600 via-pink-600 to-blue-600 overflow-hidden">
        <!-- Animated background -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full opacity-30">
                <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-yellow-300 rounded-full blur-3xl animate-float"></div>
                <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-pink-300 rounded-full blur-3xl animate-float"
                    style="animation-delay: 2s;"></div>
            </div>
        </div>

        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <div class="reveal mb-8" data-animate>
                <span class="text-7xl">✨</span>
            </div>
            <h2 class="reveal text-5xl md:text-7xl font-black text-white mb-8" data-animate>
                Let's Build Something <br />
                <span class="text-yellow-300">Amazing Together</span>
            </h2>
            <p class="reveal text-2xl text-purple-100 mb-12 max-w-3xl mx-auto leading-relaxed" data-animate
                style="animation-delay: 0.2s;">
                Got an exciting project in mind? Let's collaborate and create something extraordinary! 🚀
            </p>
            <a href="{{ route('contact') }}"
                class="reveal inline-flex items-center px-12 py-6 bg-white text-purple-600 font-black text-xl rounded-2xl hover:bg-yellow-300 hover:text-purple-900 transition-all duration-300 shadow-2xl hover:shadow-yellow-300/50 hover:-translate-y-3 hover:scale-110 group btn-ripple"
                data-animate style="animation-delay: 0.4s;">
                <svg class="w-7 h-7 mr-3 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
                Get In Touch
                <svg class="w-6 h-6 ml-3 group-hover:translate-x-2 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>
        </div>
    </section>
@endsection
