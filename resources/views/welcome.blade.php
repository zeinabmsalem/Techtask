<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- //google -->
  <meta name="google-signin-client_id" content="269077705661-h0slim5kthg9l1cgt696rdssgap0favr.apps.googleusercontent.com">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        <a href=""><div id="my-signin2"></div></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h6>Welcome to Your shopping Gate :)</h6>
                </div>

                <div class="links">
                    <img src="{{ asset('dist/img/laravel.jpg') }}" style="height: 200px; width: 400px;">
{{--                <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
            </div>
        </div>

        {{-- <script type="text/javascript" src="{{ asset('js/google.js') }}"></script> --}}

        <script type="text/javascript">
            


function onSuccess(googleUser) {

       var name = googleUser.getBasicProfile().getName();
       var email = googleUser.getBasicProfile().getEmail();
       var image = googleUser.getBasicProfile().getImageUrl();
       var google_id = googleUser.getBasicProfile().getId();


       // localStorage.setItem("google_id", google_id);

       // alert(image);

       // The ID token you need to pass to your backend:
       // var id_token = googleUser.getAuthResponse().id_token;


        return redirect("/home");
       

}
    
function onFailure(error) {
      console.log(error);
}


function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 250,
        'height': 40,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
}



        </script>

        <!-- google -->
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

    </body>
</html>
