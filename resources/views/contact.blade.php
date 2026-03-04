@extends('layouts.app')

@section('title', 'Contact - Teguh Aldianto')
@section('description', 'Get in touch with Teguh Aldianto for collaboration opportunities or project inquiries.')

@section('content')
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="section-title text-center">Get In Touch</h1>
            <p class="text-center text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto">
                Have a question or want to work together? Feel free to reach out. I'll get back to you as soon as possible.
            </p>

            @if(session('success'))
                <div
                    class="mb-8 p-4 bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-300 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Contact Form --}}
                <div class="card p-8">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send a Message</h2>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Name *
                            </label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white @error('name') border-red-500 @enderror">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Email *
                            </label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Subject
                            </label>
                            <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white">
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Message *
                            </label>
                            <textarea name="message" id="message" rows="5" required
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn-primary w-full">
                            Send Message
                        </button>
                    </form>
                </div>

                {{-- Contact Information --}}
                <div>
                    <div class="card p-8 mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Contact Information</h2>

                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-primary-600 dark:text-primary-400 mr-3 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white">Email</p>
                                    <a href="mailto:aldinamanya08@gmail.com"
                                        class="text-gray-600 dark:text-gray-400 hover:text-primary-600">
                                        aldinamanya08@gmail.com
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-primary-600 dark:text-primary-400 mr-3 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white">Phone</p>
                                    <a href="tel:+62895331170400"
                                        class="text-gray-600 dark:text-gray-400 hover:text-primary-600">
                                        +62 895 3311 70400
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-primary-600 dark:text-primary-400 mr-3 mt-1" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white">LinkedIn</p>
                                    <a href="https://h7.cl/1m9DR" target="_blank"
                                        class="text-gray-600 dark:text-gray-400 hover:text-primary-600">
                                        Teguh Aldianto Profile
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-primary-600 dark:text-primary-400 mr-3 mt-1" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.430.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white">GitHub</p>
                                    <a href="https://h7.cl/1hdko" target="_blank"
                                        class="text-gray-600 dark:text-gray-400 hover:text-primary-600">
                                        GitHub Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card p-8 bg-primary-50 dark:bg-primary-900/20">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Available for Opportunities
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            I'm currently open to full-time positions, freelance projects, and collaboration opportunities
                            in web and mobile development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection