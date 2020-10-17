@extends('layouts.app')

@section('content')
    <table class="table" style="width: 85%; margin-left: 6%;">
        <thead>
        <tr id="headTr">
            <th scope="col" style="text-align: center; font-size: 1.4rem; width: 50%" id="player_1_game_view_head">Player 1</th>
            <th scope="col" style="text-align: center; font-size: 1.4rem; width: 50%" id="player_2_game_view_head">Player 2</th>
        </tr>
        </thead>
        <tbody>
        <tr id="bodyTr">
            <td style="text-align: center; font-size: 1.4rem; width: 50%" id="player_1_game_view_score">0</td>
            <td style="text-align: center; font-size: 1.4rem; width: 50%" id="player_2_game_view_score">0</td>
        </tr>
        </tbody>
    </table>
    <table class="table" style="width: 85%; margin-left: 6%;">
        <thead>
        <tr>
            <th scope="col" style="text-align: center; font-size: 1.4rem;" id="player_1_question" colspan="2">Question</th>
            <th></th>
            <th scope="col" style="text-align: center; font-size: 1.4rem;" id="player_2_question" colspan="2">Question</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="text-align: center; font-size: 1.4rem;"><button type="button" class="btn btn-primary btn-lg" id="player_1_option_a" style="width: 15rem; height: 5rem" onclick="getAnswer('a', '1')">100</button></td>
            <td style="text-align: center; font-size: 1.4rem;"><button type="button" class="btn btn-primary btn-lg" id="player_1_option_b" style="width: 15rem; height: 5rem" onclick="getAnswer('b', '1')">100</button></td>
            <td></td>
            <td style="text-align: center; font-size: 1.4rem;"><button type="button" class="btn btn-warning btn-lg" id="player_2_option_a" style="width: 15rem; height: 5rem" onclick="getAnswer('a', '2')">100</button></td>
            <td style="text-align: center; font-size: 1.4rem;"><button type="button" class="btn btn-warning btn-lg" id="player_2_option_b" style="width: 15rem; height: 5rem" onclick="getAnswer('b', '2')">100</button></td>
        </tr>
        <tr style="height: 5rem">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="margin-top: 2rem">
            <td style="text-align: center; font-size: 1.4rem;" id="player_1_game_view_score"><button type="button" class="btn btn-primary btn-lg" id="player_1_option_c" style="width: 15rem; height: 5rem" onclick="getAnswer('c', '1')">100</button></td>
            <td style="text-align: center; font-size: 1.4rem;" id="player_2_game_view_score"><button type="button" class="btn btn-primary btn-lg" id="player_1_option_d" style="width: 15rem; height: 5rem" onclick="getAnswer('d', '1')">100</button></td>
            <td></td>
            <td style="text-align: center; font-size: 1.4rem;" id="player_1_game_view_score"><button type="button" class="btn btn-warning btn-lg" id="player_2_option_c" style="width: 15rem; height: 5rem" onclick="getAnswer('c', '2')">100</button></td>
            <td style="text-align: center; font-size: 1.4rem;" id="player_2_game_view_score"><button type="button" class="btn btn-warning btn-lg" id="player_2_option_d" style="width: 15rem; height: 5rem" onclick="getAnswer('d', '2')">100</button></td>
        </tr>
        </tbody>
    </table>
    <div id="player_1_panel" style="text-align: center; background-color: red; border-radius: 2rem; position: absolute; width: 40%; height: 60%; margin-left: 6%; top: 39%; visibility: hidden; z-index: 1;">
    </div>
    <div id="player_2_panel" style="text-align: center; background-color: #ff0000; border-radius: 2rem; position: absolute; width: 40%; height: 60%; margin-left: 6%; top: 39%; left: 45%; visibility: hidden; z-index: 1;">
    </div>
    <div id="timer_panel" style="text-align: center; color: white; background-color: #0c2e60; border-radius: 2rem; position: absolute; width: 10%; height: 7%; margin-left: 6%; top: 22.7%; left: 37%; visibility: visible; z-index: 1;">
        <p style="color: white; font-size: xx-large;" id="timer_text"></p>
    </div>
    <div id="game_over_panel" style="text-align: center; background-color: #0c2e60; border-radius: 2rem; position: absolute; width: 85%; height: 60%; margin-left: 6%; top: 39%; visibility: hidden; z-index: 1;">
        <table class="table" style="width: 80%; color: white; margin-left: 8rem; margin-top: 6rem">
            <thead>
                <tr>
                    <th id="game_over_panel_player_1_name" style="font-size: xx-large; width: 50%">Player 1</th>
                    <th id="game_over_panel_player_2_name" style="font-size: xx-large; width: 50%">Player 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="game_over_panel_player_1_score" style="font-size: xx-large">0000</td>
                    <td id="game_over_panel_player_2_score" style="font-size: xx-large">0000</td>
                </tr>
                <tr>
                    <td id="game_over_panel_play_again_button" colspan="2"><button class="btn btn-warning btn-lg" style="width: 15rem; height: 5rem; color: black; font-size: xx-large" onclick="playAgain()">Play Again</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="gameStartPanel" style="background-color: #0c2e60; border-radius: 2rem; position: absolute; width: 85%; height: 60%; margin-left: 6%; top: 39%; visibility: hidden; z-index: 2;">
        <p style="margin-left: 25%; margin-top: 6%; font-size: 5rem; color: white">Game is starting...</p>
    </div>
    <div id="start_panel" style="text-align: center; background-color: #0c2e60; border-radius: 2rem; position: absolute; width: 85%; height: 60%; margin-left: 6%; top: 39%; visibility: visible; z-index: 1;">
        <form action="#">
        <table class="table" style="width: 80%; color: white; margin-left: 8rem; margin-top: 1rem">
                @csrf
                <thead>
                <tr>
                    <th colspan="2" id="startPanelSetName" style="font-size: xx-large"></th>
                </tr>
                <tr>
                    <th id="start_panel_player_1_name" style="font-size: xx-large">Player 1</th>
                    <th id="start_panel_player_2_name" style="font-size: xx-large">Player 2</th>
                </tr>
                </thead>
                <tbody>
                <tr style=" text-align: center">
                    <td style="font-size: xx-large; color: #0c2e60;"><input id="start_panel_player_1_input" type="text" value="Player 1"></td>
                    <td style="font-size: xx-large; color: #0c2e60;"><input id="start_panel_player_2_input" type="text" value="Player 2"></td>
                </tr>
                <tr>
                    <td style="font-size: xx-large; color: #0c2e60;" colspan="2">
                        <label for="time" style="color: white">Time:</label>
                        <select id="timerSecond" style="color: #0c2e60">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="60">60</option>
                            <option value="70">70</option>
                            <option value="80">80</option>
                            <option value="90">90</option>
                            <option value="100">100</option>
                            <option value="110">110</option>
                            <option value="120">120</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td id="start_game_button" colspan="2"><button class="btn btn-warning btn-lg" style="width: 15rem; height: 5rem; color: black; font-size: xx-large" onclick="startGame()">Start Game</button></td>
                </tr>
                </tbody>
        </table>
        </form>
    </div>
    <audio id="correctSound">
        <source src="{{asset('sounds/correct.mp3')}}" type="audio/mpeg">
    </audio>
    <audio id="wrongSound">
        <source src="{{asset('sounds/wrong.mp3')}}" type="audio/mpeg">
    </audio>
    <script>
        var player_1_option_a = document.getElementById('player_1_option_a');
        var player_1_option_b = document.getElementById('player_1_option_b');
        var player_1_option_c = document.getElementById('player_1_option_c');
        var player_1_option_d = document.getElementById('player_1_option_d');
        var player_2_option_a = document.getElementById('player_2_option_a');
        var player_2_option_b = document.getElementById('player_2_option_b');
        var player_2_option_c = document.getElementById('player_2_option_c');
        var player_2_option_d = document.getElementById('player_2_option_d');
        var player_1_score = 0;
        var player_2_score = 0;
        var correctAnswer;
        var timeleft = 10;
        var player1Name;
        var player2Name;
        var downloadTimer;
        @foreach($Questions as $Question)
            var questionList = ['{{$Question->c1q1}}', '{{$Question->c1q2}}', '{{$Question->c1q3}}', '{{$Question->c1q4}}', '{{$Question->c1q5}}',
                '{{$Question->c2q1}}', '{{$Question->c2q2}}', '{{$Question->c2q3}}', '{{$Question->c2q4}}', '{{$Question->c2q5}}',
                '{{$Question->c3q1}}', '{{$Question->c3q2}}', '{{$Question->c3q3}}', '{{$Question->c3q4}}', '{{$Question->c3q5}}',
                '{{$Question->c4q1}}', '{{$Question->c4q2}}', '{{$Question->c4q3}}', '{{$Question->c4q4}}', '{{$Question->c4q5}}',
                '{{$Question->c5q1}}', '{{$Question->c5q2}}', '{{$Question->c5q3}}', '{{$Question->c5q4}}', '{{$Question->c5q5}}',
                '{{$Question->c6q1}}', '{{$Question->c6q2}}', '{{$Question->c6q3}}', '{{$Question->c6q4}}', '{{$Question->c6q5}}'];
        var setname = '{{$Question->SetName}}';
        @endforeach
        @foreach($Answers as $Answer)
            var answerList = ['{{$Answer->c1a1}}', '{{$Answer->c1a2}}', '{{$Answer->c1a3}}', '{{$Answer->c1a4}}', '{{$Answer->c1a5}}',
                '{{$Answer->c2a1}}', '{{$Answer->c2a2}}', '{{$Answer->c2a3}}', '{{$Answer->c2a4}}', '{{$Answer->c2a5}}',
                '{{$Answer->c3a1}}', '{{$Answer->c3a2}}', '{{$Answer->c3a3}}', '{{$Answer->c3a4}}', '{{$Answer->c3a5}}',
                '{{$Answer->c4a1}}', '{{$Answer->c4a2}}', '{{$Answer->c4a3}}', '{{$Answer->c4a4}}', '{{$Answer->c4a5}}',
                '{{$Answer->c5a1}}', '{{$Answer->c5a2}}', '{{$Answer->c5a3}}', '{{$Answer->c5a4}}', '{{$Answer->c5a5}}',
                '{{$Answer->c6a1}}', '{{$Answer->c6a2}}', '{{$Answer->c6a3}}', '{{$Answer->c6a4}}', '{{$Answer->c6a5}}',];
        @endforeach
        document.getElementById('startPanelSetName').innerText = setname;
        function getQuestion(){
            var c = Math.floor(Math.random() * 4)
            var QandA = Math.floor(Math.random() * questionList.length);
            do {
                var w1 = Math.floor(Math.random() * questionList.length);
            }
            while(QandA == w1);
            do {
                var w2 = Math.floor(Math.random() * questionList.length);
            }
            while(QandA == w2 || w2 == w1);
            do {
                var w3 = Math.floor(Math.random() * questionList.length);
            }
            while(QandA == w3 || w3 == w2 || w3 == w1);

            document.getElementById('player_1_question').innerText = questionList[QandA];
            document.getElementById('player_2_question').innerText = questionList[QandA];

            if(c == 0){
                correctAnswer = "a";
                document.getElementById('player_1_option_a').innerText = answerList[QandA];
                document.getElementById('player_1_option_b').innerText = answerList[w1];
                document.getElementById('player_1_option_c').innerText = answerList[w2];
                document.getElementById('player_1_option_d').innerText = answerList[w3];

                document.getElementById('player_2_option_a').innerText = answerList[QandA];
                document.getElementById('player_2_option_b').innerText = answerList[w1];
                document.getElementById('player_2_option_c').innerText = answerList[w2];
                document.getElementById('player_2_option_d').innerText = answerList[w3];
            }
            else if (c == 1){
                correctAnswer = "b";
                document.getElementById('player_1_option_a').innerText = answerList[w1];
                document.getElementById('player_1_option_b').innerText = answerList[QandA];
                document.getElementById('player_1_option_c').innerText = answerList[w2];
                document.getElementById('player_1_option_d').innerText = answerList[w3];

                document.getElementById('player_2_option_a').innerText = answerList[w1];
                document.getElementById('player_2_option_b').innerText = answerList[QandA];
                document.getElementById('player_2_option_c').innerText = answerList[w2];
                document.getElementById('player_2_option_d').innerText = answerList[w3];
            }
            else if (c == 1){
                correctAnswer = "c";
                document.getElementById('player_1_option_a').innerText = answerList[w1];
                document.getElementById('player_1_option_b').innerText = answerList[w2];
                document.getElementById('player_1_option_c').innerText = answerList[QandA];
                document.getElementById('player_1_option_d').innerText = answerList[w3];

                document.getElementById('player_2_option_a').innerText = answerList[w1];
                document.getElementById('player_2_option_b').innerText = answerList[w2];
                document.getElementById('player_2_option_c').innerText = answerList[QandA];
                document.getElementById('player_2_option_d').innerText = answerList[w3];
            }
            else {
                correctAnswer = "d";
                document.getElementById('player_1_option_a').innerText = answerList[w1];
                document.getElementById('player_1_option_b').innerText = answerList[w2];
                document.getElementById('player_1_option_c').innerText = answerList[w3];
                document.getElementById('player_1_option_d').innerText = answerList[QandA];

                document.getElementById('player_2_option_a').innerText = answerList[w1];
                document.getElementById('player_2_option_b').innerText = answerList[w2];
                document.getElementById('player_2_option_c').innerText = answerList[w3];
                document.getElementById('player_2_option_d').innerText = answerList[QandA];
            }
        }
        function getAnswer(answer, player){
            if(answer == correctAnswer){
                document.getElementById('correctSound').play();
                player_1_option_a.style.visibility = "hidden";
                player_1_option_b.style.visibility = "hidden";
                player_1_option_c.style.visibility = "hidden";
                player_1_option_d.style.visibility = "hidden";
                player_2_option_a.style.visibility = "hidden";
                player_2_option_b.style.visibility = "hidden";
                player_2_option_c.style.visibility = "hidden";
                player_2_option_d.style.visibility = "hidden";

                if(player == 1){
                    document.getElementById('player_1_panel').style.backgroundColor = "green";
                    document.getElementById('player_1_panel').style.visibility = "visible";
                    document.getElementById('player_2_panel').style.backgroundColor = "red";
                    document.getElementById('player_2_panel').style.visibility = "visible";
                    player_1_score += 10;
                    document.getElementById('player_1_game_view_score').innerText = player_1_score;
                    document.getElementById('player_2_game_view_score').innerText = player_2_score;

                }
                else if(player == 2){
                    document.getElementById('player_1_panel').style.backgroundColor = "red";
                    document.getElementById('player_1_panel').style.visibility = "visible";
                    document.getElementById('player_2_panel').style.backgroundColor = "green";
                    document.getElementById('player_2_panel').style.visibility = "visible";
                    player_2_score += 10;
                    document.getElementById('player_1_game_view_score').innerText = player_1_score;
                    document.getElementById('player_2_game_view_score').innerText = player_2_score;
                }
            }
            else{
                document.getElementById('wrongSound').play();
                if(player == 1){
                    document.getElementById('player_1_panel').style.backgroundColor = "red";
                    document.getElementById('player_1_panel').style.visibility = "visible";
                    player_1_option_a.style.visibility = "hidden";
                    player_1_option_b.style.visibility = "hidden";
                    player_1_option_c.style.visibility = "hidden";
                    player_1_option_d.style.visibility = "hidden";
                }
                else{
                    document.getElementById('player_2_panel').style.backgroundColor = "red";
                    document.getElementById('player_2_panel').style.visibility = "visible";
                    player_2_option_a.style.visibility = "hidden";
                    player_2_option_b.style.visibility = "hidden";
                    player_2_option_c.style.visibility = "hidden";
                    player_2_option_d.style.visibility = "hidden";
                }
                document.getElementById('player_1_game_view_score').innerText = player_1_score;
                document.getElementById('player_2_game_view_score').innerText = player_2_score;
            }
            checkVisibility();
        }
        function checkVisibility(){
            if(document.getElementById('player_1_panel').style.visibility == "visible" && document.getElementById('player_2_panel').style.visibility == "visible"){
                document.getElementById('player_1_game_view_score').innerText = player_1_score;
                document.getElementById('player_2_game_view_score').innerText = player_2_score;
                setTimeout(newQuestion, 1500);
            }
        }
        function newQuestion(){
            getQuestion();
            document.getElementById('player_1_panel').style.visibility = "hidden";
            document.getElementById('player_2_panel').style.visibility = "hidden";
            player_1_option_a.style.visibility = "visible";
            player_1_option_b.style.visibility = "visible";
            player_1_option_c.style.visibility = "visible";
            player_1_option_d.style.visibility = "visible";
            player_2_option_a.style.visibility = "visible";
            player_2_option_b.style.visibility = "visible";
            player_2_option_c.style.visibility = "visible";
            player_2_option_d.style.visibility = "visible";

        }
        function gameOver(){
            document.getElementById('game_over_panel_player_1_name').innerText = player1Name;
            document.getElementById('game_over_panel_player_2_name').innerText = player2Name;
            document.getElementById('game_over_panel').style.visibility = "visible";
            document.getElementById('game_over_panel_player_1_score').innerText = player_1_score;
            document.getElementById('game_over_panel_player_2_score').innerText = player_2_score;
            document.getElementById('player_1_panel').style.visibility = "hidden";
            document.getElementById('player_2_panel').style.visibility = "hidden";
        }
        function startGame(){
            document.getElementById('start_panel').style.visibility = "hidden";
            document.getElementById('gameStartPanel').style.visibility = "visible";
            player1Name = document.getElementById('start_panel_player_1_input').value;
            var x = document.getElementById('timerSecond').value;
            timeleft = x;
            document.getElementById('player_1_game_view_head').innerText = player1Name;
            player2Name = document.getElementById('start_panel_player_2_input').value;
            document.getElementById('player_2_game_view_head').innerText = player2Name;
            setTimeout(gameIsStarting, 3000);
        }
        function gameIsStarting(){
            getQuestion();
            document.getElementById('gameStartPanel').style.visibility = "hidden";
            downloadTimer = setInterval(function(){
                if(timeleft == 0){
                    clearInterval(downloadTimer);
                    gameOver();
                }
                document.getElementById("timer_text").innerHTML = timeleft.toString();
                timeleft -= 1;
            }, 1000);
        }
        function playAgain(){
            document.getElementById('game_over_panel').style.visibility = "hidden";
            document.getElementById('start_panel').style.visibility = "visible";
            document.getElementById('player_1_game_view_head').innerText = "Player 1"
            document.getElementById('player_2_game_view_head').innerText = "Player 2"
            document.getElementById('player_1_game_view_score').innerText = "00";
            document.getElementById('player_2_game_view_score').innerText = "00";
            document.getElementById('start_panel_player_1_input').value = "Player 1";
            document.getElementById('start_panel_player_2_input').value = "Player 2";
            timeleft = 10;
            player_1_score = 0;
            player_2_score = 0;
        }
    </script>

@endsection
