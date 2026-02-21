<x-layout title="Register">
    <div class="mx-auto w-full max-w-xl">
        <div class="rounded-3xl border border-white/10 bg-slate-900/70 p-6 shadow-sm shadow-black/30 sm:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Join in</p>
            <h1 class="mt-2 text-3xl font-semibold tracking-tight text-white">Sign Up</h1>
            <p class="mt-3 text-sm text-slate-300">Create an account to start posting right away.</p>

            <div class="mt-6">
                <x-forms.errors/>
            </div>

            <form method="post" action="{{ route('register.store') }}" class="mt-6 space-y-6">
                <x-forms.authentication submit-value="Sign Up"/>
            </form>

            <p class="mt-6 text-sm text-slate-400">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold text-red-300 transition hover:text-red-200">Log in</a>
            </p>
        </div>
    </div>
</x-layout>
