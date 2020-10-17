@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr style="text-align: center">
                <th>Id</th>
                <th>Set Name</th>
                <th>Created By</th>
                <th>Created At</th>
                <th colspan="5">Functions</th>
            </tr>
        </thead>
        <tbody>
        @php($count = 1)
            @foreach($mysets as $myset)
            <tr style="text-align: center">
                <td>{{$count}}</td>
                <td>{{$myset->SetName}}</td>
                <td>{{$myset->created_by}}</td>
                <td>{{$myset->created_at}}</td>
                <td><button class="btn btn-primary"><a href="{{route('jeopardyGameView', $myset->SetName)}}"  style="color: white">Jeopardy Game</a></button></td>
                <td><button class="btn btn-primary"><a href="{{route('multiplayerGameView', $myset->SetName)}}"  style="color: white">Multiplayer Game</a></button></td>
                <td><button class="btn btn-primary"><a href="{{route('matchingGameView', $myset->SetName)}}"  style="color: white">Matching Game</a></button></td>
                <td><button class="btn btn-warning"><a href="{{route('updateSetView', $myset->SetName)}}"  style="color: white">Update</a></button></td>
                <td><button class="btn btn-danger"><a href="{{route('deleteSet', $myset->id)}}"  style="color: white">Delete</a></button></td>
            </tr>
                @php($count++)
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td><button class="btn btn-success"><a href="{{route('createSetView')}}" style="color: white">Create New Set</a></button></td>
                <td><button class="btn btn-primary"><a href="{{route('allSets')}}" style="color: white">All Sets</a></button></td>

            </tr>
        </tfoot>
    </table>
@endsection
