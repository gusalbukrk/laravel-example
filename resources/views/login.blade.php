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
<style>
    .flash-error {
        color: red;
    }

    form div {
        margin-bottom: 2rem;
    }

    .input-error {
        font-size: 0.8rem;
        color: red;
    }

    label {
        text-transform: capitalize;
        margin-right: 0.5rem;
        display: block;
        margin-bottom: 0.5rem;
    }

    label::after {
        content: ":";
    }
</style>
