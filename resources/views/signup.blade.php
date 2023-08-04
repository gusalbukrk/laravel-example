<x-layout title="Signup">
    <form action="/signup" method="POST">
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

        <div>
            <label for="passwordConfirmation">password confirmation</label>
            <input type="password" name="password_confirmation" id="passwordConfirmation">
        </div>

        <input type="submit" value="Sign Up">
    </form>
</x-layout>
