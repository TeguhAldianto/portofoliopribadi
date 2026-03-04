@extends('layouts.app')

@section('title', $project->title . ' - Projects')
@section('description', $project->description)
@section('og_title', $project->title)
@section('og_description', $project->description)

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Back Button --}}
            <div class="mb-8">
                <a href="{{ route('projects.index') }}"
                    class="inline-flex items-center text-primary-600 dark:text-primary-400 hover:underline">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Projects
                </a>
            </div>

            {{-- Project Header --}}
            <div class="card p-8 mb-8">
                @if($project->image)
                    <img src="{{ $project->image_url }}" alt="{{ $project->title }}"
                        class="w-full h-64 md:h-96 object-cover rounded-lg mb-6">
                @endif

                <div class="flex flex-wrap items-start justify-between gap-4 mb-6">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ $project->title }}
                        </h1>
                        @if($project->role)
                            <p class="text-lg text-primary-600 dark:text-primary-400 font-medium">
                                {{ $project->role }}
                            </p>
                        @endif
                    </div>

                    @if($project->is_featured)
                        <span
                            class="inline-flex items-center px-4 py-2 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 rounded-lg font-semibold">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            Featured Project
                        </span>
                    @endif
                </div>

                {{-- Description --}}
                <div class="prose dark:prose-invert max-w-none mb-6">
                    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
                        {{ $project->description }}
                    </p>
                </div>

                {{-- Technologies --}}
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Technologies Used</h2>
                    <div class="flex flex-wrap gap-3">
                        @foreach($project->technologies as $tech)
                            <span
                                class="px-4 py-2 bg-primary-100 dark:bg-primary-900 text-primary-700 dark:text-primary-300 rounded-lg font-medium">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>

                {{-- Links --}}
                <div class="flex flex-wrap gap-4 pt-6 border-t border-gray-200 dark:border-gray-700">
                    @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center px-6 py-3 bg-gray-900 dark:bg-gray-700 text-white rounded-lg hover:bg-gray-800 dark:hover:bg-gray-600 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.430.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                            View on GitHub
                        </a>
                    @endif
                    @if($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center px-6 py-3 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                            Live Demo
                        </a>
                    @endif
                </div>
            </div>

            {{-- Related Projects --}}
            @if($relatedProjects->isNotEmpty())
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Related Projects</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($relatedProjects as $related)
                            <a href="{{ route('projects.show', $related->slug) }}"
                                class="card p-6 hover:shadow-xl transition-shadow">
                                <h3
                                    class="text-lg font-bold text-gray-900 dark:text-white mb-2 hover:text-primary-600 dark:hover:text-primary-400">
                                    {{ $related->title }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3 line-clamp-2">
                                    {{ $related->description }}
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    @foreach(array_slice($related->technologies, 0, 3) as $tech)
                                        <span
                                            class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-xs rounded">
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