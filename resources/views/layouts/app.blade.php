<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Patra</title>
    <meta name="author" content="Matthew Howell" />
    <meta name="description" content="fullPage continuous scrolling demo." />
    <meta name="keywords"  content="fullpage,jquery,demo,scroll,loop,continuous" />
    <meta name="Resource-type" content="Document" />

<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=B612);
    @import url(https://fonts.googleapis.com/css?family=Delius+Swash+Caps);
    body{
      font-family: B612;

    }
  .logoPatra{
      position:fixed;
      font-family: B612;
      top: 10px;
      left: 10px;
      z-index: 99999;
      height: 80px;
      width: 80px;

    }
  .logoLink{
      position: relative;
      text-align: center;
      color: white;
      font-family: Delius Swash Caps;
  }
  .centered {
      position: absolute;
      top:  0%;
      left: 50%;
      transform: translate(-50%, -100%);
      font-size: 40px;
  }
  .loginSignup{
      position:fixed;
      top: 40px;
      right: 10px;
      z-index: 99999;
  }
  .login{
      margin-right: 14px;
      padding: 8px;
      background-color: #d9b8c4;
      color: white;
      border-radius: 5px;
  }
  .signup{
    margin-right: 20px;
    padding: 8px;
    background-color: #703d57;
    color: white;
    border-radius: 5px;
  }
  .downloadButton{
    display: flex;
    justify-content: center;
    position:fixed;
    bottom: 30px;
    left: 10px;
    z-index: 99999;
  }
.androidLogo{
  margin-left:10px; 
}
a{
    text-decoration: none;
  }
.section{
  text-align:center;
}
h1{
  font-size: 6em;
}
p{
  font-size: 2em;
}

.inputPlace{
  width: 50%;
  height: 20vh;
  margin: auto;
  display: block;

}
/*QuickReset*/

.input-group{
  display: table;
  border-collapse: collapse;
  width:100%;
  margin: 10px;
}
.input-group > div{
  display: table-cell;
  border: 1px solid #ddd;
  vertical-align: middle;  /* needed for Safari */
}
.input-group-icon{
  background:#957186;
  color: #fff;
  padding: 0 12px
}
.input-group-area{
  width:100%;
}
.input-group input{
  border: 0;
  display: block;
  width: 97%;
  padding: 8px;
  font-size: 15px;
}
.asterisk-line {
  stroke: white;
}
.login_Submit{
  border:0;
  margin-top:30px;
  padding: 8px;
    background-color: #d9b8c4;
    color: white;
    border-radius: 5px;
    width: 50%;
    font-size:20px;
    cursor: pointer;
}
.login_Submit:hover{
    background-color: #703d57;

}
</style>

</head>
<body>
    <div id="app">
        
<div class="logoPatra"><a class="logoLink" href="/"><img style="height: 100%" src="image/logo/patra_header.png"><div class="centered">Patra</div></a></div>
<div class="loginSignup">
   @if (Route::has('login'))
      @auth
        <a class="login" href="/noteBook">Book</a>
        <a class="signup" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      @else
          <a class="login" href="/login">Login</a>
        @if (Route::has('register'))
          <a class="signup" href="/register">Signup</a>
        @endif
      @endauth
    @endif
</div>
<div class="downloadButton">
  <a href="/windows">
    <div class="Logo">
      <!-- Download -->
      
      <svg width="4.105mm" height="4.176mm" version="1.1" viewBox="0 0 23.105 23.176" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
       <metadata>
        <rdf:RDF>
         <cc:Work rdf:about="">
          <dc:format>image/svg+xml</dc:format>
          <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
          <dc:title/>
         </cc:Work>
        </rdf:RDF>
       </metadata>
       <g transform="translate(-94.281 -136.58)">
        <path d="m94.281 139.86 9.4422-1.2859 4e-3 9.1078-9.4377 0.0537zm9.4377 8.8712 7e-3 9.1157-9.4377-1.2976-5.29e-4 -7.8793zm1.1446-10.325 12.52-1.8272v10.987l-12.52 0.0994zm12.522 10.411-3e-3 10.938-12.52-1.767-0.0175-9.1914z" stroke-width=".26458"/>
       </g>
      </svg>

    </div>
  </a>
  <a href="/android">
    <div class="androidLogo">
      <!-- Download -->
      
        <svg width="5.964mm" height="4.113mm" version="1.1" viewBox="0 0 51.964 30.413" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:xlink="http://www.w3.org/1999/xlink">
         <metadata>
          <rdf:RDF>
           <cc:Work rdf:about="">
            <dc:format>image/svg+xml</dc:format>
            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
            <dc:title/>
           </cc:Work>
          </rdf:RDF>
         </metadata>
         <g transform="translate(-99.226 -65.58)">
          <g transform="matrix(.26458 0 0 .26458 125.21 84.015)">
           <g fill="#a4c639">
            <use transform="scale(-1,1)" width="100%" height="100%" xlink:href="#a"/>
            <g id="a" stroke="#000" stroke-width="7.2">
             <rect transform="rotate(29)" x="14" y="-86" width="13" height="86" rx="6.5" fill="#000"/>
            </g>
            <g id="b">
             <ellipse cy="41" rx="91" ry="84" fill="#000"/>
            </g>
           </g>
           <g fill="#fff" stroke="#fff" stroke-width="7.2">
            <path d="m-95 44.5h190"/>
            <circle cx="-42" r="4"/>
            <circle cx="42" r="4"/>
           </g>
          </g>
         </g>
        </svg>


    </div>
  </a>
  <a href="/ios">
    <div class="androidLogo">
      <!-- Download -->
      
        <svg width="3.58mm" height="4.11mm" version="1.1" viewBox="0 0 264.58 314.11" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
         <metadata>
          <rdf:RDF>
           <cc:Work rdf:about="">
            <dc:format>image/svg+xml</dc:format>
            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
            <dc:title/>
           </cc:Work>
          </rdf:RDF>
         </metadata>
         <g transform="translate(63.563 101.17)">
          <path d="m195.48 143.62c-4.7503 10.974-10.373 21.076-16.888 30.363-8.8802 12.661-16.151 21.425-21.755 26.292-8.6863 7.9883-17.993 12.079-27.959 12.312-7.1546 0-15.783-2.0359-25.826-6.1657-10.076-4.1105-19.337-6.1464-27.804-6.1464-8.8802 0-18.404 2.0358-28.591 6.1464-10.203 4.1298-18.422 6.282-24.706 6.4953-9.5569 0.40717-19.083-3.8003-28.591-12.642-6.0688-5.2932-13.66-14.367-22.753-27.222-9.7566-13.727-17.778-29.646-24.062-47.794-6.73-19.602-10.104-38.584-10.104-56.961 0-21.051 4.5487-39.207 13.66-54.421 7.1604-12.221 16.686-21.861 28.609-28.938 11.922-7.077 24.804-10.683 38.677-10.914 7.5908 0 17.545 2.348 29.915 6.9626 12.335 4.6301 20.256 6.9781 23.728 6.9781 2.5962 0 11.395-2.7455 26.311-8.219 14.106-5.0761 26.01-7.1778 35.763-6.3499 26.427 2.1328 46.282 12.551 59.486 31.319-23.635 14.321-35.327 34.379-35.094 60.11 0.21328 20.042 7.4842 36.721 21.774 49.964 6.476 6.1463 13.708 10.897 21.755 14.27-1.745 5.0606-3.587 9.9078-5.5453 14.561zm-60.61-238.51c0 15.709-5.7392 30.377-17.179 43.953-13.805 16.139-30.503 25.466-48.61 23.994-0.23073-1.8846-0.36452-3.8681-0.36452-5.9524 0-15.081 6.5652-31.22 18.224-44.417 5.8206-6.6815 13.223-12.237 22.2-16.669 8.9578-4.3656 17.431-6.7799 25.4-7.1934 0.23268 2.1001 0.32962 4.2003 0.32962 6.2838z" stroke-width=".26458"/>
         </g>
        </svg>



    </div>
  </a>
  <div style="margin-left: 10px;color: black">
    ←Download
  </div>
</div>

</div>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
