@extends('admin.admin')

@section('adminContent')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Set Name</th>
            <th scope="col">Created By</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Deleted At</th>
            <th scope="col">Function</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($sets as $set)
            <tr>
                <th scope="row">{{$count}}</th>
                <td>{{$set->SetName}}</td>
                <td>{{$set->created_by}}</td>
                <td>{{$set->created_at}}</td>
                <td>{{$set->updated_at}}</td>
                <td>{{$set->deleted_at}}</td>
                <td><a href="{{route('deleteDataSet', $set->id)}}">Delete</a></td>
            </tr>
            @php($count++)
        @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-danger"><a href="{{route('deletedDataSets')}}" style="color: white">Deleted Sets</a></button>
@endsection
