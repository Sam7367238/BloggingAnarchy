<x-layout title="Post">
    <div class="flex flex-wrap items-start justify-between gap-4">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Post</p>
            <h1 class="mt-2 text-3xl font-semibold tracking-tight text-white sm:text-4xl">{{ $post->title }}</h1>
            <p class="mt-2 text-md text-slate-300">{{ '@' . $post->user->username }}</p>
            <p class="mt-2 text-sm text-slate-400">{{ $post->created_at->diffForHumans() }}</p>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <a class="inline-flex items-center justify-center rounded-full border border-white/10 bg-slate-950/60 px-5 py-2.5 text-sm font-semibold text-slate-200 transition hover:-translate-y-0.5 hover:border-red-400/60 hover:text-white" href="{{ route('posts.index') }}">
                Back to posts
            </a>
            <a class="inline-flex items-center justify-center rounded-full bg-red-500 px-5 py-2.5 text-sm font-semibold text-white shadow-sm shadow-red-500/30 transition hover:-translate-y-0.5 hover:bg-red-400" href="{{ route('posts.edit', $post) }}">
                Edit
            </a>
            <form method="post" action="{{ route("posts.destroy", $post) }}">
                @method('DELETE')
                @csrf

                <button class="inline-flex items-center justify-center rounded-full border border-rose-400/40 bg-rose-500/10 px-5 py-2.5 text-sm font-semibold text-rose-200 transition hover:-translate-y-0.5 hover:border-rose-300/70 hover:text-rose-100" type="submit">
                    Delete
                </button>
            </form>
        </div>
    </div>

    <div class="mt-8 rounded-3xl border border-white/10 bg-slate-900/70 p-6 text-base leading-relaxed text-slate-200 shadow-sm shadow-black/30 whitespace-pre-line">
        {{ $post->content }}
    </div>
</x-layout>
