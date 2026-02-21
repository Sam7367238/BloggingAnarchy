<x-layout title="Posts">
    <div class="flex flex-wrap items-end justify-between gap-4">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Journal</p>
            <h1 class="mt-2 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Posts</h1>
        </div>
        <a class="inline-flex items-center justify-center rounded-full bg-red-500 px-5 py-2.5 text-sm font-semibold text-white shadow-sm shadow-red-500/30 transition hover:-translate-y-0.5 hover:bg-red-400" href="{{ route('posts.create') }}">
            New post
        </a>
    </div>

    <div class="mt-8 grid gap-4">
        @forelse($posts as $post)
            <a class="group rounded-3xl border border-white/10 bg-slate-900/70 p-6 shadow-sm shadow-black/30 transition hover:-translate-y-0.5 hover:border-red-400/40 hover:shadow-md" href="{{ route('posts.show', $post) }}">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h2 class="text-lg font-semibold text-white sm:text-xl">{{ $post->title }}</h2>
                        <p class="mt-2 text-sm text-slate-400">{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                    <span class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500 transition group-hover:text-red-300">Open</span>
                </div>
            </a>
        @empty
            <div class="rounded-3xl border border-dashed border-white/20 bg-slate-900/60 p-8 text-center text-sm text-slate-300">
                No posts yet. Start your first entry.
            </div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $posts->links("vendor/pagination/tailwind") }}
    </div>
</x-layout>
