@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between gap-3">
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
    </nav>
@endif
