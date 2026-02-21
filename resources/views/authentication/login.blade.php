<x-layout title="Login">
    <h1>Log In</h1>

    <x-forms.errors/>

    <form method="post" action="{{ route('login.authenticate') }}">
        <x-forms.authentication submit-value="Log In"/>
    </form>
</x-layout>
