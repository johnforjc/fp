@extends('layout.app')

@section('section')
    <table>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($user as $users)
        <th>{{'$user->id'}}</th>
        <th>{{'$user->Kode_Soal'}} </th>
        <th>{{'$score'}} </th>
        <th></th>
        <th></th>
        @endforeach
    </table>
@endsection