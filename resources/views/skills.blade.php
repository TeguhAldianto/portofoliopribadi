@extends('layouts.app')

@section('title', 'Skills - Teguh Aldianto')
@section('description', 'Technical skills and expertise of Teguh Aldianto in programming languages, frameworks, tools, and methodologies.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="section-title text-center">Skills & Expertise</h1>
            <p class="text-center text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto">
                A comprehensive overview of my technical skills across programming languages, frameworks, tools, and
                development methodologies.
            </p>

            @php
                $categoryInfo = [
                    'language' => [
                        'title' => 'Programming Languages',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>',
                        'color' => 'primary'
                    ],
                    'framework' => [
                        'title' => 'Frameworks & Libraries',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>',
                        'color' => 'blue'
                    ],
                    'tool' => [
                        'title' => 'Tools & Platforms',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>',
                        'color' => 'green'
                    ],
                    'methodology' => [
                        'title' => 'Methodologies & Practices',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>',
                        'color' => 'purple'
                    ]
                ];
            @endphp

            <div class="space-y-12">
                @foreach(['language', 'framework', 'tool', 'methodology'] as $category)
                    @if(isset($skillsGrouped[$category]))
                        <div class="card p-8">
                            <div class="flex items-center mb-6">
                                <svg class="w-8 h-8 text-{{ $categoryInfo[$category]['color'] }}-600 dark:text-{{ $categoryInfo[$category]['color'] }}-400 mr-3"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    {!! $categoryInfo[$category]['icon'] !!}
                                </svg>
                                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                                    {{ $categoryInfo[$category]['title'] }}
                                </h2>
                            </div>

                            <div class="flex flex-wrap gap-3">
                                @foreach($skillsGrouped[$category] as $skill)
                                    <div class="group relative">
                                        <span class="inline-flex items-center px-4 py-2 rounded-lg font-medium transition-all duration-200
                                                        {{ $skill->proficiency == 'expert' ? 'bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200' : '' }}
                                                        {{ $skill->proficiency == 'advanced' ? 'bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200' : '' }}
                                                        {{ $skill->proficiency == 'intermediate' ? 'bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200' : '' }}
                                                        {{ $skill->proficiency == 'beginner' ? 'bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200' : '' }}
                                                        hover:scale-105 hover:shadow-md cursor-default">
                                            {{ $skill->name }}
                                        </span>
                                        {{-- Tooltip --}}
                                        <div
                                            class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-1 bg-gray-900 dark:bg-gray-700 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
                                            {{ ucfirst($skill->proficiency) }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            {{-- Legend --}}
            <div class="mt-12 card p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Proficiency Legend</h3>
                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center">
                        <span class="w-4 h-4 rounded bg-green-500 mr-2"></span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">Expert - Production-ready expertise</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-4 h-4 rounded bg-blue-500 mr-2"></span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">Advanced - Strong proficiency</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-4 h-4 rounded bg-yellow-500 mr-2"></span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">Intermediate - Working knowledge</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-4 h-4 rounded bg-gray-400 mr-2"></span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">Beginner - Learning phase</span>
                    </div>
                </div>
            </div>

            {{-- CTA --}}
            <div class="text-center mt-12">
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    See how I've applied these skills in real-world projects
                </p>
                <a href="{{ route('projects.index') }}" class="btn-primary inline-block">
                    View My Projects
                </a>
            </div>
        </div>
    </div>
@endsection