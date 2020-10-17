@extends('layouts.app')

@section('content')
    <div class="container" style="text-align: center;">
        <h2>Update the set</h2>
        <br>
        <br>
        @foreach($Questions as $Question)
            @foreach($Answers as $Answer)
        <form action="{{route('updateSet', $Question->SetName)}}" method="post">
            @csrf
            <input type="text" name="SetName" value="{{$Question->SetName}}" style="font-size: 1.8rem; margin-left: 10rem" required>
            <table class="table">
                <thead>
                <tr>
                    <th colspan="2"><input type="text" name="c1n" value="{{$Question->c1n}}" required></th>
                    <th colspan="2"><input type="text" name="c2n" value="{{$Question->c2n}}" required></th>
                    <th colspan="2"><input type="text" name="c3n" value="{{$Question->c3n}}" required></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" name="c1q1" value="{{$Question->c1q1}}" required></td>
                    <td><input type="text" name="c1a1" value="{{$Answer->c1a1}}" required></td>
                    <td><input type="text" name="c2q1" value="{{$Question->c2q1}}" required></td>
                    <td><input type="text" name="c2a1" value="{{$Answer->c2a1}}" required></td>
                    <td><input type="text" name="c3q1" value="{{$Question->c3q1}}" required></td>
                    <td><input type="text" name="c3a1" value="{{$Answer->c3a1}}" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c1q2" value="{{$Question->c1q2}}" required></td>
                    <td><input type="text" name="c1a2" value="{{$Answer->c1a2}}" required></td>
                    <td><input type="text" name="c2q2" value="{{$Question->c2q2}}" required></td>
                    <td><input type="text" name="c2a2" value="{{$Answer->c2a2}}" required></td>
                    <td><input type="text" name="c3q2" value="{{$Question->c3q2}}" required></td>
                    <td><input type="text" name="c3a2" value="{{$Answer->c3a2}}" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c1q3" value="{{$Question->c1q3}}" required></td>
                    <td><input type="text" name="c1a3" value="{{$Answer->c1a3}}" required></td>
                    <td><input type="text" name="c2q3" value="{{$Question->c2q3}}" required></td>
                    <td><input type="text" name="c2a3" value="{{$Answer->c2a3}}" required></td>
                    <td><input type="text" name="c3q3" value="{{$Question->c3q3}}" required></td>
                    <td><input type="text" name="c3a3" value="{{$Answer->c3a3}}" required></td>

                </tr>
                <tr>
                    <td><input type="text" name="c1q4" value="{{$Question->c1q4}}" required></td>
                    <td><input type="text" name="c1a4" value="{{$Answer->c1a4}}" required></td>
                    <td><input type="text" name="c2q4" value="{{$Question->c2q4}}" required></td>
                    <td><input type="text" name="c2a4" value="{{$Answer->c2a4}}" required></td>
                    <td><input type="text" name="c3q4" value="{{$Question->c3q4}}" required></td>
                    <td><input type="text" name="c3a4" value="{{$Answer->c3a4}}" required></td>

                </tr>
                <tr>
                    <td><input type="text" name="c1q5" value="{{$Question->c1q5}}" required></td>
                    <td><input type="text" name="c1a5" value="{{$Answer->c1a5}}" required></td>
                    <td><input type="text" name="c2q5" value="{{$Question->c2q5}}" required></td>
                    <td><input type="text" name="c2a5" value="{{$Answer->c2a5}}" required></td>
                    <td><input type="text" name="c3q5" value="{{$Question->c3q5}}" required></td>
                    <td><input type="text" name="c3a5" value="{{$Answer->c3a5}}" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2"><input type="text" name="c4n" value="{{$Question->c4n}}" required></th>
                    <th colspan="2"><input type="text" name="c5n" value="{{$Question->c5n}}" required></th>
                    <th colspan="2"><input type="text" name="c6n" value="{{$Question->c6n}}" required></th>
                </tr>
                <tr>
                    <td><input type="text" name="c4q1" value="{{$Question->c4q1}}" required></td>
                    <td><input type="text" name="c4a1" value="{{$Answer->c4a1}}" required></td>
                    <td><input type="text" name="c5q1" value="{{$Question->c5q1}}" required></td>
                    <td><input type="text" name="c5a1" value="{{$Answer->c5a1}}" required></td>
                    <td><input type="text" name="c6q1" value="{{$Question->c6q1}}" required></td>
                    <td><input type="text" name="c6a1" value="{{$Answer->c6a1}}" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c4q2" value="{{$Question->c4q2}}" required></td>
                    <td><input type="text" name="c4a2" value="{{$Answer->c4a2}}" required></td>
                    <td><input type="text" name="c5q2" value="{{$Question->c5q2}}" required></td>
                    <td><input type="text" name="c5a2" value="{{$Answer->c5a2}}" required></td>
                    <td><input type="text" name="c6q2" value="{{$Question->c6q2}}" required></td>
                    <td><input type="text" name="c6a2" value="{{$Answer->c6a2}}" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c4q3" value="{{$Question->c4q3}}" required></td>
                    <td><input type="text" name="c4a3" value="{{$Answer->c4a3}}" required></td>
                    <td><input type="text" name="c5q3" value="{{$Question->c5q3}}" required></td>
                    <td><input type="text" name="c5a3" value="{{$Answer->c5a3}}" required></td>
                    <td><input type="text" name="c6q3" value="{{$Question->c6q3}}" required></td>
                    <td><input type="text" name="c6a3" value="{{$Answer->c6a3}}" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c4q4" value="{{$Question->c4q4}}" required></td>
                    <td><input type="text" name="c4a4" value="{{$Answer->c4a4}}" required></td>
                    <td><input type="text" name="c5q4" value="{{$Question->c5q4}}" required></td>
                    <td><input type="text" name="c5a4" value="{{$Answer->c5a4}}" required></td>
                    <td><input type="text" name="c6q4" value="{{$Question->c6q4}}" required></td>
                    <td><input type="text" name="c6a4" value="{{$Answer->c6a4}}" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c4q5" value="{{$Question->c4q5}}" required></td>
                    <td><input type="text" name="c4a5" value="{{$Answer->c4a5}}" required></td>
                    <td><input type="text" name="c5q5" value="{{$Question->c5q5}}" required></td>
                    <td><input type="text" name="c5a5" value="{{$Answer->c5a5}}" required></td>
                    <td><input type="text" name="c6q5" value="{{$Question->c6q5}}" required></td>
                    <td><input type="text" name="c6a5" value="{{$Answer->c6a5}}" required></td>
                </tr>
                <tr>
                    <td colspan="12" style="background-color: #1b4b72; font-size: larger"><input type="submit" value="Update"></td>
                </tr>
                </tbody>
            </table>
        </form>
            @endforeach
        @endforeach
    </div>
@endsection
