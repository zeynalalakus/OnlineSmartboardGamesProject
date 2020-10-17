@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr style="text-align: center">
            <th>Id</th>
            <th>Set Name</th>
            <th>Created By</th>
            <th>Created At</th>
            <th colspan="3">Functions</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($sets as $set)
            <tr style="text-align: center">
                <td>{{$count}}</td>
                <td>{{$set->SetName}}</td>
                <td>{{$set->created_by}}</td>
                <td>{{$set->created_at}}</td>
                <td><button class="btn btn-primary"><a href="{{route('jeopardyGameView', $set->SetName)}}"  style="color: white">Jeopardy Game</a></button></td>
                <td><button class="btn btn-primary"><a href="{{route('multiplayerGameView', $set->SetName)}}"  style="color: white">Multiplayer Game</a></button></td>
                <td><button class="btn btn-primary"><a href="{{route('matchingGameView', $set->SetName)}}"  style="color: white">Matching Game</a></button></td>
            </tr>
            @php($count++)
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td><button class="btn btn-primary"><a href="{{route('games')}}" style="color: white">My Sets</a></button></td>
        </tr>
        </tfoot>
    </table>
@endsection
