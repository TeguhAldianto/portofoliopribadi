@extends('layouts.app')

@section('title', 'Skills - Teguh Aldianto')
@section('description', 'Technical skills and expertise of Teguh Aldianto in programming languages, frameworks, tools,
    and methodologies.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="text-center mb-16">
                <h1
                    class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-purple-600 mb-4 inline-block">
                    Skills & Expertise
                </h1>
                <p class="text-center text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                    A comprehensive overview of my technical skills across programming languages, frameworks, tools, and
                    development methodologies.
                </p>
            </div>

            @php
                // Perbaikan Tailwind JIT: Class ditulis utuh agar tidak terhapus saat di-build
                $categoryInfo = [
                    'language' => [
                        'title' => 'Programming Languages',
                        'icon' =>
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>',
                        'color_class' => 'text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-primary-900/30',
                    ],
                    'framework' => [
                        'title' => 'Frameworks & Libraries',
                        'icon' =>
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>',
                        'color_class' => 'text-blue-600 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/30',
                    ],
                    'tool' => [
                        'title' => 'Tools & Platforms',
                        'icon' =>
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>',
                        'color_class' => 'text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/30',
                    ],
                    'methodology' => [
                        'title' => 'Methodologies & Practices',
                        'icon' =>
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>',
                        'color_class' => 'text-purple-600 dark:text-purple-400 bg-purple-50 dark:bg-purple-900/30',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach (['language', 'framework', 'tool', 'methodology'] as $category)
                    @if (isset($skillsGrouped[$category]))
                        <div
                            class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg p-8 border border-gray-100 dark:border-gray-700 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">

                            <div class="flex items-center mb-8 border-b border-gray-100 dark:border-gray-700 pb-6">
                                <div class="p-3 rounded-2xl mr-4 {{ $categoryInfo[$category]['color_class'] }}">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        {!! $categoryInfo[$category]['icon'] !!}
                                    </svg>
                                </div>
                                <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">
                                    {{ $categoryInfo[$category]['title'] }}
                                </h2>
                            </div>

                            <div class="flex flex-wrap gap-3">
                                @foreach ($skillsGrouped[$category] as $skill)
                                    <div class="group relative">
                                        <span
                                            class="inline-flex items-center px-4 py-2 rounded-xl font-bold border-2 transition-all duration-200 shadow-sm
                                                {{ $skill->proficiency == 'expert' ? 'bg-green-50 dark:bg-green-900/20 text-green-700 dark:text-green-400 border-green-200 dark:border-green-800' : '' }}
                                                {{ $skill->proficiency == 'advanced' ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-400 border-blue-200 dark:border-blue-800' : '' }}
                                                {{ $skill->proficiency == 'intermediate' ? 'bg-yellow-50 dark:bg-yellow-900/20 text-yellow-700 dark:text-yellow-400 border-yellow-200 dark:border-yellow-800' : '' }}
                                                {{ $skill->proficiency == 'beginner' ? 'bg-gray-50 dark:bg-gray-800 text-gray-700 dark:text-gray-300 border-gray-200 dark:border-gray-600' : '' }}
                                                hover:scale-105 hover:shadow-md cursor-default">
                                            {{ $skill->name }}
                                        </span>
                                        {{-- Tooltip yang Ditingkatkan --}}
                                        <div
                                            class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-1.5 bg-gray-900 dark:bg-black text-white text-xs font-semibold rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-lg pointer-events-none z-10">
                                            {{ ucfirst($skill->proficiency) }}
                                            {{-- Segitiga bawah tooltip --}}
                                            <div
                                                class="absolute top-full left-1/2 transform -translate-x-1/2 border-4 border-transparent border-t-gray-900 dark:border-t-black">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            {{-- Legend --}}
            <div
                class="mt-12 bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 p-6 md:p-8">
                <h3
                    class="text-lg font-extrabold text-gray-900 dark:text-white mb-6 uppercase tracking-wider flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Proficiency Legend
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="flex items-center bg-gray-50 dark:bg-gray-900/50 p-3 rounded-lg">
                        <span
                            class="w-4 h-4 rounded-full bg-green-500 mr-3 shadow-sm border-2 border-white dark:border-gray-800"></span>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Expert <br><span
                                class="text-xs font-normal text-gray-500">Production-ready</span></span>
                    </div>
                    <div class="flex items-center bg-gray-50 dark:bg-gray-900/50 p-3 rounded-lg">
                        <span
                            class="w-4 h-4 rounded-full bg-blue-500 mr-3 shadow-sm border-2 border-white dark:border-gray-800"></span>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Advanced <br><span
                                class="text-xs font-normal text-gray-500">Strong proficiency</span></span>
                    </div>
                    <div class="flex items-center bg-gray-50 dark:bg-gray-900/50 p-3 rounded-lg">
                        <span
                            class="w-4 h-4 rounded-full bg-yellow-500 mr-3 shadow-sm border-2 border-white dark:border-gray-800"></span>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Intermediate <br><span
                                class="text-xs font-normal text-gray-500">Working knowledge</span></span>
                    </div>
                    <div class="flex items-center bg-gray-50 dark:bg-gray-900/50 p-3 rounded-lg">
                        <span
                            class="w-4 h-4 rounded-full bg-gray-400 mr-3 shadow-sm border-2 border-white dark:border-gray-800"></span>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Beginner <br><span
                                class="text-xs font-normal text-gray-500">Learning phase</span></span>
                    </div>
                </div>
            </div>

            {{-- CTA --}}
            <div class="text-center mt-16 mb-8">
                <p class="text-gray-600 dark:text-gray-400 mb-6 text-lg font-medium">
                    See how I've applied these skills in real-world projects
                </p>
                <a href="{{ route('projects.index') }}"
                    class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white font-bold rounded-xl hover:from-primary-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-primary-500/30 hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                    View My Projects
                </a>
            </div>

        </div>
    </div>
@endsection
