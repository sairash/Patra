<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</style>

</head>
<body>

<div class="logoPatra"><a class="logoLink" href="/"><img style="height: 100%" src="image/logo/patra_header.png"><div class="centered">Patra</div></a></div>
<div class="loginSignup">
   @if (Route::has('login'))
      @auth
        <a class="login" href="/profile">Profile</a>
        <a class="signup" href="/noteBook">Book</a>
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

<div id="fullpage">
    <div class="section">
        <h1>Patra</h1>
        <div class="intro">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/></svg> Where Encription meets your daily diary <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/></svg> </p>
        </div>
            
<svg width="75.58mm" height="75.58mm" version="1.1" viewBox="0 0 264.58 264.58" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:xlink="http://www.w3.org/1999/xlink">
 <metadata>
  <rdf:RDF>
   <cc:Work rdf:about="">
    <dc:format>image/svg+xml</dc:format>
    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
    <dc:title/>
   </cc:Work>
  </rdf:RDF>
 </metadata>
 <g transform="translate(21.167 -15.119)">
  <g transform="translate(-21.167 15.119)">
   <g transform="translate(83.911 -56.696)">
    <g transform="translate(-83.911 56.696)">
     <g>
      <path d="m158.56 28.348c27.947 48.036 14.644 78.187-23.562 86.533-36.278 8.4347-57.967-93.618 4.0685-96.876 6.8364-0.35905 10.275 7.8734 19.493 10.343" fill="#fff" stroke-opacity="0"/>
     </g>
     <g transform="translate(120.2 -4.5357)">
      <g transform="translate(-120.2 4.5357)">
       <path d="m109.33 110.65c-22.401 22.971-46.837 94.367-17.255 94.878h76.974c15.466 1.6045 12.777-66.345-15.968-92.137-17.03-22.523-28.843-18.145-43.751-2.7403" fill="#fff" stroke-opacity="0"/>
       <g transform="translate(148.17 -30.994)">
        <g transform="translate(-148.17 30.994)">
         <path transform="translate(32.875 -11.56)" d="m55.057 207.74s77.659 10.094 81.369-14.433c3.8228-25.274-78.678 15.533-80.097-10.839-1.3853-25.738 76.496 5.9881 74.641-19.675-1.5761-21.8-64.959 7.4998-65.149-7.4187-0.18977-14.919 56.597-3.2172 54.939-14.616-1.6579-11.399-43.095-4.9216-43.095-4.9216" fill-opacity="0" stroke="#ffe932" stroke-linecap="round" stroke-width="18.2"/>
         <g transform="translate(32.875 -11.56)">
          
          <g fill="none" stroke="#000" stroke-linecap="round">
           <g stroke-width="4">
            <path d="m125.69 39.908c32.344 43.979 6.6909 86.035-22.631 86.179-53.946 0.26502-49.749-105.14 20.836-105.27" style="paint-order:stroke fill markers"/>
            <path d="m83.831 68.594c3.7811-0.86925 8.3102-7.0876 3.0228-6.945"/>
            <path d="m103.96 71.398c3.6118-1.7069 6.4384-6.1438 3.5779-9.0534"/>
            <path d="m76.455 122.21c-23.48 21.593-28.549 59.064-28.8 84.322-0.13549 13.631 18.235 10.1 44.014 10.644 43.775 0.92489 55.807 3.3318 54.653-17.795-1.5351-28.1-11.661-64.141-26.116-74.431"/>
            <path d="m126.69 128.22c30.244-7.6135 37.61 47.225 35.172 77.984"/>
            <path d="m27.671 79.58c-4.0551 8.1467-6.3234 28.567-2.1617 40.307 4.7526 13.407 15.551 0.18173 45.087 4.7818"/>
            <path d="m66.533 272.17 0.56696-54.24"/>
            <path d="m123.7 272.08 0.56696-54.24"/>
           </g>
           <path d="m101.55 41.172c4.0282-5.3251 8.9605-8.399 14.033-10.228 4.2024-1.5148 8.8949-2.3212 18.164-2.7826" stroke-width="3"/>
          </g>
         </g>
         <g transform="matrix(.98914 .14701 .17486 -.985 -28.114 278.66)">
          <path d="m126.43 120.17s-11.315 20.528-11.479 31.041c-0.0838 5.3554 5.5433 11.965 6.4765 18.474 1.1948 8.3333-1.4517 14.473 5.9474 14.693 5.8814 0.17472 4.0307-8.1202 5.9815-15.575 1.6991-6.4934 7.5595-11.802 7.6256-17.309 0.13421-11.171-14.552-31.325-14.552-31.325" fill="#fff" stroke="#000" stroke-linecap="round" stroke-width="2.9" style="paint-order:stroke fill markers"/>
         </g>
        </g>
       </g>
      </g>
     </g>
     <g transform="matrix(.22939 0 0 .22939 160.27 96.425)"></g>
    </g>
   </g>
   <g transform="translate(83.911 -56.696)">
    <path d="m32.921 134.72c9.9964 5.0194 20.429 5.6993 31.137 3.6309-7.1915 6.7055-11.738 18.356-26.593 10.733 2.244-3.9974-0.41755-9.0265-4.5436-14.364" fill="#ff1a5d" fill-opacity=".67068"/>
    <path d="m32.921 134.72c10.554 3.7156 20.23 6.2437 31.137 3.6309" fill="none" stroke="#000" stroke-linecap="round" stroke-width="3"/>
    <path d="m64.057 138.35c-6.1638 8.3966-11.165 18.867-26.593 10.733" fill="none" stroke="#000" stroke-linecap="round" stroke-width="4"/>
   </g>
   <g transform="rotate(-33.245 -116.04 83.063)">
    <g transform="matrix(.33121 0 0 .33121 26.236 115.93)" fill="#fff">
     <g stroke="#f55">
      <path d="m71.579 195.08 0.37798 17.151 3.3073-9.1659 2.3151 7.843 3.0711-15.922z" stroke-width="2"/>
      <g>
       <path d="m157.76 82.163 6.6146-6e-6 0.0472 12.379-0.66146 2.0789-6.2838-0.33073z"/>
       <path d="m158.13 75.154 7.4448-0.22448 0.89764-11.859-1.9608-1.7954-6.213 0.73233z"/>
       <path d="m157.64 55.183c2.4841-0.05836 5.2517 1.1908 7.4448-0.22448 3.2463-2.095 1.4813-7.9732 1.3701-11.954-0.0342-1.2247 0.21582-3.9603-0.87407-3.5671l-7.654 0.49609z"/>
      </g>
     </g>
     <g stroke="#000">
      <path d="m49.883 195.4-5.9531-0.8032c-4.2293-0.57062-4.5611-8.9911-4.2522-13.749 0 0 7.8734-97.164 9.4494-145.57 0.05213-1.601 4.1577-2.4096 4.1577-2.4096" stroke-width="1.4"/>
      <path d="m148.64 193.81c-34.943 2.6632-65.075 0.75595-97.612 1.1339-6.314-3.3251-7.7065-10.124-6.8981-17.387 5.1135-45.942 5.5365-94.912 8.9769-142.4 0.12474-1.7218 1.5368-2.8186 2.7403-2.8348 0 0 96.099-1.04 98.179-1.3229 2.0808-0.28289 3.3586 3.2139 3.5908 4.0632 0.21689 0.7934 1.2984 104.27-7.087 155.25-0.28072 1.7068-0.67151 3.4034-1.8899 3.4963z" stroke-linecap="round" stroke-width="6.0385"/>
      <g>
       <path d="m39.451 190.26c4.5454-2.1524 8.699-4.6055 14.127-5.2917 1.023-0.12932 0.32315-1.724-0.23624-1.6536-5.7269 0.72054-14.969 3.7095-14.505 5.1027z"/>
       <path d="m39.905 171.44c4.5454-2.1524 8.699-4.6055 14.127-5.2917 1.023-0.12932 0.32315-1.724-0.23624-1.6536-5.7269 0.72054-14.969 3.7095-14.505 5.1027z"/>
       <path d="m41.228 155.09c4.5454-2.1524 8.699-4.6055 14.127-5.2917 1.023-0.12932 0.32315-1.724-0.23624-1.6536-5.7269 0.72054-14.969 3.7095-14.505 5.1027z"/>
       <path d="m41.787 134.05c4.939-0.94859 9.5737-2.2863 15.001-1.5948 1.0229 0.13035 0.7436-1.5886 0.18436-1.6602-5.7253-0.73297-15.421-0.14764-15.32 1.3173z"/>
       <path d="m58.323 115.64c-4.9534 0.86994-9.7609 1.268-14.587 3.8445-0.90966 0.48562-1.26-1.2203-0.76276-1.4861 5.0903-2.7212 14.361-5.6225 14.787-4.2171z"/>
       <path d="m44.853 99.666c4.8832-1.203 9.4425-2.779 14.898-2.3693 1.0283 0.07721 0.66035-1.625 0.09816-1.6676-5.7555-0.43555-15.408 0.65102-15.231 2.1088z"/>
       <path d="m45.406 81.604c4.862-1.2862 9.3937-2.9396 14.856-2.6231 1.0294 0.05966 0.63253-1.636 0.06969-1.669-5.7621-0.3373-15.395 0.91377-15.193 2.3683z"/>
       <path d="m46.886 61.744c4.9999-0.54198 9.7285-1.4966 15.081-0.36406 1.0088 0.21347 0.87088-1.5226 0.31937-1.6396-5.6463-1.1982-15.358-1.4069-15.376 0.06153z"/>
       <path d="m46.335 45.87c4.9022-1.1231 9.4867-2.6242 14.935-2.1255 1.0269 0.09401 0.68682-1.614 0.1254-1.6657-5.7477-0.52957-15.417 0.39909-15.263 1.8595z"/>
      </g>
     </g>
    </g>
   </g>
  </g>
 </g>
</svg>

    </div>
</div>


</body>
</html>