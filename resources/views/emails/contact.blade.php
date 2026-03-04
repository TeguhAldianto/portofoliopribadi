@extends('layouts.app')

@section('title', 'Contact - Teguh Aldianto')
@section('description', 'Get in touch with Teguh Aldianto for collaboration opportunities or project inquiries.')

@section('content')
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <h1
                    class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-purple-600 mb-4 inline-block">
                    Get In Touch
                </h1>
                <p class="text-center text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">
                    Have a question or want to work together? Feel free to reach out. I'll get back to you as soon as
                    possible.
                </p>
            </div>

            @if (session('success'))
                <div
                    class="mb-10 p-4 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-400 rounded-xl flex items-center gap-3">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">

                {{-- Contact Information --}}
                <div class="lg:col-span-2 space-y-6">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-100 dark:border-gray-700 p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Contact Info</h2>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="p-3 bg-primary-50 dark:bg-primary-900/30 rounded-xl mr-4">
                                    <svg class="w-6 h-6 text-primary-600 dark:text-primary-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-500 dark:text-gray-400 mb-1">Email</p>
                                    <a href="mailto:aldinamanya08@gmail.com"
                                        class="text-gray-900 dark:text-white font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                                        aldinamanya08@gmail.com
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="p-3 bg-blue-50 dark:bg-blue-900/30 rounded-xl mr-4">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-500 dark:text-gray-400 mb-1">Phone</p>
                                    <a href="tel:+62895331170400"
                                        class="text-gray-900 dark:text-white font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                        +62 895 3311 70400
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="p-3 bg-purple-50 dark:bg-purple-900/30 rounded-xl mr-4">
                                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-500 dark:text-gray-400 mb-1">LinkedIn</p>
                                    <a href="https://h7.cl/1m9DR" target="_blank"
                                        class="text-gray-900 dark:text-white font-medium hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                                        Teguh Aldianto
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-primary-600 to-purple-600 rounded-3xl p-8 text-white shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Available for Opportunities</h3>
                        <p class="text-primary-100 font-medium leading-relaxed text-sm">
                            I'm currently open to full-time positions, freelance projects, and collaboration opportunities
                            in web and mobile development. Let's discuss your next big idea!
                        </p>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="lg:col-span-3">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-100 dark:border-gray-700 p-8 md:p-10">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send a Message</h2>
                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name"
                                        class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Name
                                        *</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                        @class([
                                            'w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-gray-900 border focus:ring-2 focus:ring-primary-500 outline-none transition-colors dark:text-white',
                                            'border-red-500 dark:border-red-500' => $errors->has('name'),
                                            'border-gray-200 dark:border-gray-700 focus:border-primary-500' => !$errors->has(
                                                'name'),
                                        ])>
                                    @error('name')
                                        <p class="mt-1.5 text-sm font-medium text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email"
                                        class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Email
                                        *</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                        @class([
                                            'w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-gray-900 border focus:ring-2 focus:ring-primary-500 outline-none transition-colors dark:text-white',
                                            'border-red-500 dark:border-red-500' => $errors->has('email'),
                                            'border-gray-200 dark:border-gray-700 focus:border-primary-500' => !$errors->has(
                                                'email'),
                                        ])>
                                    @error('email')
                                        <p class="mt-1.5 text-sm font-medium text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="subject"
                                    class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Subject</label>
                                <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                                    class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 focus:border-primary-500 focus:ring-2 focus:ring-primary-500 outline-none transition-colors dark:text-white">
                            </div>

                            <div>
                                <label for="message"
                                    class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Message
                                    *</label>
                                <textarea name="message" id="message" rows="5" required @class([
                                    'w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-gray-900 border focus:ring-2 focus:ring-primary-500 outline-none transition-colors dark:text-white resize-none',
                                    'border-red-500 dark:border-red-500' => $errors->has('message'),
                                    'border-gray-200 dark:border-gray-700 focus:border-primary-500' => !$errors->has(
                                        'message'),
                                ])>{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1.5 text-sm font-medium text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit"
                                class="w-full py-4 px-6 bg-gray-900 dark:bg-white text-white dark:text-gray-900 font-bold rounded-xl hover:bg-primary-600 dark:hover:bg-primary-50 hover:text-white dark:hover:text-primary-600 transition-colors shadow-lg hover:-translate-y-1 flex items-center justify-center gap-2">
                                Send Message
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
