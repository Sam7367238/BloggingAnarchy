<x-layout title="Profile">
    <div class="mx-auto w-full max-w-2xl space-y-6">
        <section class="rounded-3xl border border-white/10 bg-slate-900/70 p-6 shadow-sm shadow-black/30 sm:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Account</p>
            <h1 class="mt-2 text-3xl font-semibold tracking-tight text-white">Profile</h1>
            <p class="mt-4 text-sm text-slate-300">Signed in as <span class="font-semibold text-white">{{ auth()->user()->username }}</span></p>

            <form method="post" action="{{ route('logout') }}" class="mt-6">
                @csrf
                @method('POST')

                <button class="inline-flex items-center justify-center rounded-full border border-white/10 bg-slate-950/60 px-5 py-2.5 text-sm font-semibold text-slate-200 transition hover:-translate-y-0.5 hover:border-red-400/60 hover:text-white" type="submit">
                    Log Out
                </button>
            </form>
        </section>

        <section class="rounded-3xl border border-white/10 bg-slate-900/70 p-6 shadow-sm shadow-black/30 sm:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Security</p>
            <h2 class="mt-2 text-2xl font-semibold tracking-tight text-white">Reset Password</h2>

            <div class="mt-5">
                <x-forms.errors/>
            </div>

            <form method="post" action="{{ route('profile.resetPassword') }}" class="mt-6 space-y-5">
                @csrf
                @method('POST')

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-300" for="current_password">Current Password</label>
                    <input class="w-full rounded-2xl border border-white/10 bg-slate-950/70 px-4 py-3 text-slate-100 shadow-sm transition focus:border-red-400/70 focus:outline-none focus:ring focus:ring-red-500/30" type="password" id="current_password" name="current_password">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-300" for="new_password">New Password</label>
                    <input class="w-full rounded-2xl border border-white/10 bg-slate-950/70 px-4 py-3 text-slate-100 shadow-sm transition focus:border-red-400/70 focus:outline-none focus:ring focus:ring-red-500/30" type="password" id="new_password" name="new_password">
                </div>

                <button class="inline-flex items-center justify-center rounded-full bg-red-500 px-5 py-2.5 text-sm font-semibold text-white shadow-sm shadow-red-500/30 transition hover:-translate-y-0.5 hover:bg-red-400" type="submit">
                    Change Password
                </button>
            </form>
        </section>
    </div>
</x-layout>
