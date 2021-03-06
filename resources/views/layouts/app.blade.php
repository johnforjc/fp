<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Test Centre Gym</title>
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <!-- Scripts -->
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        <script src="js/app.js"></script>
        <script>
            $('.carousel').caraousel({
                interval:2000;
            })
        </script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <link rel="stylesheet" href="/../css/app.css">
        <style>
            .content-div{
                padding: 120px;
                width: 100%;
                height: 640px;
                background-color: rgb(255,255,200);
            }
    
            .content-div-box{
                position: absolute;
                width: 1100px;
                height: 400px;
            }
    
            .content-frame{
                position: relative;
                float:left;
                margin:0 33px;
                background-color: rgb(255,255,250);
                width: 300px;
                height: 400px;
                padding: 20px;
            }
    
            .content-frame h1, .content-frame h3{
                color: rgb(13, 170, 255);
                text-align: center;
            }
    
            .content-frame h3{
                font-size: 20px;
            }
    
            .content-frame img{
                margin: 0px 25px;
                width: 200px;
                height: 200px;
            }
    
            .posts-content{
                min-height: 400px;
            }
    </style>
</head>

<body>
        @include('include.navbar')
            @yield('welcomepage')
                <main class="py-4">
                    <div style="margin:90px 30px 20px 50px;">
                        @include('include.messages')
                        @yield('section')
                    </div>
                </main>
    
        @include('include.footer')
    
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
</body>

 </html>