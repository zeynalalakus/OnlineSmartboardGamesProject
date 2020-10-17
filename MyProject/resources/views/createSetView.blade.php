@extends('layouts.app')

@section('content')
    <div class="container" style="text-align: center;">
        <h2>Create a new set</h2>
        <br>
        <br>
        <form action="{{route('createSet')}}" method="post">
            @csrf
            <input type="text" name="SetName" placeholder="Set Name" style="font-size: 1.8rem; margin-left: 10rem" required>
            <table class="table">
                <thead>
                <tr>
                    <th colspan="2"><input type="text" name="c1n" placeholder="First Category Name" required></th>
                    <th colspan="2"><input type="text" name="c2n" placeholder="Second Category Name" required></th>
                    <th colspan="2"><input type="text" name="c3n" placeholder="Third Category Name" required></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" name="c1q1" placeholder="Question" required></td>
                    <td><input type="text" name="c1a1" placeholder="Answer" required></td>
                    <td><input type="text" name="c2q1" placeholder="Question" required></td>
                    <td><input type="text" name="c2a1" placeholder="Answer" required></td>
                    <td><input type="text" name="c3q1" placeholder="Question" required></td>
                    <td><input type="text" name="c3a1" placeholder="Answer" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c1q2" placeholder="Question" required></td>
                    <td><input type="text" name="c1a2" placeholder="Answer" required></td>
                    <td><input type="text" name="c2q2" placeholder="Question" required></td>
                    <td><input type="text" name="c2a2" placeholder="Answer" required></td>
                    <td><input type="text" name="c3q2" placeholder="Question" required></td>
                    <td><input type="text" name="c3a2" placeholder="Answer" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c1q3" placeholder="Question" required></td>
                    <td><input type="text" name="c1a3" placeholder="Answer" required></td>
                    <td><input type="text" name="c2q3" placeholder="Question" required></td>
                    <td><input type="text" name="c2a3" placeholder="Answer" required></td>
                    <td><input type="text" name="c3q3" placeholder="Question" required></td>
                    <td><input type="text" name="c3a3" placeholder="Answer" required></td>

                </tr>
                <tr>
                    <td><input type="text" name="c1q4" placeholder="Question" required></td>
                    <td><input type="text" name="c1a4" placeholder="Answer" required></td>
                    <td><input type="text" name="c2q4" placeholder="Question" required></td>
                    <td><input type="text" name="c2a4" placeholder="Answer" required></td>
                    <td><input type="text" name="c3q4" placeholder="Question" required></td>
                    <td><input type="text" name="c3a4" placeholder="Answer" required></td>

                </tr>
                <tr>
                    <td><input type="text" name="c1q5" placeholder="Question" required></td>
                    <td><input type="text" name="c1a5" placeholder="Answer" required></td>
                    <td><input type="text" name="c2q5" placeholder="Question" required></td>
                    <td><input type="text" name="c2a5" placeholder="Answer" required></td>
                    <td><input type="text" name="c3q5" placeholder="Question" required></td>
                    <td><input type="text" name="c3a5" placeholder="Answer" required></td>
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
                    <th colspan="2"><input type="text" name="c4n" placeholder="Fourth Category Name" required></th>
                    <th colspan="2"><input type="text" name="c5n" placeholder="Fifth Category Name" required></th>
                    <th colspan="2"><input type="text" name="c6n" placeholder="Sixth Category Name" required></th>
                </tr>
                <tr>
                    <td><input type="text" name="c4q1" placeholder="Question" required></td>
                    <td><input type="text" name="c4a1" placeholder="Answer" required></td>
                    <td><input type="text" name="c5q1" placeholder="Question" required></td>
                    <td><input type="text" name="c5a1" placeholder="Answer" required></td>
                    <td><input type="text" name="c6q1" placeholder="Question" required></td>
                    <td><input type="text" name="c6a1" placeholder="Answer" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c4q2" placeholder="Question" required></td>
                    <td><input type="text" name="c4a2" placeholder="Answer" required></td>
                    <td><input type="text" name="c5q2" placeholder="Question" required></td>
                    <td><input type="text" name="c5a2" placeholder="Answer" required></td>
                    <td><input type="text" name="c6q2" placeholder="Question" required></td>
                    <td><input type="text" name="c6a2" placeholder="Answer" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c4q3" placeholder="Question" required></td>
                    <td><input type="text" name="c4a3" placeholder="Answer" required></td>
                    <td><input type="text" name="c5q3" placeholder="Question" required></td>
                    <td><input type="text" name="c5a3" placeholder="Answer" required></td>
                    <td><input type="text" name="c6q3" placeholder="Question" required></td>
                    <td><input type="text" name="c6a3" placeholder="Answer" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c4q4" placeholder="Question" required></td>
                    <td><input type="text" name="c4a4" placeholder="Answer" required></td>
                    <td><input type="text" name="c5q4" placeholder="Question" required></td>
                    <td><input type="text" name="c5a4" placeholder="Answer" required></td>
                    <td><input type="text" name="c6q4" placeholder="Question" required></td>
                    <td><input type="text" name="c6a4" placeholder="Answer" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="c4q5" placeholder="Question" required></td>
                    <td><input type="text" name="c4a5" placeholder="Answer" required></td>
                    <td><input type="text" name="c5q5" placeholder="Question" required></td>
                    <td><input type="text" name="c5a5" placeholder="Answer" required></td>
                    <td><input type="text" name="c6q5" placeholder="Question" required></td>
                    <td><input type="text" name="c6a5" placeholder="Answer" required></td>
                </tr>
                <tr>
                    <td colspan="12" style="background-color: #1b4b72; font-size: larger"><input type="submit" value="Save"></td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection
