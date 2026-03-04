@extends('layouts.app')

@section('title', 'Projects - Teguh Aldianto')
@section('description', 'Portfolio of web and mobile development projects by Teguh Aldianto, showcasing expertise in Laravel, Kotlin, and modern technologies.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="section-title text-center">Projects</h1>
            <p class="text-center text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto">
                A showcase of my web and mobile development projects, demonstrating practical application of modern
                technologies and best practices.
            </p>

            {{-- Projects Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="card overflow-hidden group hover:shadow-2xl transition-all duration-300">
                        {{-- Project Image --}}
                        <div class="relative h-48 overflow-hidden bg-gradient-to-br from-primary-400 to-blue-500">
                            @if($project->image)
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </div>
                            @endif
                            @if($project->is_featured)
                                <span
                                    class="absolute top-3 right-3 px-3 py-1 bg-yellow-400 text-yellow-900 text-xs font-bold rounded-full">
                                    Featured
                                </span>
                            @endif
                        </div>

                        {{-- Project Info --}}
                        <div class="p-6">
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
                                {{ $project->title }}
                            </h3>

                            @if($project->role)
                                <p class="text-sm text-primary-600 dark:text-primary-400 font-medium mb-3">
                                    {{ $project->role }}
                                </p>
                            @endif

                            <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                                {{ $project->description }}
                            </p>

                            {{-- Technologies --}}
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach(array_slice($project->technologies, 0, 4) as $tech)
                                    <span
                                        class="px-2 py-1 bg-primary-100 dark:bg-primary-900 text-primary-700 dark:text-primary-300 text-xs rounded">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                                @if(count($project->technologies) > 4)
                                    <span
                                        class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 text-xs rounded">
                                        +{{ count($project->technologies) - 4 }} more
                                    </span>
                                @endif
                            </div>

                            {{-- Links --}}
                            <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-700">
                                <a href="{{ route('projects.show', $project->slug) }}"
                                    class="text-primary-600 dark:text-primary-400 hover:underline font-medium text-sm">
                                    View Details →
                                </a>
                                <div class="flex gap-3">
                                    @if($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                                            class="text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                                            title="View on GitHub">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.430.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                            </svg>
                                        </a>
                                    @endif
                                    @if($project->demo_url)
                                        <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer"
                                            class="text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                                            title="View Live Demo">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($projects->isEmpty())
                <div class="text-center py-12">
                    <svg class="w-16 h-16 text-gray-400 dark:text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                        </path>
                    </svg>
                    <p class="text-gray-600 dark:text-gray-400">No projects available yet.</p>
                </div>
            @endif
        </div>
    </div>
@endsection