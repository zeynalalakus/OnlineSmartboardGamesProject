@extends('admin.admin')

@section('adminContent')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col" colspan="2">Activity</th>

        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$count}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td><a href="/updateUserView/{{$user->id}}">Update</a></td>
                <td><a href="/deleteUser/{{$user->id}}">Delete</a></td>
            </tr>
            @php($count++)
        @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-success"><a href="{{route('userList')}}" style="color: white">Users List</a></button>
    <button type="button" class="btn btn-primary"><a href="{{route('addUserView')}}" style="color: white">Add a User</a></button>
    <button type="button" class="btn btn-danger"><a href="{{route('deletedUsers')}}" style="color: white">Deleted Users</a></button>
@endsection
