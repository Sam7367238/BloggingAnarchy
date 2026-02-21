@props(["submitValue" => "Authenticate"])
@method("POST")
@csrf

<div>
    <label for="username">Username</label>
    <input type="text" name="username" value="{{ old('username') }}">
</div>

<div>
    <label for="password">Password</label>
    <input type="password" name="password">
</div>

<input type="submit" value="{{ $submitValue }}">
