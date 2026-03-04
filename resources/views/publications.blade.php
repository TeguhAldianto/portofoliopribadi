@extends('layouts.app')

@section('title', 'Publications & Certifications - Teguh Aldianto')
@section('description', 'Academic publications and professional certifications earned by Teguh Aldianto.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <h1 class="section-title text-center">Publications & Certifications</h1>

            <p class="text-center text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto">
                Academic publications and professional certifications demonstrating continuous learning and expertise in
                software development.
            </p>

            <div class="space-y-6">

                @foreach ($publications as $publication)
                    <div class="card p-6 hover:shadow-xl transition-shadow">
                        <div class="flex items-start justify-between mb-4">

                            <div class="flex-1">

                                <div class="flex items-center gap-3 mb-2">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                        {{ $publication->title }}
                                    </h3>

                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        {{ $publication->type == 'publication' ? 'bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200' : '' }}
                                        {{ $publication->type == 'certification' ? 'bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200' : '' }}">
                                        {{ ucfirst($publication->type) }}
                                    </span>
                                </div>

                                <p class="text-primary-600 dark:text-primary-400 font-medium mb-2">
                                    {{ $publication->issuer }}
                                </p>

                                @if ($publication->description)
                                    <p class="text-gray-700 dark:text-gray-300 mb-3">
                                        {{ $publication->description }}
                                    </p>
                                @endif

                                <div class="flex items-center gap-4 text-sm text-gray-600 dark:text-gray-400">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        {{ $publication->formatted_date }}
                                    </span>
                                </div>

                            </div>

                            {{-- tombol link --}}
                            @if ($publication->url)
                                <a href="{{ $publication->url }}" target="_blank" rel="noopener noreferrer"
                                    class="ml-4 inline-flex items-center px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                        </path>
                                    </svg>
                                    View
                                </a>
                            @endif

                        </div>
                    </div>
                @endforeach

            </div>

            @if ($publications->isEmpty())
                <div class="text-center py-12">
                    <svg class="w-16 h-16 text-gray-400 dark:text-gray-600 mx-auto mb-4" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>

                    <p class="text-gray-600 dark:text-gray-400">
                        No publications or certifications available yet.
                    </p>
                </div>
            @endif

            {{-- CTA --}}
            <div class="text-center mt-12">
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    See more about my professional journey
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('experience') }}" class="btn-primary">
                        View Experience
                    </a>

                    <a href="{{ route('resume.download') }}"
                        class="px-6 py-3 bg-white dark:bg-gray-800 text-primary-600 dark:text-primary-400 font-semibold rounded-lg border-2 border-primary-600 dark:border-primary-400 hover:bg-primary-50 dark:hover:bg-gray-700 transition-all duration-200 shadow-md hover:shadow-lg">
                        Download Full CV
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
