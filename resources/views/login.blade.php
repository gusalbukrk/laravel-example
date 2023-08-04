<x-layout title="Login">
    @if (session()->has('error'))
        <p class="flash-error">{{session('error')}}</p>
    @endif
    <form action="/login" method="POST">
        @csrf

        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
            @error('email')
            <p class="input-error">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
            @error('password')
            <p class="input-error">{{$message}}</p>
            @enderror
        </div>

        <input type="submit" value="Log In">
    </form>
</x-layout>
