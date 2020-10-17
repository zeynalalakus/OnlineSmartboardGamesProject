@extends('admin.admin')

@section('adminContent')
    @foreach($users as $user)
    <form action="{{route('updateUser', $user->id)}}" method="post">
        @csrf
        <x-jet-validation-errors class="mb-4" />
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Password</th>
                <th scope="col">Confirm Password</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><x-jet-input type="text" name="name" value="{{$user->name}}" required/></td>
                <td><x-jet-input type="email" name="email" value="{{$user->email}}" required /></td>
                <td><x-jet-input type="text" name="role" value="b" required/></td>
                <td><x-jet-input type="password" name="password" required autocomplete="new-password" /></td>
                <td><x-jet-input type="password" name="password_confirmation" required autocomplete="new-password" /></td>
            </tr>
            </tbody>
        </table>
        <input type="submit" value="Update User" class="btn btn-secondary">
    </form>
    @endforeach
    <br><br>
    <button type="button" class="btn btn-success"><a href="{{route('userList')}}" style="color: white">Users List</a></button>
    <button type="button" class="btn btn-warning"><a href="{{route('userManagement')}}" style="color: white">User Management</a></button>
    <button type="button" class="btn btn-danger"><a href="{{route('deletedUsers')}}" style="color: white">Deleted Users</a></button>

@endsection
