@csrf

<div class="space-y-2">
    <label class="text-sm font-semibold text-slate-300" for="title">Title</label>
    <input class="w-full rounded-2xl border border-white/10 bg-slate-950/70 px-4 py-3 text-slate-100 shadow-sm transition focus:border-red-400/70 focus:outline-none focus:ring focus:ring-red-500/30" type="text" id="title" name="title" value="{{ old("title", $post->title ?? '') }}">
</div>

<div class="space-y-2">
    <label class="text-sm font-semibold text-slate-300" for="content">Content</label>
    <textarea class="w-full rounded-2xl border border-white/10 bg-slate-950/70 px-4 py-3 text-slate-100 shadow-sm transition focus:border-red-400/70 focus:outline-none focus:ring focus:ring-red-500/30" name="content" id="content" rows="10">{{ old('content', $post->content ?? '') }}</textarea>
</div>
