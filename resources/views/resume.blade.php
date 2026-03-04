@extends('layouts.app')

@section('title', 'Resume - Teguh Aldianto')
@section('description', 'Download the complete resume/CV of Teguh Aldianto, Full-Stack and Mobile Developer.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="text-center mb-12">
                <h1
                    class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-purple-600 mb-4 inline-block">
                    Resume
                </h1>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Download my complete resume to learn more about my skills, experience, and professional background.
                </p>
            </div>

            {{-- Resume Preview/Summary --}}
            <div
                class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl p-8 md:p-12 mb-12 border border-gray-100 dark:border-gray-700 relative overflow-hidden">

                {{-- Aksen Dekorasi Latar Belakang --}}
                <div
                    class="absolute top-0 left-0 w-full h-32 bg-gradient-to-r from-primary-600/10 to-purple-600/10 dark:from-primary-900/30 dark:to-purple-900/30">
                </div>

                <div class="text-center mb-10 relative z-10">
                    {{-- Foto Profil (Menggantikan inisial TA) --}}
                    <div class="relative w-28 h-28 mx-auto mb-5">
                        <img src="{{ asset('images/foto_teguh.jpg') }}" alt="Foto Teguh Aldianto"
                            class="w-full h-full object-cover rounded-full shadow-lg border-4 border-white dark:border-gray-800 hover:scale-105 transition-transform duration-300 bg-gray-100">
                    </div>

                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 dark:text-white mb-2 tracking-tight">TEGUH
                        ALDIANTO</h2>
                    <p class="text-lg text-primary-600 dark:text-primary-400 font-bold mb-5">
                        Full-Stack & Mobile Developer
                    </p>

                    <div class="flex flex-wrap justify-center gap-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                        <a href="mailto:aldinamanya08@gmail.com"
                            class="flex items-center hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            <span class="p-1.5 bg-gray-100 dark:bg-gray-700 rounded-full mr-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </span>
                            aldinamanya08@gmail.com
                        </a>
                        <a href="tel:+62895331170400"
                            class="flex items-center hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            <span class="p-1.5 bg-gray-100 dark:bg-gray-700 rounded-full mr-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </span>
                            +62 895 3311 70400
                        </a>
                    </div>
                </div>

                {{-- Quick Stats --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                    <div
                        class="text-center p-6 bg-primary-50 dark:bg-primary-900/20 rounded-2xl border border-primary-100 dark:border-primary-900/50 hover:-translate-y-1 transition-transform">
                        <div class="text-4xl font-black text-primary-600 dark:text-primary-400 mb-1">3.81</div>
                        <div class="text-sm font-semibold text-gray-600 dark:text-gray-400">GPA (Cumlaude)</div>
                    </div>
                    <div
                        class="text-center p-6 bg-blue-50 dark:bg-blue-900/20 rounded-2xl border border-blue-100 dark:border-blue-900/50 hover:-translate-y-1 transition-transform">
                        <div class="text-4xl font-black text-blue-600 dark:text-blue-400 mb-1">3+</div>
                        <div class="text-sm font-semibold text-gray-600 dark:text-gray-400">Major Projects</div>
                    </div>
                    <div
                        class="text-center p-6 bg-purple-50 dark:bg-purple-900/20 rounded-2xl border border-purple-100 dark:border-purple-900/50 hover:-translate-y-1 transition-transform">
                        <div class="text-4xl font-black text-purple-600 dark:text-purple-400 mb-1">6</div>
                        <div class="text-sm font-semibold text-gray-600 dark:text-gray-400">Months Experience</div>
                    </div>
                </div>

                {{-- Core Competencies --}}
                <div class="mb-10">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Core Competencies
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start bg-gray-50 dark:bg-gray-700/30 p-4 rounded-xl">
                            <div class="p-2 bg-primary-100 dark:bg-primary-900/50 rounded-lg mr-3">
                                <svg class="w-5 h-5 text-primary-600 dark:text-primary-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 dark:text-white mb-1">Web Development</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Laravel, PHP, MySQL, RESTful API</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-gray-50 dark:bg-gray-700/30 p-4 rounded-xl">
                            <div class="p-2 bg-blue-100 dark:bg-blue-900/50 rounded-lg mr-3">
                                <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 dark:text-white mb-1">Mobile Development</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Kotlin, Android SDK, Clean Architecture
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start bg-gray-50 dark:bg-gray-700/30 p-4 rounded-xl">
                            <div class="p-2 bg-green-100 dark:bg-green-900/50 rounded-lg mr-3">
                                <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 dark:text-white mb-1">Database Management</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">MySQL, Database Design, Optimization</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-gray-50 dark:bg-gray-700/30 p-4 rounded-xl">
                            <div class="p-2 bg-purple-100 dark:bg-purple-900/50 rounded-lg mr-3">
                                <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 dark:text-white mb-1">Version Control</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Git, GitHub, Collaborative Development
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Download Button --}}
                <div class="text-center pt-8 border-t border-gray-100 dark:border-gray-700">
                    <a href="{{ route('resume.download') }}"
                        class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white text-lg font-bold rounded-xl hover:from-primary-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-primary-500/30 hover:-translate-y-1 w-full sm:w-auto">
                        <svg class="w-6 h-6 mr-3 animate-bounce" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        Download Complete Resume
                    </a>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-4 font-medium">
                        Last updated: {{ date('F Y') }}
                    </p>
                </div>
            </div>

            {{-- Additional Links --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('experience') }}"
                    class="group bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center block">
                    <div
                        class="w-14 h-14 mx-auto bg-primary-50 dark:bg-primary-900/30 rounded-full flex items-center justify-center mb-4 group-hover:bg-primary-100 dark:group-hover:bg-primary-900/50 transition-colors">
                        <svg class="w-7 h-7 text-primary-600 dark:text-primary-400 group-hover:scale-110 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 dark:text-white mb-1 text-lg">Experience</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">View work history</p>
                </a>

                <a href="{{ route('projects.index') }}"
                    class="group bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center block">
                    <div
                        class="w-14 h-14 mx-auto bg-blue-50 dark:bg-blue-900/30 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-100 dark:group-hover:bg-blue-900/50 transition-colors">
                        <svg class="w-7 h-7 text-blue-600 dark:text-blue-400 group-hover:scale-110 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 dark:text-white mb-1 text-lg">Projects</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">View portfolio</p>
                </a>

                <a href="{{ route('contact') }}"
                    class="group bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center block">
                    <div
                        class="w-14 h-14 mx-auto bg-purple-50 dark:bg-purple-900/30 rounded-full flex items-center justify-center mb-4 group-hover:bg-purple-100 dark:group-hover:bg-purple-900/50 transition-colors">
                        <svg class="w-7 h-7 text-purple-600 dark:text-purple-400 group-hover:scale-110 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 dark:text-white mb-1 text-lg">Contact</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Get in touch</p>
                </a>
            </div>

        </div>
    </div>
@endsection
