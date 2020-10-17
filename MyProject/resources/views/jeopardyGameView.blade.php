@extends('layouts.app')

@section('content')
    <table class="table" style="width: 85%; margin-left: 6%;">
        <thead>
        <tr id="headTr">
            <th scope="col" style="text-align: center; font-size: 1.4rem;" id="group_1_head">Group 1</th>
            <th scope="col" style="text-align: center; font-size: 1.4rem;" id="group_2_head">Group 2</th>
            <th scope="col" style="text-align: center; font-size: 1.4rem;" id="group_3_head">Group 3</th>
            <th scope="col" style="text-align: center; font-size: 1.4rem;" id="group_4_head">Group 4</th>
        </tr>
        </thead>
        <tbody>
        <tr id="bodyTr">
            <td style="text-align: center; font-size: 1.4rem;" id="group_1_score">0</td>
            <td style="text-align: center; font-size: 1.4rem;" id="group_2_score">0</td>
            <td style="text-align: center; font-size: 1.4rem;" id="group_3_score">0</td>
            <td style="text-align: center; font-size: 1.4rem;" id="group_4_score">0</td>
        </tr>
        </tbody>
    </table>

    <table class="table" style="width: 85%; margin-left: 6%;">
        <thead class="thead-light">
        <tr>
            @foreach($Questions as $Question)
            <th scope="col" style="text-align: center" id="category_1_name">{{$Question->c1n}}</th>
            <th scope="col" style="text-align: center" id="category_2_name">{{$Question->c2n}}</th>
            <th scope="col" style="text-align: center" id="category_3_name">{{$Question->c3n}}</th>
            <th scope="col" style="text-align: center" id="category_4_name">{{$Question->c4n}}</th>
            <th scope="col" style="text-align: center" id="category_5_name">{{$Question->c5n}}</th>
            <th scope="col" style="text-align: center" id="category_6_name">{{$Question->c6n}}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($Questions as $Question)
            @foreach($Answers as $Answer)
        <tr>
            <td style="text-align: center"><button type="button" class="btn btn-success btn-lg" id="a1" onclick="showPanel('a1', 100, '{{$Question->c1q1}}', '{{$Answer->c1a1}}')">100</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-success btn-lg" id="b1" onclick="showPanel('b1', 100, '{{$Question->c2q1}}', '{{$Answer->c2a1}}')">100</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-success btn-lg" id="c1" onclick="showPanel('c1', 100, '{{$Question->c3q1}}', '{{$Answer->c3a1}}')">100</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-success btn-lg" id="d1" onclick="showPanel('d1', 100, '{{$Question->c4q1}}', '{{$Answer->c4a1}}')">100</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-success btn-lg" id="e1" onclick="showPanel('e1', 100, '{{$Question->c5q1}}', '{{$Answer->c5a1}}')">100</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-success btn-lg" id="f1" onclick="showPanel('f1', 100, '{{$Question->c6q1}}', '{{$Answer->c6a1}}')">100</button></td>
        </tr>
        <tr>
            <td style="text-align: center"><button type="button" class="btn btn-primary btn-lg" id="a2" onclick="showPanel('a2', 200, '{{$Question->c1q2}}', '{{$Answer->c1a2}}')">200</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-primary btn-lg" id="b2" onclick="showPanel('b2', 200, '{{$Question->c2q2}}', '{{$Answer->c2a2}}')">200</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-primary btn-lg" id="c2" onclick="showPanel('c2', 200, '{{$Question->c3q2}}', '{{$Answer->c3a2}}')">200</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-primary btn-lg" id="d2" onclick="showPanel('d2', 200, '{{$Question->c4q2}}', '{{$Answer->c4a2}}')">200</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-primary btn-lg" id="e2" onclick="showPanel('e2', 200, '{{$Question->c5q2}}', '{{$Answer->c5a2}}')">200</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-primary btn-lg" id="f2" onclick="showPanel('f2', 200, '{{$Question->c6q2}}', '{{$Answer->c6a2}}')">200</button></td>
        </tr>
        <tr>
            <td style="text-align: center"><button type="button" class="btn btn-info btn-lg" id="a3" onclick="showPanel('a3', 300, '{{$Question->c1q3}}', '{{$Answer->c1a3}}')">300</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-info btn-lg" id="b3" onclick="showPanel('b3', 300, '{{$Question->c2q3}}', '{{$Answer->c2a3}}')">300</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-info btn-lg" id="c3" onclick="showPanel('c3', 300, '{{$Question->c3q3}}', '{{$Answer->c3a3}}')">300</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-info btn-lg" id="d3" onclick="showPanel('d3', 300, '{{$Question->c4q3}}', '{{$Answer->c4a3}}')">300</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-info btn-lg" id="e3" onclick="showPanel('e3', 300, '{{$Question->c5q3}}', '{{$Answer->c5a3}}')">300</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-info btn-lg" id="f3" onclick="showPanel('f3', 300, '{{$Question->c6q3}}', '{{$Answer->c6a3}}')">300</button></td>
        </tr>
        <tr>
            <td style="text-align: center"><button type="button" class="btn btn-warning btn-lg" id="a4" onclick="showPanel('a4', 400, '{{$Question->c1q4}}', '{{$Answer->c1a4}}')">400</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-warning btn-lg" id="b4" onclick="showPanel('b4', 400, '{{$Question->c2q4}}', '{{$Answer->c2a4}}')">400</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-warning btn-lg" id="c4" onclick="showPanel('c4', 400, '{{$Question->c3q4}}', '{{$Answer->c3a4}}')">400</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-warning btn-lg" id="d4" onclick="showPanel('d4', 400, '{{$Question->c4q4}}', '{{$Answer->c4a4}}')">400</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-warning btn-lg" id="e4" onclick="showPanel('e4', 400, '{{$Question->c5q4}}', '{{$Answer->c5a4}}')">400</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-warning btn-lg" id="f4" onclick="showPanel('f4', 400, '{{$Question->c6q4}}', '{{$Answer->c6a4}}')">400</button></td>
        </tr>
        <tr>
            <td style="text-align: center"><button type="button" class="btn btn-danger btn-lg" id="a5" onclick="showPanel('a5', 500, '{{$Question->c1q5}}', '{{$Answer->c1a5}}')">500</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-danger btn-lg" id="b5" onclick="showPanel('b5', 500, '{{$Question->c2q5}}', '{{$Answer->c2a5}}')">500</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-danger btn-lg" id="c5" onclick="showPanel('c5', 500, '{{$Question->c3q5}}', '{{$Answer->c3a5}}')">500</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-danger btn-lg" id="d5" onclick="showPanel('d5', 500, '{{$Question->c4q5}}', '{{$Answer->c4a5}}')">500</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-danger btn-lg" id="e5" onclick="showPanel('e5', 500, '{{$Question->c5q5}}', '{{$Answer->c5a5}}')">500</button></td>
            <td style="text-align: center"><button type="button" class="btn btn-danger btn-lg" id="f5" onclick="showPanel('f5', 500, '{{$Question->c6q5}}', '{{$Answer->c6a5}}')">500</button></td>
        </tr>
        </tbody>
            @endforeach
        @endforeach
    </table>
    <div id="entryPanel" style="font-size: large; text-align: center; background-color: #0c2e60; border-radius: 2rem; position: absolute; width: 85%; height: 60%; margin-left: 6%; top: 39%; visibility: visible">
        <p id="setName" style=" margin-top: 1%; font-size: 2rem; color: white">SetName</p>
        <form action="">
        @csrf
            <table class="table" style="width: 70%; margin-left: 6rem; margin-top: 2rem; color: white">
                <thead>
                <tr>
                    <th scope="col" style="text-align: center">Group Length</th>
                    <th scope="col" style="text-align: center">Time(seconds)</th>
                    <th scope="col" style="text-align: center">Group 1 Name</th>
                    <th scope="col" style="text-align: center">Group 2 Name</th>
                    <th scope="col" style="text-align: center" id="input_group_head_3">Group 3 Name</th>
                    <th scope="col" style="text-align: center" id="input_group_head_4">Group 4 Name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th style="text-align: center">
                        <select id="groupLen" style="color: #0c2e60" onchange="groupLength()">
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                        </select>
                    </th>
                    <th style="text-align: center">
                        <select id="groupTime" style="color: #0c2e60">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="60">60</option>
                        </select>
                    </th>
                    <td style="text-align: center; color: #0c2e60"><input type="text" name="group_1_name" id="group_1_name" value="Group 1" style="text-align: center" autofocus></td>
                    <td style="text-align: center; color: #0c2e60"><input type="text" name="group_1_name" id="group_2_name" value="Group 2" style="text-align: center"></td>
                    <td style="text-align: center; color: #0c2e60"><input type="text" name="group_1_name" id="group_3_name" value="Group 3" style="text-align: center"></td>
                    <td style="text-align: center; color: #0c2e60"><input type="text" name="group_1_name" id="group_4_name" value="Group 4" style="text-align: center"></td>
                </tr>
                </tbody>
            </table>
        </form>
        <button id="startButton" class="btn-success btn" style="width: 15rem; height: 5rem; margin-top: 1rem; border-radius: 1rem; color: white; font-size: 1.4rem;" onclick="startGame()">START</button>

    </div>
    <div id="gameStartPanel" style="background-color: #0c2e60; border-radius: 2rem; position: absolute; width: 85%; height: 60%; margin-left: 6%; top: 39%; visibility: hidden; z-index: 2;">
        <p style="margin-left: 25%; margin-top: 6%; font-size: 5rem; color: white">Game is starting...</p>
    </div>
    <div id="questionPanel" style="overflow: auto; text-align: center; background-color: #0c2e60; border-radius: 2rem; position: absolute; width: 85%; height: 60%; margin-left: 6%; top: 39%; visibility: hidden">
        <p id="question" style="margin-top: 2rem; font-size: 5rem; color: white">Question</p>
        <p id="timer_text" style="color: white; font-size: 3rem; position: absolute; top: 0%; left: 90%;"></p>
        <button id="showAnswerButton" class="btn-success btn" style="position:absolute; top: 60%; left: 40%; width: 15rem; height: 5rem; border-radius: 1rem; color: white; font-size: 1.4rem;" onclick="showAnswer()">SHOW ANSWER</button>

    </div>
    <div id="answerPanel" style="text-align:center; background-color: #0c2e60; border-radius: 2rem; position: absolute; width: 85%; height: 60%; margin-left: 6%; top: 39%; visibility: hidden">
        <p id="answer" style="margin-top: 2rem; font-size: 5rem; color: white">Answer</p>
        <button id="correctButton" class="btn-success btn" style="position:absolute; top: 60%; left: 15%; width: 15rem; height: 5rem; border-radius: 1rem; color: white; font-size: 1.4rem;" onclick="correctAnswer()">CORRECT</button>
        <button id="wrongButton" class="btn-danger btn" style="position:absolute; top: 60%; right: 15%; width: 15rem; height: 5rem; border-radius: 1rem; color: white; font-size: 1.4rem;" onclick="wrongAnswer()">WRONG</button>
    </div>
    <div id="scorePanel" style="text-align: center; background-color: #0c2e60; border-radius: 2rem; position: absolute; width: 85%; height: 60%; margin-left: 6%; top: 39%; visibility: hidden; z-index: 1;">
        <p id="groupName" style="font-size: 5rem; color: white">Group 1</p>
        <p id="groupScore" style="font-size: 5rem; color: white">Score</p>
    </div>
    <audio id="correctSound">
        <source src="{{asset('sounds/correct.mp3')}}" type="audio/mpeg">
    </audio>
    <audio id="wrongSound">
        <source src="{{asset('sounds/wrong.mp3')}}" type="audio/mpeg">
    </audio>
    <script>
        var maxGroup = 4;
        var qCount = 30;
        var score = 0;
        var group_scores = [0, 0, 0, 0];
        var group_names = [];
        var order = 0;
        var timeleft;
        var timeLeft;
        var downloadTimer;
        @foreach($Questions as $Question)
            var setname = '{{$Question->SetName}}';
        @endforeach
        document.getElementById('setName').innerText = setname;
        function showPanel(elmnt, scr, Q, A) {
            timeleft = timeLeft;
            var element = document.getElementById(elmnt);
            element.style.visibility = "hidden";
            document.getElementById('question').innerText = Q;
            document.getElementById('answer').innerText = A;
            document.getElementById('questionPanel').style.visibility = "visible";
            score = scr;
            if (Q.length > 20 && Q.length <= 30) {
                document.getElementById('question').style.fontSize = "4rem";
            } else if (Q.length > 30 && Q.length <= 40) {
                document.getElementById('question').style.fontSize = "3rem";
            } else if (Q.length > 40) {
                document.getElementById('question').style.fontSize = "2rem";
            }

            if (A.length > 20 && A.length <= 30) {
                document.getElementById('answer').style.fontSize = "4rem";
            } else if (A.length > 30 && A.length <= 40) {
                document.getElementById('answer').style.fontSize = "3rem";
            } else if (A.length > 40) {
                document.getElementById('answer').style.fontSize = "2rem";
            }
            downloadTimer = setInterval(function(){
                if(timeleft == 0){
                    clearInterval(downloadTimer);
                    showAnswer();
                    document.getElementById('correctButton').style.visibility = "hidden";
                }
                document.getElementById("timer_text").innerHTML = timeleft.toString();
                timeleft -= 1;
            }, 1000);
        }
        function showAnswer(){
            document.getElementById('questionPanel').style.visibility = "hidden";
            document.getElementById('answerPanel').style.visibility = "visible";
        }
        function correctAnswer(){
            document.getElementById('correctSound').play();
            clearInterval(downloadTimer);
            group_scores[order] += score;
            document.getElementById('groupScore').innerText = group_scores[order];
            document.getElementById('groupName').innerText = group_names[order];
            order += 1;
            qCount -= 1; // sıfır olduğunda oyun bitecek
            if(order == maxGroup){
                order = 0;
            }
            document.getElementById('answerPanel').style.visibility = "hidden";
            document.getElementById('scorePanel').style.visibility = "visible";
            setTimeout(closeScorePanel, 3000);
            document.getElementById('group_1_score').innerText = group_scores[0];
            document.getElementById('group_2_score').innerText = group_scores[1];
            document.getElementById('group_3_score').innerText = group_scores[2];
            document.getElementById('group_4_score').innerText = group_scores[3];
            timeleft = timeLeft;
        }
        function wrongAnswer(){
            document.getElementById('wrongSound').play();
            clearInterval(downloadTimer);
            group_scores[order] -= score;
            document.getElementById('groupScore').innerText = group_scores[order];
            document.getElementById('groupName').innerText = group_names[order];
            order += 1;
            qCount -= 1;
            if(order == maxGroup){
                order = 0;
            }
            document.getElementById('answerPanel').style.visibility = "hidden";
            document.getElementById('scorePanel').style.visibility = "visible";
            setTimeout(closeScorePanel, 3000);
            document.getElementById('group_1_score').innerText = group_scores[0];
            document.getElementById('group_2_score').innerText = group_scores[1];
            document.getElementById('group_3_score').innerText = group_scores[2];
            document.getElementById('group_4_score').innerText = group_scores[3];
            timeleft = timeLeft;
        }
        function closeScorePanel(){
            document.getElementById("timer_text").innerHTML = timeleft.toString();
            document.getElementById('scorePanel').style.visibility = "hidden";
            switch (order){
                case 0:
                    document.getElementById('group_1_head').style.color = "red";
                    document.getElementById('group_2_head').style.color = "black";
                    document.getElementById('group_3_head').style.color = "black";
                    document.getElementById('group_4_head').style.color = "black";
                    break;
                case 1:
                    document.getElementById('group_1_head').style.color = "black";
                    document.getElementById('group_2_head').style.color = "red";
                    document.getElementById('group_3_head').style.color = "black";
                    document.getElementById('group_4_head').style.color = "black";
                    break;
                case 2:
                    document.getElementById('group_1_head').style.color = "black";
                    document.getElementById('group_2_head').style.color = "black";
                    document.getElementById('group_3_head').style.color = "red";
                    document.getElementById('group_4_head').style.color = "black";
                    break;
                case 3:
                    document.getElementById('group_1_head').style.color = "black";
                    document.getElementById('group_2_head').style.color = "black";
                    document.getElementById('group_3_head').style.color = "black";
                    document.getElementById('group_4_head').style.color = "red";
                    break;
            }
            if(qCount == 0){
                gameOver();
            }
        }
        function groupLength(){
            var x = document.getElementById('groupLen').value;
            if(x == 4){
                document.getElementById('group_1_name').style.visibility = "visible";
                document.getElementById('group_2_name').style.visibility = "visible";
                document.getElementById('group_3_name').style.visibility = "visible";
                document.getElementById('group_4_name').style.visibility = "visible";
                document.getElementById('input_group_head_3').style.visibility = "visible";
                document.getElementById('input_group_head_4').style.visibility = "visible";
                maxGroup = 4;
            }
            else if(x == 3){
                document.getElementById('group_1_name').style.visibility = "visible";
                document.getElementById('group_2_name').style.visibility = "visible";
                document.getElementById('group_3_name').style.visibility = "visible";
                document.getElementById('group_4_name').style.visibility = "hidden";
                document.getElementById('input_group_head_3').style.visibility = "visible";
                document.getElementById('input_group_head_4').style.visibility = "hidden";
                maxGroup = 3;
            }
            else if(x == 2){
                document.getElementById('group_1_name').style.visibility = "visible";
                document.getElementById('group_2_name').style.visibility = "visible";
                document.getElementById('group_3_name').style.visibility = "hidden";
                document.getElementById('group_4_name').style.visibility = "hidden";
                document.getElementById('input_group_head_3').style.visibility = "hidden";
                document.getElementById('input_group_head_4').style.visibility = "hidden";
                maxGroup = 2;
            }
        }
        function startGame(){
            document.getElementById('group_1_head').style.color = "red";
            document.getElementById('group_2_head').style.color = "black";
            document.getElementById('group_3_head').style.color = "black";
            document.getElementById('group_4_head').style.color = "black";
            timeLeft = document.getElementById('groupTime').value;
            document.getElementById('gameStartPanel').style.visibility = "visible";
            setTimeout(closeGameStartPanel, 3000);
            var x = document.getElementById('groupLen').value;
            if(x == 4) {
                maxGroup = 4;
                var group1_name = document.getElementById('group_1_name').value;
                var group2_name = document.getElementById('group_2_name').value;
                var group3_name = document.getElementById('group_3_name').value;
                var group4_name = document.getElementById('group_4_name').value;
                document.getElementById('group_1_head').innerText = group1_name;
                document.getElementById('group_2_head').innerText = group2_name
                document.getElementById('group_3_head').innerText = group3_name
                document.getElementById('group_4_head').innerText = group4_name
                document.getElementById('group_1_score').style.width = "25%";
                document.getElementById('group_2_score').style.width = "25%";
                document.getElementById('group_3_score').style.width = "25%";
                document.getElementById('group_4_score').style.width = "25%";
                group_names.push(group1_name);
                group_names.push(group2_name);
                group_names.push(group3_name);
                group_names.push(group4_name);

            }
            if(x == 3){
                maxGroup = 3;
                var group1_name = document.getElementById('group_1_name').value;
                var group2_name = document.getElementById('group_2_name').value;
                var group3_name = document.getElementById('group_3_name').value;
                document.getElementById('group_1_head').innerText = document.getElementById('group_1_name').value;
                document.getElementById('group_2_head').innerText = document.getElementById('group_2_name').value;
                document.getElementById('group_3_head').innerText = document.getElementById('group_3_name').value;
                document.getElementById('group_1_score').style.width = "33%";
                document.getElementById('group_2_score').style.width = "33%";
                document.getElementById('group_3_score').style.width = "33%";
                document.getElementById('group_4_head').remove();
                document.getElementById('group_4_score').remove();
                group_scores.pop();
                group_names.push(group1_name);
                group_names.push(group2_name);
                group_names.push(group3_name);
            }
            if(x == 2){
                document.getElementById('group_4_head').remove();
                document.getElementById('group_3_head').remove();
                document.getElementById('group_4_score').remove();
                document.getElementById('group_3_score').remove();
                document.getElementById('group_1_score').style.width = "50%";
                document.getElementById('group_2_score').style.width = "50%";
                var group1_name = document.getElementById('group_1_name').value;
                var group2_name = document.getElementById('group_2_name').value;
                maxGroup = 2;
                group_scores.pop();
                group_scores.pop();
                document.getElementById('group_1_head').innerText = document.getElementById('group_1_name').value;
                document.getElementById('group_2_head').innerText = document.getElementById('group_2_name').value;
                group_names.push(group1_name);
                group_names.push(group2_name);
            }
            document.getElementById('group_1_name').style.visibility = "hidden";
            document.getElementById('group_2_name').style.visibility = "hidden";
            document.getElementById('group_3_name').style.visibility = "hidden";
            document.getElementById('group_4_name').style.visibility = "hidden";
            document.getElementById('entryPanel').style.visibility = "hidden";


        }
        function closeGameStartPanel(){
            document.getElementById('gameStartPanel').style.visibility = "hidden";
            document.getElementById('input_group_head_3').style.visibility = "hidden";
            document.getElementById('input_group_head_4').style.visibility = "hidden";
        }
        function gameOver(){
            document.getElementById('group_1_head').style.color = "black";
            document.getElementById('group_2_head').style.color = "black";
            document.getElementById('group_3_head').style.color = "black";
            document.getElementById('group_4_head').style.color = "black";
        }

    </script>

@endsection
