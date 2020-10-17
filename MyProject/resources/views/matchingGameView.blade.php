@extends('layouts.app')

@section('content')
    <div style="background-color: #0c2e60; position:absolute; width: 50%; margin-left: 25%; top: 15%; height: 7%; border-radius: 1rem">
        <table class="table">
            <tr style="color: white">
                <td style="width: 50%;" id="gameViewPlayerName">Player Name : </td>
                <td style="width: 25%;" id="gameViewScore">Score : </td>
                <td style="width: 25%;" id="gameViewTime">Time : </td>
            </tr>
        </table>
    </div>
    <table class="table">
        <tbody>
            <tr>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b1" onclick="buttonClicked('b1')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b2" onclick="buttonClicked('b2')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b3" onclick="buttonClicked('b3')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b4" onclick="buttonClicked('b4')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b5" onclick="buttonClicked('b5')">X</button></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b6" onclick="buttonClicked('b6')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b7" onclick="buttonClicked('b7')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b8" onclick="buttonClicked('b8')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b9" onclick="buttonClicked('b9')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b10" onclick="buttonClicked('b10')">X</button></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b11" onclick="buttonClicked('b11')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b12" onclick="buttonClicked('b12')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b13" onclick="buttonClicked('b13')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b14" onclick="buttonClicked('b14')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b15" onclick="buttonClicked('b15')">X</button></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b16" onclick="buttonClicked('b16')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b17" onclick="buttonClicked('b17')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b18" onclick="buttonClicked('b18')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b19" onclick="buttonClicked('b19')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b20" onclick="buttonClicked('b20')">X</button></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b21" onclick="buttonClicked('b21')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b22" onclick="buttonClicked('b22')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b23" onclick="buttonClicked('b23')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b24" onclick="buttonClicked('b24')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b25" onclick="buttonClicked('b25')">X</button></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b26" onclick="buttonClicked('b26')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b27" onclick="buttonClicked('b27')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b28" onclick="buttonClicked('b28')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b29" onclick="buttonClicked('b29')">X</button></td>
                <td style="text-align: center; font-size: 1.4rem;"><button class="btn btn-lg btn-warning" style="width: 15rem; height: 5rem" type="button" id="b30" onclick="buttonClicked('b30')">X</button></td>
            </tr>
        </tbody>
    </table>
    <div id="startPanel" style="overflow: auto; text-align: center; background-color: #0c2e60; border-radius: .5rem; position: absolute; width: 96%; height: 84%; margin-left: 2%; top: 24%; visibility: visible">
        <p id="startPanelText" style="margin-top: 2rem; font-size: 4rem; color: white">Matching Game</p>
        <p id="startPanelSetName" style="font-size: 4rem; color: white">Set Name</p>
        <table class="table" style="width: 50%; margin: auto">
            <tr>
                <td><label for="playerName" style="color: white; font-size: xx-large">Player Name:</label></td>
                <td><label for="time" style="color: white; font-size: xx-large">Time</label></td>
            </tr>
            <tr>
                <td><input type="text" value="Player" name="playerName" id="playerName" style="color: #0c2e60; height: 2.5rem; font-size: xx-large"></td>
                <td>
                    <select name="timeCount" id="timeCount" style="color: #0c2e60; height: 2.5rem; width: 5rem; font-size: xx-large">
                        <option value="20">20</option>
                        <option value="40">40</option>
                        <option value="60">60</option>
                        <option value="80">80</option>
                        <option value="100">100</option>
                        <option value="120">120</option>
                        <option value="140">140</option>
                        <option value="160">160</option>
                        <option value="180">180</option>
                    </select>
                </td>
            </tr>

        </table>
        <button id="showAnswerButton" class="btn-success btn" style="position:absolute; top: 75%; left: 42%; width: 15rem; height: 5rem; border-radius: 1rem; color: white; font-size: 2rem;" onclick="startGame()">Start Game</button>
    </div>
    <div id="gameOverPanel" style="overflow: auto; text-align: center; background-color: #0c2e60; border-radius: .5rem; position: absolute; width: 96%; height: 84%; margin-left: 2%; top: 24%; visibility: hidden">
        <p id="gameOverText" style="margin-top: .5rem; font-size: 3.5rem; color: white">Game Over</p>
        <p id="gameOverPlayerNameText" style="font-size: 3.5rem; color: white">Player Name</p>
        <p id="gameOverTimeBonusText" style="font-size: 3.5rem; color: white">Time Bonus: </p>
        <p id="gameOverScoreText" style="font-size: 3.5rem; color: white">Score: </p>
        <button id="showAnswerButton" class="btn-success btn" style="position:absolute; top: 75%; left: 42%; width: 15rem; height: 5rem; border-radius: 1rem; color: white; font-size: 2rem;" onclick="playAgain()">Play Again</button>
    </div>
    <div id="gameStartPanel" style="background-color: #0c2e60; border-radius: .5rem; position: absolute; width: 96%; height: 84%; margin-left: 2%; top: 24%; visibility: hidden; z-index: 2;">
        <p style="margin-left: 25%; margin-top: 6%; font-size: 5rem; color: white">Game is starting...</p>
    </div>
    <audio id="correctSound">
        <source src="{{asset('sounds/correct.mp3')}}" type="audio/mpeg">
    </audio>
    <audio id="wrongSound">
        <source src="{{asset('sounds/wrong.mp3')}}" type="audio/mpeg">
    </audio>
    <script>
        var downloadTimer;
        var passedTime;
        window.scrollBy(0, 100);
        var score = 0;
        var inputName;
        var inputTime;
        var buttonRandoms = [];
        var questionRandoms = [];
        var buttons = document.querySelectorAll(".btn");
        @foreach($Questions as $Question)
        var questionList = ['{{$Question->c1q1}}', '{{$Question->c1q2}}', '{{$Question->c1q3}}', '{{$Question->c1q4}}', '{{$Question->c1q5}}',
            '{{$Question->c2q1}}', '{{$Question->c2q2}}', '{{$Question->c2q3}}', '{{$Question->c2q4}}', '{{$Question->c2q5}}',
            '{{$Question->c3q1}}', '{{$Question->c3q2}}', '{{$Question->c3q3}}', '{{$Question->c3q4}}', '{{$Question->c3q5}}',
            '{{$Question->c4q1}}', '{{$Question->c4q2}}', '{{$Question->c4q3}}', '{{$Question->c4q4}}', '{{$Question->c4q5}}',
            '{{$Question->c5q1}}', '{{$Question->c5q2}}', '{{$Question->c5q3}}', '{{$Question->c5q4}}', '{{$Question->c5q5}}',
            '{{$Question->c6q1}}', '{{$Question->c6q2}}', '{{$Question->c6q3}}', '{{$Question->c6q4}}', '{{$Question->c6q5}}'];
        var setname = '{{$Question->SetName}}';
        @endforeach
        var buttonCheck = 0;
        var question;
        var answer;
        var answerCheckCount = 30;
        @foreach($Answers as $Answer)
        var answerList = ['{{$Answer->c1a1}}', '{{$Answer->c1a2}}', '{{$Answer->c1a3}}', '{{$Answer->c1a4}}', '{{$Answer->c1a5}}',
            '{{$Answer->c2a1}}', '{{$Answer->c2a2}}', '{{$Answer->c2a3}}', '{{$Answer->c2a4}}', '{{$Answer->c2a5}}',
            '{{$Answer->c3a1}}', '{{$Answer->c3a2}}', '{{$Answer->c3a3}}', '{{$Answer->c3a4}}', '{{$Answer->c3a5}}',
            '{{$Answer->c4a1}}', '{{$Answer->c4a2}}', '{{$Answer->c4a3}}', '{{$Answer->c4a4}}', '{{$Answer->c4a5}}',
            '{{$Answer->c5a1}}', '{{$Answer->c5a2}}', '{{$Answer->c5a3}}', '{{$Answer->c5a4}}', '{{$Answer->c5a5}}',
            '{{$Answer->c6a1}}', '{{$Answer->c6a2}}', '{{$Answer->c6a3}}', '{{$Answer->c6a4}}', '{{$Answer->c6a5}}',];
        @endforeach
        document.getElementById('startPanelSetName').innerText = setname;
        function setQuestion(){
            question=0;
            answer=0;
            answerCheckCount = 30;
            for (var i=0; i<30; i++){
                buttons[i].style.visibility = "visible";
            }
            for (x = 0; x<15; x++){
                do {
                    var y = Math.floor(Math.random()*15)
                }while (questionRandoms.includes(y));
                questionRandoms.push(y);
            }

            for (a = 0; a<30; a++){
                do {
                    var b = Math.floor(Math.random()*30)
                }while (buttonRandoms.includes(b));
                buttonRandoms.push(b);
            }
            var e = 0;
            var d = true;
            for (var c = 0; c<30; c++){
                if (d){
                    buttons[buttonRandoms[c]].innerText = questionList[e];
                    d = false;
                }
                else{
                    buttons[buttonRandoms[c]].innerText = answerList[e];
                    d = true;
                    e += 1;
                }
            }

        }
        function buttonClicked(element){
            if( document.getElementById(element).classList.contains("btn-warning")){
                document.getElementById(element).classList.remove("btn-warning");
                document.getElementById(element).classList.add("btn-primary");
            }
            else{
                document.getElementById(element).classList.remove("btn-primary");
                document.getElementById(element).classList.add("btn-warning");
                buttonCheck -= 1;
            }

            for (var b = 0; b<30; b++){
                if(buttons[b].classList.contains('btn-primary')){
                    buttonCheck += 1
                }
            }

            if(buttonCheck == 3){
                for (var i=0; i<30; i++){
                    buttons[i].disabled = true;
                }
                setTimeout(checkAnswerTimeout, 500);

            }

            var value = document.getElementById(element).innerText;
            if (questionList.includes(value)){
                question = questionList.indexOf(value);
            }
            else{
                answer = answerList.indexOf(value);
            }

        }
        function checkAnswerTimeout(){
            buttonCheck = 0;
            if (question == answer){
                document.getElementById("correctSound").play();
                for (var i=0; i<30; i++){
                    if(buttons[i].style.visibility == "visible" && buttons[i].classList.contains("btn-primary")){
                        buttons[i].style.visibility = "hidden";
                        answerCheckCount -= 1;
                    }
                }
                score += 10;
            }
            else {
                document.getElementById("wrongSound").play();
                score -= 5;
            }
            for (var i=0; i<30; i++){
                buttons[i].classList.remove("btn-primary");
                buttons[i].classList.add("btn-warning");
                buttons[i].disabled = false;
            }
            question = 0;
            answer = 0;
            if (answerCheckCount == 0){
                clearInterval(downloadTimer);
                gameOver();
            }
            document.getElementById('gameViewScore').innerText = "Score :   " + score.toString();

        }
        function startGame(){
            inputName = document.getElementById('playerName').value;
            passedTime = document.getElementById('timeCount').value;
            inputTime = document.getElementById('timeCount').value;

            document.getElementById('gameViewPlayerName').innerText = "Player Name :   " + inputName;
            document.getElementById('gameViewScore').innerText = "Score :   " + "00";
            document.getElementById('gameViewTime').innerText = "Time :   " + inputTime.toString();

            setQuestion();
            document.getElementById('gameStartPanel').style.visibility = "visible";
            document.getElementById('startPanel').style.visibility = "hidden";
            for (var btnNumber = 0; btnNumber<30; btnNumber++){
                var wordLength = buttons[btnNumber].innerHTML.length;
                if(wordLength>15 && wordLength<=35){
                    buttons[btnNumber].style.fontSize = "1rem";
                    buttons[btnNumber].style.overflowWrap = "break-word";
                    buttons[btnNumber].style.wordWrap = "break-word";
                    buttons[btnNumber].style.hyphens = "auto";
                }
                else if(wordLength>35 && wordLength<=50){
                    buttons[btnNumber].style.fontSize = ".9rem";
                    buttons[btnNumber].style.overflowWrap = "break-word";
                    buttons[btnNumber].style.wordWrap = "break-word";
                    buttons[btnNumber].style.hyphens = "auto";
                }
                else if(wordLength>50){
                    buttons[btnNumber].style.fontSize = ".6rem";
                    buttons[btnNumber].style.overflowWrap = "break-word";
                    buttons[btnNumber].style.wordWrap = "break-word";
                    buttons[btnNumber].style.hyphens = "auto";
                }

            }
            setTimeout(gameStarts, 3000);
        }
        function gameStarts(){
            document.getElementById('gameStartPanel').style.visibility = "hidden";
            downloadTimer = setInterval(function(){
                if(inputTime == 0){
                    clearInterval(downloadTimer);
                    gameOver();
                }
                document.getElementById("gameViewTime").innerHTML = "Time :   " + inputTime.toString();
                inputTime -= 1;
            }, 1000);
        }
        function playAgain(){
            document.location.reload();
        }
        function  gameOver(){
            var remainTime;
            if(inputTime>0){
                remainTime = passedTime - inputTime - 1;
            }
            else {
                remainTime = 0;
            }
            var finalTimeBonus = remainTime * 10;
            var finalScore = finalTimeBonus + score;
            document.getElementById('gameOverPanel').style.visibility = "visible";
            document.getElementById('gameOverPlayerNameText').innerText = inputName.toString();
            document.getElementById('gameOverTimeBonusText').innerText = "Time Bonus :   " + finalTimeBonus.toString();
            document.getElementById('gameOverScoreText').innerText = "Final Score :   " + finalScore.toString();

        }
    </script>

@endsection
