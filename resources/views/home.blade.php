<x-layout>
    <section class="rounded-3xl border border-white/10 bg-slate-900/70 p-8 shadow-lg shadow-black/40">
        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Welcome</p>
        <h1 class="mt-3 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Home</h1>
        <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-300 sm:text-base">
            An anarchy where anyone can create posts or even edit/delete other people's posts. No moderation!
        </p>
        <div class="mt-6 flex flex-wrap items-center gap-3">
            <a class="inline-flex items-center justify-center rounded-full bg-red-500 px-5 py-2.5 text-sm font-semibold text-white shadow-sm shadow-red-500/30 transition hover:-translate-y-0.5 hover:bg-red-400" href="{{ route('posts.index') }}">
                Browse posts
            </a>
            <a class="inline-flex items-center justify-center rounded-full border border-white/10 bg-slate-950/60 px-5 py-2.5 text-sm font-semibold text-slate-200 transition hover:-translate-y-0.5 hover:border-red-400/60 hover:text-white" href="{{ route('posts.create') }}">
                New post
            </a>
        </div>
    </section>
</x-layout>
