@extends('layouts.app')

@section('title', 'Publications & Certifications - Teguh Aldianto')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 py-16 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="text-center mb-12">
                {{-- Gunakan utility class tailwind, hapus class section-title kustom nanti --}}
                <h1
                    class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-purple-600 mb-4">
                    Publications & Certifications
                </h1>
                <p class="text-gray-600 dark:text-gray-400 mb-6 max-w-2xl mx-auto">
                    Academic publications and professional certifications demonstrating continuous learning and expertise in
                    software development.
                </p>

                <a href="{{ route('resume.download') }}"
                    class="inline-flex items-center px-6 py-3 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 transition-all duration-200 shadow-md hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Download Full CV
                </a>
            </div>

            <div class="space-y-6">

                {{-- Tampilkan Publikasi Featured Jika Ada --}}
                @if ($featuredPublication)
                    <x-publication-card :publication="$featuredPublication" :isFeatured="true" />
                @endif

                {{-- Looping Publikasi Biasa --}}
                @forelse ($publications as $pub)
                    <x-publication-card :publication="$pub" />
                @empty
                    @if (!$featuredPublication)
                        {{-- Munculkan pesan kosong jika TIDAK ADA data sama sekali --}}
                        <div class="text-center py-10 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                            <p class="text-gray-600 dark:text-gray-400">
                                No publications or certifications available yet.
                            </p>
                        </div>
                    @endif
                @endforelse

            </div>

            {{-- CTA bawah --}}
            <div class="text-center mt-12">
                <p class="text-gray-600 dark:text-gray-400 mb-6">See more about my professional journey</p>
                <a href="{{ route('experience') }}"
                    class="inline-flex items-center px-6 py-3 bg-white dark:bg-gray-800 text-primary-600 border border-primary-600 font-semibold rounded-lg hover:bg-primary-50 transition-all shadow-sm">
                    View Experience
                </a>
            </div>

        </div>
    </div>
@endsection
