@extends('layouts.app')

@section('title', 'About - Teguh Aldianto')
@section('description', 'Learn more about Teguh Aldianto, a passionate Full-Stack and Mobile Developer with expertise in Laravel, Kotlin, and modern web technologies.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Profile Section --}}
            <div class="text-center mb-16">
                <h1 class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-purple-600 mb-8 inline-block">
                    About Me
                </h1>

                {{-- Foto Profil --}}
                <div class="relative w-32 h-32 md:w-40 md:h-40 mx-auto mb-6">
                    <img src="{{ asset('images/foto_teguh.jpg') }}"
                         alt="Foto Teguh Aldianto"
                         class="w-full h-full object-cover rounded-full shadow-xl border-4 border-white dark:border-gray-800 hover:scale-105 transition-transform duration-300">
                </div>
            </div>

            {{-- Professional Summary --}}
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 mb-12 border border-gray-100 dark:border-gray-700 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                    <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Professional Summary
                </h2>
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
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                    Education
                </h2>
                @forelse($education as $edu)
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md p-6 mb-4 border border-gray-100 dark:border-gray-700 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-start justify-between mb-2 flex-col sm:flex-row gap-2">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                    {{ $edu->title }}
                                </h3>
                                <p class="text-primary-600 dark:text-primary-400 font-medium">
                                    {{ $edu->company }}
                                </p>
                            </div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 sm:ml-4 whitespace-nowrap">
                                {{ $edu->date_range }}
                            </span>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 mb-3 mt-2">
                            {{ $edu->description }}
                        </p>
                        @if($edu->achievements && count($edu->achievements) > 0)
                            <ul class="space-y-2 mt-4">
                                @foreach($edu->achievements as $achievement)
                                    <li class="flex items-start text-gray-600 dark:text-gray-400">
                                        <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ $achievement }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @empty
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-6 text-center text-gray-500 dark:text-gray-400">
                        Education history is not available yet.
                    </div>
                @endforelse
            </div>

            {{-- Interests & Focus Areas --}}
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 border border-gray-100 dark:border-gray-700 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Areas of Focus</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="p-2 bg-primary-100 dark:bg-primary-900/50 rounded-lg mr-3">
                                <svg class="w-5 h-5 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </div>
                            Web Development
                        </h3>
                        <ul class="space-y-3 text-gray-600 dark:text-gray-400">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-primary-500 rounded-full"></span> Full-Stack Development with Laravel</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-primary-500 rounded-full"></span> RESTful API Design</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-primary-500 rounded-full"></span> Database Architecture</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-primary-500 rounded-full"></span> Modern Frontend (Tailwind CSS)</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                            <div class="p-2 bg-blue-100 dark:bg-blue-900/50 rounded-lg mr-3">
                                <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            Mobile Development
                        </h3>
                        <ul class="space-y-3 text-gray-600 dark:text-gray-400">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span> Android Development with Kotlin</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span> Clean Architecture & MVVM</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span> Android Jetpack Components</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span> AI/ML Integration</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- CTA --}}
            <div class="text-center mt-16 mb-8">
                <p class="text-gray-600 dark:text-gray-400 mb-6 text-lg">
                    Want to know more about my work experience and projects?
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('experience') }}"
                       class="inline-flex items-center justify-center px-6 py-3 bg-primary-600 text-white font-semibold rounded-xl hover:bg-primary-700 transition-all duration-300 shadow-md hover:shadow-lg hover:-translate-y-1">
                        View Experience
                    </a>
                    <a href="{{ route('projects.index') }}"
                       class="inline-flex items-center justify-center px-6 py-3 bg-white dark:bg-gray-800 text-primary-600 dark:text-primary-400 font-semibold rounded-xl border-2 border-primary-600 dark:border-primary-500 hover:bg-primary-50 dark:hover:bg-gray-700 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-1">
                        View Projects
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
