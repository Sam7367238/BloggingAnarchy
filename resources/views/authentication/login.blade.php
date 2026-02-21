<x-layout title="Login">
    <div class="mx-auto w-full max-w-xl">
        <div class="rounded-3xl border border-white/10 bg-slate-900/70 p-6 shadow-sm shadow-black/30 sm:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Welcome back</p>
            <h1 class="mt-2 text-3xl font-semibold tracking-tight text-white">Log In</h1>
            <p class="mt-3 text-sm text-slate-300">Sign in to continue writing and managing posts.</p>

            <div class="mt-6">
                <x-forms.errors/>
            </div>

            <form method="post" action="{{ route('login.authenticate') }}" class="mt-6 space-y-6">
                <x-forms.authentication submit-value="Log In"/>
            </form>

            <p class="mt-6 text-sm text-slate-400">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-semibold text-red-300 transition hover:text-red-200">Create one</a>
            </p>
        </div>
    </div>
</x-layout>
