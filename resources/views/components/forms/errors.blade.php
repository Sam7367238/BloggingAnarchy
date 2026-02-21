@if($errors->any())
    <div class="rounded-2xl border border-rose-400/40 bg-rose-500/10 px-4 py-3 text-rose-200 shadow-sm">
        <p class="text-sm font-semibold">Please fix the following:</p>
        <ul class="mt-2 space-y-1 text-sm text-rose-100">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
