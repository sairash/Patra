@extends('layouts.app')

@section('content')
<div id="fullpage">
    <div class="section">
        <form class="inputPlace" method="POST" action="{{ route('login') }}">
          @csrf
             <h1>Patra</h1>
            <div class="input-group">
              <div class="input-group-icon">@</div>
              <div class="input-group-area"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address"></div>
            </div>
                
            <div class="input-group">
              <div class="input-group-icon" ><svg width="4.11mm" height="4.11mm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8" class="icon-asterisk">
                  <path class="asterisk-line" d="M4 0.5 L 4 7.5" />
                  <path class="asterisk-line" d="M1 2 L 7 6" />
                  <path class="asterisk-line" d="M7 2 L 1 6" />
                </svg></div>
              <div class="input-group-area"><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"></div>
              <!-- <div class="input-group-icon">$</div> -->
            </div>
            <button  ype="submit" class="login_Submit">Login</button>
        </form>
    </div>
</div>

@endsection
