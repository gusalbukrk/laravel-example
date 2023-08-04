<x-layout title="Homepage">
    @auth
        <h1>Welcome, {{auth()->user()->email}}!</h1>
        <a href="/logout">Log Out</a>
    @else
        <a href="/login">Log In</a>
        <a href="/signup">Sign Up</a>
    @endauth
</x-layout>
