@extends('layouts.app')

@section('content')
<div id="fullpage">
    <div class="section">
        <form class="inputPlace" method="POST" action="{{ route('register') }}">
          @csrf
             <h1>Patra</h1>
            <div class="input-group">
                  <div class="input-group-icon">az</div>
                  <div class="input-group-area"><input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="patra-name" autofocus placeholder="Name"></div>
                </div>

          <div class="input-group">
            <div class="input-group-icon">@</div>
            <div class="input-group-area"><input id="email" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="patra-email"></div>
          </div>
                
                <div class="input-group">
                  <div class="input-group-icon" ><svg width="4.11mm" height="4.11mm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8" class="icon-asterisk">
                      <path class="asterisk-line" d="M4 0.5 L 4 7.5" />
                      <path class="asterisk-line" d="M1 2 L 7 6" />
                      <path class="asterisk-line" d="M7 2 L 1 6" />
                    </svg></div>
                  <div class="input-group-area"><input id="password" type="password" name="password" placeholder="Password" required autocomplete="patra-password"></div>
                  <!-- <div class="input-group-icon">$</div> -->
                </div>
          <div class="input-group">
            <div class="input-group-icon" ><svg width="4.11mm" height="4.11mm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8" class="icon-asterisk">
              <path class="asterisk-line" d="M4 0.5 L 4 7.5" />
              <path class="asterisk-line" d="M1 2 L 7 6" />
              <path class="asterisk-line" d="M7 2 L 1 6" />
            </svg></div>
            <div class="input-group-area"><input  id="password-confirm" placeholder="Conform Password" type="password"  name="password_confirmation" required ></div>
            <!-- <div class="input-group-icon">$</div> -->
          </div>
            <button ype="submit" class="login_Submit">Signup</button>
        </form>
    </div>
</div>

@endsection
