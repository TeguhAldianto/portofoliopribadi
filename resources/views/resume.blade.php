@extends('layouts.app')

@section('title', 'Resume - Teguh Aldianto')
@section('description', 'Download the complete resume/CV of Teguh Aldianto, Full-Stack and Mobile Developer.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="section-title text-center">Resume</h1>
            <p class="text-center text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto">
                Download my complete resume to learn more about my skills, experience, and professional background.
            </p>

            {{-- Resume Preview/Summary --}}
            <div class="card p-8 mb-8">
                <div class="text-center mb-8">
                    <div
                        class="w-24 h-24 mx-auto mb-4 rounded-full bg-gradient-to-br from-primary-400 to-blue-500 flex items-center justify-center text-white text-3xl font-bold">
                        TA
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">TEGUH ALDIANTO</h2>
                    <p class="text-lg text-primary-600 dark:text-primary-400 font-medium mb-4">
                        Full-Stack & Mobile Developer
                    </p>
                    <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-600 dark:text-gray-400">
                        <a href="mailto:aldinamanya08@gmail.com" class="flex items-center hover:text-primary-600">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            aldinamanya08@gmail.com
                        </a>
                        <a href="tel:+62895331170400" class="flex items-center hover:text-primary-600">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            +62 895 3311 70400
                        </a>
                    </div>
                </div>

                {{-- Quick Stats --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="text-center p-4 bg-primary-50 dark:bg-primary-900/20 rounded-lg">
                        <div class="text-3xl font-bold text-primary-600 dark:text-primary-400 mb-1">3.81</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">GPA (Cumlaude)</div>
                    </div>
                    <div class="text-center p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                        <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-1">3+</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Major Projects</div>
                    </div>
                    <div class="text-center p-4 bg-green-50 dark:bg-green-900/20 rounded-lg">
                        <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-1">6</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Months Experience</div>
                    </div>
                </div>

                {{-- Core Competencies --}}
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Core Competencies</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-primary-600 dark:text-primary-400 mr-2 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900 dark:text-white">Web Development</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Laravel, PHP, MySQL, RESTful API</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-primary-600 dark:text-primary-400 mr-2 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900 dark:text-white">Mobile Development</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Kotlin, Android SDK, Clean Architecture
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-primary-600 dark:text-primary-400 mr-2 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900 dark:text-white">Database Management</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">MySQL, Database Design, Optimization</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-primary-600 dark:text-primary-400 mr-2 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900 dark:text-white">Version Control</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Git, GitHub, Collaborative Development
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Download Button --}}
                <div class="text-center pt-6 border-t border-gray-200 dark:border-gray-700">
                    <a href="{{ route('resume.download') }}"
                        class="inline-flex items-center px-8 py-4 bg-primary-600 text-white text-lg font-semibold rounded-lg hover:bg-primary-700 transition-all duration-200 shadow-lg hover:shadow-xl">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        Download Complete Resume (PDF)
                    </a>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-3">
                        Last updated: {{ date('F Y') }}
                    </p>
                </div>
            </div>

            {{-- Additional Links --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('experience') }}" class="card p-6 text-center hover:shadow-xl transition-shadow">
                    <svg class="w-12 h-12 text-primary-600 dark:text-primary-400 mx-auto mb-3" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Experience</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">View work history</p>
                </a>

                <a href="{{ route('projects.index') }}" class="card p-6 text-center hover:shadow-xl transition-shadow">
                    <svg class="w-12 h-12 text-primary-600 dark:text-primary-400 mx-auto mb-3" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Projects</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">View portfolio</p>
                </a>

                <a href="{{ route('contact') }}" class="card p-6 text-center hover:shadow-xl transition-shadow">
                    <svg class="w-12 h-12 text-primary-600 dark:text-primary-400 mx-auto mb-3" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Contact</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Get in touch</p>
                </a>
            </div>
        </div>
    </div>
@endsection