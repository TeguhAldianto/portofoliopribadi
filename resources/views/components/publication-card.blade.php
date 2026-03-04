@props(['publication', 'isFeatured' => false])

<div
    class="bg-white dark:bg-gray-800 rounded-3xl p-6 md:p-8 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 border group relative overflow-hidden
    {{ $isFeatured ? 'border-primary-500 ring-4 ring-primary-500/10' : 'border-gray-100 dark:border-gray-700' }}">

    {{-- Efek Glow Latar Belakang untuk Kartu Featured --}}
    @if ($isFeatured)
        <div
            class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-primary-500/10 dark:bg-primary-500/20 rounded-full blur-2xl pointer-events-none">
        </div>
    @endif

    <div class="flex items-start justify-between flex-col sm:flex-row gap-6 relative z-10">

        <div class="flex-1">

            {{-- Badges Area --}}
            <div class="flex flex-wrap items-center gap-3 mb-4">
                @if ($isFeatured)
                    <span
                        class="inline-flex items-center px-3 py-1 bg-gradient-to-r from-primary-500 to-purple-500 text-white text-xs font-black rounded-full shadow-sm uppercase tracking-wider">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        Featured
                    </span>
                @endif

                <span
                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border
                    {{ strtolower($publication->type) === 'publication' ? 'bg-blue-50 text-blue-700 border-blue-200 dark:bg-blue-900/30 dark:text-blue-400 dark:border-blue-800' : 'bg-green-50 text-green-700 border-green-200 dark:bg-green-900/30 dark:text-green-400 dark:border-green-800' }}">
                    {{ ucfirst($publication->type) }}
                </span>
            </div>

            {{-- Title --}}
            <h3
                class="text-xl md:text-2xl font-black text-gray-900 dark:text-white mb-2 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
                {{ $publication->title }}
            </h3>

            {{-- Issuer --}}
            <p class="text-primary-600 dark:text-primary-400 font-bold mb-3">
                {{ $publication->issuer ?? 'Penulis Terpilih' }}
            </p>

            {{-- Description --}}
            @if (!empty($publication->description))
                <p class="text-gray-600 dark:text-gray-400 mb-5 leading-relaxed line-clamp-3">
                    {{ $publication->description }}
                </p>
            @endif

            {{-- Date Badge --}}
            <div
                class="inline-flex items-center gap-2 text-sm font-semibold text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700/50 px-3 py-1.5 rounded-lg border border-gray-100 dark:border-gray-600">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                {{ $publication->formatted_date ?? \Carbon\Carbon::parse($publication->date)->format('M Y') }}
            </div>
        </div>

        {{-- Action Button --}}
        @if (!empty($publication->url))
            <a href="{{ $publication->url }}" target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center px-6 py-3.5 bg-gray-900 dark:bg-white text-white dark:text-gray-900 font-bold rounded-xl hover:bg-primary-600 dark:hover:bg-primary-50 dark:hover:text-primary-600 transition-all duration-300 shadow-md hover:shadow-lg hover:-translate-y-1 flex-shrink-0 w-full sm:w-auto justify-center group/btn">
                <svg class="w-5 h-5 mr-2 transform group-hover/btn:-translate-y-0.5 group-hover/btn:translate-x-0.5 transition-transform"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
                View File
            </a>
        @endif

    </div>
</div>
