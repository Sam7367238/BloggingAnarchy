<x-layout title="Edit Post">
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="mt-2 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Edit Post</h1>
        </div>
        <a class="text-sm font-semibold text-slate-300 transition hover:text-white" href="{{ route('posts.show', $post) }}">Back to post</a>
    </div>

    <div class="mt-8 space-y-6 rounded-3xl border border-white/10 bg-slate-900/70 p-6 shadow-sm shadow-black/30">
        <x-forms.errors/>

        <form method="POST" action="{{ route('posts.update', $post) }}" class="space-y-6">
            @method('PUT')

            <x-forms.post/>

            <div class="flex flex-wrap items-center gap-3">
                <a class="inline-flex items-center justify-center rounded-full border border-white/10 bg-slate-950/60 px-5 py-2.5 text-sm font-semibold text-slate-200 transition hover:-translate-y-0.5 hover:border-red-400/60 hover:text-white" href="{{ route('posts.show', $post) }}">
                    Cancel
                </a>
                <button class="inline-flex items-center justify-center rounded-full bg-red-500 px-5 py-2.5 text-sm font-semibold text-white shadow-sm shadow-red-500/30 transition hover:-translate-y-0.5 hover:bg-red-400" type="submit">
                    Update post
                </button>
            </div>
        </form>
    </div>
</x-layout>
