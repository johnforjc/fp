@extends('layout.app')

@section('section')
    <table>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach($log as $users)
    <th>{{$users->id}}</th>
    <th>{{$users->Kode_Soal}}</th>
    <th>{{$users->score}}</th>
        @endforeach
    </table>
@endsection