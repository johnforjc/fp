<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <h1>Soal</h1>
        @if(count($soals) >= 1)
            @foreach($soals as $soal)
                <div class="well">
                    <p>{{$soal->soal}}</p>
                    <ol type = "A" start="A">
                        <li>{{$soal->A}}</li>
                        <li>{{$soal->B}}</li>
                        <li>{{$soal->C}}</li>
                        <li>{{$soal->D}}</li>
                        <li>{{$soal->E}}</li>
                    </ol>
                </div>
            @endforeach
            {{$soals->links()}}
        @else
            <p>No Post Found</p>
        @endif
</body>
</html>