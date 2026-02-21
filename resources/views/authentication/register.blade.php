<x-layout title="Register">
    <h1>Sign Up</h1>

    <x-forms.errors/>

    <form method="post" action="{{ route('register') }}">
        <x-forms.authentication submit-value="Sign Up"/>
    </form>
</x-layout>
