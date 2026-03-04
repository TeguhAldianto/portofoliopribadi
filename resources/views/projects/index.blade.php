@extends('layouts.app')

@section('title', 'Projects - Teguh Aldianto')
@section('description', 'Portfolio of web and mobile development projects by Teguh Aldianto, showcasing expertise in
    Laravel, Kotlin, and modern technologies.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <h1
                    class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-purple-600 mb-4 inline-block">
                    Projects & Portfolio
                </h1>
                <p class="text-center text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                    A showcase of my web and mobile development projects, demonstrating practical application of modern
                    technologies and best practices.
                </p>
            </div>

            {{-- Projects Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                    <div
                        class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-100 dark:border-gray-700 overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col">

                        {{-- Project Image --}}
                        <div class="relative h-56 overflow-hidden bg-gray-100 dark:bg-gray-800">
                            @if ($project->image)
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div
                                    class="w-full h-full bg-gradient-to-br from-primary-400/20 to-purple-500/20 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-primary-300 dark:text-primary-700" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                            @endif

                            @if ($project->is_featured)
                                <div class="absolute top-4 right-4">
                                    <span
                                        class="px-4 py-1.5 bg-yellow-400 text-yellow-900 text-xs font-black rounded-full shadow-md uppercase tracking-wider flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        Featured
                                    </span>
                                </div>
                            @endif
                        </div>

                        {{-- Project Info --}}
                        <div class="p-6 md:p-8 flex-grow flex flex-col">
                            <h3
                                class="text-2xl font-black text-gray-900 dark:text-white mb-1 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
                                {{ $project->title }}
                            </h3>

                            @if ($project->role)
                                <p class="text-sm text-primary-600 dark:text-primary-400 font-bold mb-4">
                                    {{ $project->role }}
                                </p>
                            @endif

                            <p class="text-gray-600 dark:text-gray-400 mb-6 line-clamp-3 leading-relaxed">
                                {{ $project->description }}
                            </p>

                            {{-- Technologies --}}
                            <div class="flex flex-wrap gap-2 mb-6 mt-auto">
                                @foreach (array_slice($project->technologies, 0, 4) as $tech)
                                    <span
                                        class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-xs font-semibold rounded-lg border border-gray-200 dark:border-gray-600">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                                @if (count($project->technologies) > 4)
                                    <span
                                        class="px-3 py-1 bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 text-xs font-bold rounded-lg border border-primary-100 dark:border-primary-800">
                                        +{{ count($project->technologies) - 4 }}
                                    </span>
                                @endif
                            </div>

                            {{-- Links --}}
                            <div
                                class="flex items-center justify-between pt-5 border-t border-gray-100 dark:border-gray-700">
                                <a href="{{ route('projects.show', $project->slug) }}"
                                    class="text-primary-600 dark:text-primary-400 hover:text-primary-700 font-bold text-sm flex items-center group/link">
                                    View Details
                                    <svg class="w-4 h-4 ml-1 transform group-hover/link:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                                <div class="flex gap-3">
                                    @if ($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                                            class="text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors"
                                            title="View Code">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.430.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($project->demo_url)
                                        <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer"
                                            class="text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                                            title="Live Demo">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

            @if ($projects->isEmpty())
                <div
                    class="text-center py-20 bg-white dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-sm mt-8">
                    <div
                        class="w-24 h-24 bg-gray-50 dark:bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">No Projects Yet</h3>
                    <p class="text-gray-500 dark:text-gray-400">Check back later for updates to my portfolio.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
