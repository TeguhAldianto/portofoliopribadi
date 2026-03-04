@extends('layouts.app')

@section('title', 'About - Teguh Aldianto')
@section('description', 'Learn more about Teguh Aldianto, a passionate Full-Stack and Mobile Developer with expertise in Laravel, Kotlin, and modern web technologies.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Profile Section --}}
            <div class="text-center mb-16">
                <h1 class="section-title">About Me</h1>
                <div
                    class="w-32 h-32 mx-auto mb-6 rounded-full bg-gradient-to-br from-primary-400 to-blue-500 flex items-center justify-center text-white text-4xl font-bold">
                    TA
                </div>
            </div>

            {{-- Professional Summary --}}
            <div class="card p-8 mb-12">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Professional Summary</h2>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    Lulusan D4 Manajemen Informatika Universitas Negeri Surabaya dengan IPK 3.81 (Cumlaude).
                    Memiliki keahlian teknis yang kuat dalam pengembangan Web Full-Stack menggunakan PHP, Laravel,
                    dan MySQL, serta Android Mobile Development dengan Kotlin.
                </p>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    Berpengalaman profesional selama 6 bulan di PT EDI Indonesia dalam mengembangkan solusi digital
                    yang meningkatkan efisiensi operasional tim keuangan. Alumni Bangkit Academy 2024 (Mobile Development)
                    yang terbiasa bekerja dalam tim lintas fungsi dan menerapkan clean architecture.
                </p>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                    Siap berkontribusi dalam menciptakan perangkat lunak yang inovatif, scalable, dan efisien untuk
                    membantu organisasi mencapai tujuan digitalnya.
                </p>
            </div>

            {{-- Education --}}
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Education</h2>
                @foreach($education as $edu)
                    <div class="card p-6 mb-4">
                        <div class="flex items-start justify-between mb-2">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    {{ $edu->title }}
                                </h3>
                                <p class="text-primary-600 dark:text-primary-400 font-medium">
                                    {{ $edu->company }}
                                </p>
                            </div>
                            <span class="text-sm text-gray-600 dark:text-gray-400 whitespace-nowrap ml-4">
                                {{ $edu->date_range }}
                            </span>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 mb-3">
                            {{ $edu->description }}
                        </p>
                        @if($edu->achievements)
                            <ul class="space-y-2">
                                @foreach($edu->achievements as $achievement)
                                    <li class="flex items-start text-gray-600 dark:text-gray-400">
                                        <svg class="w-5 h-5 text-primary-600 dark:text-primary-400 mr-2 mt-0.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ $achievement }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach
            </div>

            {{-- Interests & Focus Areas --}}
            <div class="card p-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Areas of Focus</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                            <svg class="w-6 h-6 text-primary-600 dark:text-primary-400 mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                                </path>
                            </svg>
                            Web Development
                        </h3>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                            <li>• Full-Stack Development with Laravel</li>
                            <li>• RESTful API Design</li>
                            <li>• Database Architecture</li>
                            <li>• Modern Frontend (Tailwind CSS)</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                            <svg class="w-6 h-6 text-primary-600 dark:text-primary-400 mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                            Mobile Development
                        </h3>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                            <li>• Android Development with Kotlin</li>
                            <li>• Clean Architecture & MVVM</li>
                            <li>• Android Jetpack Components</li>
                            <li>• AI/ML Integration</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- CTA --}}
            <div class="text-center mt-12">
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Want to know more about my work experience and projects?
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('experience') }}" class="btn-primary">
                        View Experience
                    </a>
                    <a href="{{ route('projects.index') }}"
                        class="px-6 py-3 bg-white dark:bg-gray-800 text-primary-600 dark:text-primary-400 font-semibold rounded-lg border-2 border-primary-600 dark:border-primary-400 hover:bg-primary-50 dark:hover:bg-gray-700 transition-all duration-200 shadow-md hover:shadow-lg">
                        View Projects
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection