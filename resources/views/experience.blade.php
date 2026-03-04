@extends('layouts.app')

@section('title', 'Experience - Teguh Aldianto')
@section('description', 'Professional experience and work history of Teguh Aldianto including education, internships, and projects.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="text-center mb-10">
                <h1 class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-purple-600 mb-4 inline-block">
                    Experience & Journey
                </h1>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    My professional timeline, educational background, and key projects that shaped my career.
                </p>
            </div>

            {{-- Filter --}}
            <div class="flex justify-center mb-16">
                <div class="inline-flex flex-wrap justify-center rounded-xl border border-gray-200 dark:border-gray-700 p-1.5 bg-white dark:bg-gray-800 shadow-sm gap-1 sm:gap-0">
                    <a href="{{ route('experience') }}"
                        class="px-5 py-2.5 text-sm font-semibold rounded-lg transition-all duration-200 {{ !request('type') || request('type') == 'all' ? 'bg-primary-600 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        All
                    </a>
                    <a href="{{ route('experience', ['type' => 'work']) }}"
                        class="px-5 py-2.5 text-sm font-semibold rounded-lg transition-all duration-200 {{ request('type') == 'work' ? 'bg-primary-600 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Work
                    </a>
                    <a href="{{ route('experience', ['type' => 'internship']) }}"
                        class="px-5 py-2.5 text-sm font-semibold rounded-lg transition-all duration-200 {{ request('type') == 'internship' ? 'bg-primary-600 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Internship
                    </a>
                    <a href="{{ route('experience', ['type' => 'education']) }}"
                        class="px-5 py-2.5 text-sm font-semibold rounded-lg transition-all duration-200 {{ request('type') == 'education' ? 'bg-primary-600 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Education
                    </a>
                    <a href="{{ route('experience', ['type' => 'project']) }}"
                        class="px-5 py-2.5 text-sm font-semibold rounded-lg transition-all duration-200 {{ request('type') == 'project' ? 'bg-primary-600 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Projects
                    </a>
                </div>
            </div>

            {{-- Timeline --}}
            <div class="relative">
                {{-- Timeline line (Tengah di Desktop, Kiri di Mobile) --}}
                <div class="absolute left-[39px] md:left-1/2 transform md:-translate-x-1/2 h-full w-1 bg-gradient-to-b from-primary-200 via-purple-200 to-transparent dark:from-primary-900/50 dark:via-purple-900/50 rounded-full"></div>

                @foreach($experiences as $index => $experience)
                    <div class="relative mb-12 {{ $index % 2 == 0 ? 'md:pr-1/2 md:text-right' : 'md:pl-1/2 md:ml-auto' }}">

                        {{-- Timeline dot --}}
                        <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-6 h-6 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 border-4 border-white dark:border-gray-900 shadow-md z-10 top-6"></div>

                        {{-- Content card --}}
                        <div class="ml-20 md:ml-0 {{ $index % 2 == 0 ? 'md:mr-12' : 'md:ml-12' }}">
                            <div class="bg-white dark:bg-gray-800 p-6 md:p-8 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">

                                <div class="flex items-start justify-between mb-4 flex-col {{ $index % 2 == 0 ? 'md:items-end' : 'md:items-start' }}">

                                    <div class="mb-3 flex flex-wrap gap-2 {{ $index % 2 == 0 ? 'md:justify-end' : '' }}">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider
                                            {{ $experience->type == 'work' ? 'bg-blue-100 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300' : '' }}
                                            {{ $experience->type == 'internship' ? 'bg-purple-100 text-purple-700 dark:bg-purple-900/50 dark:text-purple-300' : '' }}
                                            {{ $experience->type == 'education' ? 'bg-green-100 text-green-700 dark:bg-green-900/50 dark:text-green-300' : '' }}
                                            {{ $experience->type == 'project' ? 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900/50 dark:text-yellow-300' : '' }}">
                                            {{ $experience->type }}
                                        </span>
                                        <span class="inline-flex items-center text-sm font-semibold text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 px-3 py-1 rounded-full">
                                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            {{ $experience->date_range }}
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mb-1">
                                            {{ $experience->title }}
                                        </h3>
                                        <p class="text-primary-600 dark:text-primary-400 font-bold text-lg mb-1">
                                            {{ $experience->company }}
                                        </p>
                                        @if($experience->location)
                                            <p class="text-sm text-gray-500 dark:text-gray-400 flex items-center {{ $index % 2 == 0 ? 'md:justify-end' : '' }}">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                                {{ $experience->location }}
                                            </p>
                                        @endif
                                    </div>
                                </div>

                                <p class="text-gray-700 dark:text-gray-300 mb-5 leading-relaxed {{ $index % 2 == 0 ? 'md:text-right' : 'md:text-left' }}">
                                    {{ $experience->description }}
                                </p>

                                @if($experience->achievements && count($experience->achievements) > 0)
                                    <div class="bg-gray-50 dark:bg-gray-900/50 rounded-xl p-4 border border-gray-100 dark:border-gray-700 text-left">
                                        <h4 class="text-sm font-bold text-gray-900 dark:text-white mb-3 uppercase tracking-wider flex items-center gap-2">
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                                            </svg>
                                            Key Achievements
                                        </h4>
                                        <ul class="space-y-2.5">
                                            @foreach($experience->achievements as $achievement)
                                                <li class="flex items-start text-sm text-gray-600 dark:text-gray-400">
                                                    <svg class="w-5 h-5 text-primary-500 mr-2.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <span class="leading-tight">{{ $achievement }}</span>
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

            {{-- Empty State --}}
            @if($experiences->isEmpty())
                <div class="text-center py-16 bg-white dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-sm">
                    <div class="w-20 h-20 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <p class="text-lg font-bold text-gray-900 dark:text-white mb-2">No Experiences Found</p>
                    <p class="text-gray-500 dark:text-gray-400">There are no records matching your selected filter.</p>
                    <a href="{{ route('experience') }}" class="inline-block mt-4 text-primary-600 hover:text-primary-700 font-semibold">
                        View All Experiences &rarr;
                    </a>
                </div>
            @endif

        </div>
    </div>
@endsection
