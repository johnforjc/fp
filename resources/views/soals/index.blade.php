@extends('layout.app')
@section('welcomepage')
        <h1>Soal</h1>
        @if(count($soals) >= 1)
            @foreach($soals as $soal)
                <div>
                    <h3>{{$soal->soal}}</h3>
                    <form>
                        <input type="radio" name="A" value="A">{{$soal->A}}<br>
                        <input type="radio" name="B" value="B">{{$soal->B}}<br>
                        <input type="radio" name="C" value="C">{{$soal->C}}<br>
                        <input type="radio" name="D" value="D">{{$soal->D}}<br>
                        <input type="radio" name="E" value="E">{{$soal->E}}
                    </form>
                </div>
            @endforeach
            {{$soals->links()}}
        @else
            <p>No Post Found</p>
        @endif 
@endsection