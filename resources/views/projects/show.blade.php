@extends('layouts.app')

@section('title', $project->title . ' - Projects')
@section('description', $project->description)
@section('og_title', $project->title)
@section('og_description', $project->description)

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Back Button --}}
            <div class="mb-8">
                <a href="{{ route('projects.index') }}"
                    class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors shadow-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Projects
                </a>
            </div>

            {{-- Project Main Container --}}
            <article
                class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-700 overflow-hidden mb-12">

                @if ($project->image)
                    <div class="relative h-64 md:h-[400px] w-full">
                        <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-transparent to-transparent">
                        </div>
                    </div>
                @endif

                <div class="p-8 md:p-12 {{ !$project->image ? 'pt-12' : 'relative -mt-16 md:-mt-20 z-10' }}">

                    {{-- Header Area --}}
                    <div
                        class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-md border border-gray-100 dark:border-gray-700 mb-8 flex flex-wrap items-start justify-between gap-4">
                        <div>
                            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-2">
                                {{ $project->title }}
                            </h1>
                            @if ($project->role)
                                <p class="text-lg text-primary-600 dark:text-primary-400 font-bold">
                                    {{ $project->role }}
                                </p>
                            @endif
                        </div>

                        @if ($project->is_featured)
                            <span
                                class="inline-flex items-center px-4 py-2 bg-yellow-50 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-400 border border-yellow-200 dark:border-yellow-800/50 rounded-xl font-bold text-sm uppercase tracking-wider">
                                <svg class="w-4 h-4 mr-1.5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                Featured
                            </span>
                        @endif
                    </div>

                    {{-- Overview --}}
                    <div class="mb-10">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Project Overview</h2>
                        <div
                            class="prose dark:prose-invert max-w-none text-gray-700 dark:text-gray-300 text-lg leading-relaxed bg-gray-50 dark:bg-gray-900/50 p-6 rounded-2xl border border-gray-100 dark:border-gray-700">
                            {{ $project->description }}
                        </div>
                    </div>

                    {{-- Technologies --}}
                    <div class="mb-10">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Technologies & Stack</h2>
                        <div class="flex flex-wrap gap-3">
                            @foreach ($project->technologies as $tech)
                                <span
                                    class="px-5 py-2.5 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 border-2 border-gray-200 dark:border-gray-700 rounded-xl font-bold shadow-sm hover:border-primary-500 hover:text-primary-600 transition-colors cursor-default">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    {{-- Links & Actions --}}
                    <div class="flex flex-wrap gap-4 pt-8 border-t border-gray-100 dark:border-gray-700">
                        @if ($project->demo_url)
                            <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer"
                                class="flex-1 sm:flex-none inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-primary-600 to-purple-600 text-white font-bold rounded-xl hover:from-primary-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-primary-500/30 hover:-translate-y-1">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                    </path>
                                </svg>
                                Visit Live Site
                            </a>
                        @endif
                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                                class="flex-1 sm:flex-none inline-flex items-center justify-center px-8 py-4 bg-gray-900 dark:bg-white text-white dark:text-gray-900 font-bold rounded-xl hover:bg-gray-800 dark:hover:bg-gray-100 transition-colors shadow-lg hover:-translate-y-1 border border-gray-800 dark:border-white">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.430.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                                Source Code
                            </a>
                        @endif
                    </div>
                </div>
            </article>

            {{-- Related Projects --}}
            @if ($relatedProjects->isNotEmpty())
                <div>
                    <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white mb-6 pl-2">Other Projects to Explore
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($relatedProjects as $related)
                            <a href="{{ route('projects.show', $related->slug) }}"
                                class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 border border-gray-100 dark:border-gray-700 transition-all duration-300 group block">
                                <h3
                                    class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
                                    {{ $related->title }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-2 text-sm">
                                    {{ $related->description }}
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    @foreach (array_slice($related->technologies, 0, 3) as $tech)
                                        <span
                                            class="px-2.5 py-1 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-gray-700 dark:text-gray-300 text-xs font-semibold rounded-lg">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
