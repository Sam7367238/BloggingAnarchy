@props(["submitValue" => "Authenticate"])
@method("POST")
@csrf

<div class="space-y-2">
    <label class="text-sm font-semibold text-slate-300" for="username">Username</label>
    <input class="w-full rounded-2xl border border-white/10 bg-slate-950/70 px-4 py-3 text-slate-100 shadow-sm transition focus:border-red-400/70 focus:outline-none focus:ring focus:ring-red-500/30" type="text" id="username" name="username" value="{{ old('username') }}">
</div>

<div class="space-y-2">
    <label class="text-sm font-semibold text-slate-300" for="password">Password</label>
    <input class="w-full rounded-2xl border border-white/10 bg-slate-950/70 px-4 py-3 text-slate-100 shadow-sm transition focus:border-red-400/70 focus:outline-none focus:ring focus:ring-red-500/30" type="password" id="password" name="password">
</div>

<button class="inline-flex items-center justify-center rounded-full bg-red-500 px-5 py-2.5 text-sm font-semibold text-white shadow-sm shadow-red-500/30 transition hover:-translate-y-0.5 hover:bg-red-400" type="submit">
    {{ $submitValue }}
</button>
