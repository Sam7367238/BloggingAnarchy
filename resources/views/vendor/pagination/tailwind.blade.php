@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between gap-4">
        <div class="flex items-center gap-2 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="inline-flex items-center rounded-full border border-white/10 bg-slate-950/70 px-4 py-2 text-sm font-semibold text-slate-500 shadow-sm">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="inline-flex items-center rounded-full border border-white/10 bg-slate-950/70 px-4 py-2 text-sm font-semibold text-slate-200 shadow-sm transition hover:border-red-400/60 hover:text-white">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="inline-flex items-center rounded-full border border-white/10 bg-slate-950/70 px-4 py-2 text-sm font-semibold text-slate-200 shadow-sm transition hover:border-red-400/60 hover:text-white">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="inline-flex items-center rounded-full border border-white/10 bg-slate-950/70 px-4 py-2 text-sm font-semibold text-slate-500 shadow-sm">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden flex-1 items-center justify-between gap-4 sm:flex">
            <p class="text-sm text-slate-400">
                {!! __('Showing') !!}
                @if ($paginator->firstItem())
                    <span class="font-semibold text-white">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="font-semibold text-white">{{ $paginator->lastItem() }}</span>
                @else
                    {{ $paginator->count() }}
                @endif
                {!! __('of') !!}
                <span class="font-semibold text-white">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </p>

            <div class="inline-flex items-center gap-1 rounded-full border border-white/10 bg-slate-950/70 p-1 shadow-sm">
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}" class="inline-flex h-9 w-9 items-center justify-center rounded-full text-slate-500">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="inline-flex h-9 w-9 items-center justify-center rounded-full text-slate-300 transition hover:bg-red-500/20 hover:text-white" aria-label="{{ __('pagination.previous') }}">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span class="px-2 text-sm font-semibold text-slate-500">{{ $element }}</span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page" class="inline-flex h-9 min-w-[2.25rem] items-center justify-center rounded-full bg-red-500 px-3 text-sm font-semibold text-white">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}" class="inline-flex h-9 min-w-[2.25rem] items-center justify-center rounded-full px-3 text-sm font-semibold text-slate-300 transition hover:bg-red-500/20 hover:text-white" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="inline-flex h-9 w-9 items-center justify-center rounded-full text-slate-300 transition hover:bg-red-500/20 hover:text-white" aria-label="{{ __('pagination.next') }}">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.next') }}" class="inline-flex h-9 w-9 items-center justify-center rounded-full text-slate-500">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                @endif
            </div>
        </div>
    </nav>
@endif
