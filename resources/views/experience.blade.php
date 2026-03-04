@extends('layouts.app')

@section('title', 'Experience - Teguh Aldianto')
@section('description', 'Professional experience and work history of Teguh Aldianto including education, internships, and projects.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="section-title text-center">Experience</h1>

            {{-- Filter --}}
            <div class="flex justify-center mb-12">
                <div
                    class="inline-flex rounded-lg border border-gray-300 dark:border-gray-600 p-1 bg-white dark:bg-gray-800">
                    <a href="{{ route('experience') }}"
                        class="px-4 py-2 text-sm font-medium rounded-md {{ !request('type') || request('type') == 'all' ? 'bg-primary-600 text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        All
                    </a>
                    <a href="{{ route('experience', ['type' => 'work']) }}"
                        class="px-4 py-2 text-sm font-medium rounded-md {{ request('type') == 'work' ? 'bg-primary-600 text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Work
                    </a>
                    <a href="{{ route('experience', ['type' => 'internship']) }}"
                        class="px-4 py-2 text-sm font-medium rounded-md {{ request('type') == 'internship' ? 'bg-primary-600 text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Internship
                    </a>
                    <a href="{{ route('experience', ['type' => 'education']) }}"
                        class="px-4 py-2 text-sm font-medium rounded-md {{ request('type') == 'education' ? 'bg-primary-600 text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Education
                    </a>
                    <a href="{{ route('experience', ['type' => 'project']) }}"
                        class="px-4 py-2 text-sm font-medium rounded-md {{ request('type') == 'project' ? 'bg-primary-600 text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Projects
                    </a>
                </div>
            </div>

            {{-- Timeline --}}
            <div class="relative">
                {{-- Timeline line --}}
                <div
                    class="absolute left-8 md:left-1/2 transform md:-translate-x-1/2 h-full w-0.5 bg-gray-300 dark:bg-gray-600">
                </div>

                @foreach($experiences as $index => $experience)
                    <div class="relative mb-12 {{ $index % 2 == 0 ? 'md:pr-1/2 md:text-right' : 'md:pl-1/2 md:ml-auto' }}">
                        {{-- Timeline dot --}}
                        <div
                            class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-primary-600 dark:bg-primary-400 border-4 border-white dark:border-gray-900">
                        </div>

                        {{-- Content card --}}
                        <div class="ml-16 md:ml-0 {{ $index % 2 == 0 ? 'md:mr-12' : 'md:ml-12' }}">
                            <div class="card p-6 hover:shadow-2xl transition-shadow duration-300">
                                <div class="flex items-start justify-between mb-2">
                                    <div class="{{ $index % 2 == 0 ? 'md:text-right' : '' }} flex-1">
                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">
                                            {{ $experience->title }}
                                        </h3>
                                        <p class="text-primary-600 dark:text-primary-400 font-medium mb-1">
                                            {{ $experience->company }}
                                        </p>
                                        @if($experience->location)
                                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                                {{ $experience->location }}
                                            </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="flex items-center gap-2 mb-3 {{ $index % 2 == 0 ? 'md:justify-end' : '' }}">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-primary-100 dark:bg-primary-900 text-primary-800 dark:text-primary-300">
                                        {{ ucfirst($experience->type) }}
                                    </span>
                                    <span class="text-sm text-gray-600 dark:text-gray-400">
                                        {{ $experience->date_range }}
                                    </span>
                                </div>

                                <p class="text-gray-700 dark:text-gray-300 mb-4">
                                    {{ $experience->description }}
                                </p>

                                @if($experience->achievements && count($experience->achievements) > 0)
                                    <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-2">
                                            Key Achievements:
                                        </h4>
                                        <ul class="space-y-2">
                                            @foreach($experience->achievements as $achievement)
                                                <li class="flex items-start text-sm text-gray-600 dark:text-gray-400">
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
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($experiences->isEmpty())
                <div class="text-center py-12">
                    <svg class="w-16 h-16 text-gray-400 dark:text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    <p class="text-gray-600 dark:text-gray-400">No experiences found for this filter.</p>
                </div>
            @endif
        </div>
    </div>
@endsection