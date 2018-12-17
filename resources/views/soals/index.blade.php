@extends('layouts.app')
@section('section')
        <h1>Soal</h1>
        @if(count($soals) > 0)
            @foreach($soals as $soal)
                <div>
                    <h3><a href="/soals/{{$soal->id}}">{{$soal->Kode_Soal}}</h3></a>
                    <p>{{substr($soal->soal, 0, 150) . '...'}}</p>
                </div>
            @endforeach
            {{$soals->links()}}
        @else
            <p>No Post Found</p>
        @endif 
@endsection