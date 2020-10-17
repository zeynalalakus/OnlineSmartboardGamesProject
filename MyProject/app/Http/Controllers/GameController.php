<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\Sets;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function jeopardyGameView($name){
        $Questions = Questions::where('SetName', '=', $name)->get();
        $Answers = Answers::where('SetName', '=', $name)->get();

        return view('jeopardyGameView', compact(['Questions', 'Answers']));
    }
    public function createSetView(){
        return view('createSetView');
    }
    public function createSet(Request $request){
        Questions::create([
            'SetName' => $request->get('SetName'),
            'c1n' => $request->get('c1n'),
            'c2n' => $request->get('c2n'),
            'c3n' => $request->get('c3n'),
            'c4n' => $request->get('c4n'),
            'c5n' => $request->get('c5n'),
            'c6n' => $request->get('c6n'),
            'c1q1' => $request->get('c1q1'),
            'c1q2' => $request->get('c1q2'),
            'c1q3' => $request->get('c1q3'),
            'c1q4' => $request->get('c1q4'),
            'c1q5' => $request->get('c1q5'),
            'c2q1' => $request->get('c2q1'),
            'c2q2' => $request->get('c2q2'),
            'c2q3' => $request->get('c2q3'),
            'c2q4' => $request->get('c2q4'),
            'c2q5' => $request->get('c2q5'),
            'c3q1' => $request->get('c3q1'),
            'c3q2' => $request->get('c3q2'),
            'c3q3' => $request->get('c3q3'),
            'c3q4' => $request->get('c3q4'),
            'c3q5' => $request->get('c3q5'),
            'c4q1' => $request->get('c4q1'),
            'c4q2' => $request->get('c4q2'),
            'c4q3' => $request->get('c4q3'),
            'c4q4' => $request->get('c4q4'),
            'c4q5' => $request->get('c4q5'),
            'c5q1' => $request->get('c5q1'),
            'c5q2' => $request->get('c5q2'),
            'c5q3' => $request->get('c5q3'),
            'c5q4' => $request->get('c5q4'),
            'c5q5' => $request->get('c6q5'),
            'c6q1' => $request->get('c6q1'),
            'c6q2' => $request->get('c6q2'),
            'c6q3' => $request->get('c6q3'),
            'c6q4' => $request->get('c6q4'),
            'c6q5' => $request->get('c6q5'),

        ]);
        Answers::create([
            'SetName' => $request->get('SetName'),
            'c1a1' => $request->get('c1a1'),
            'c1a2' => $request->get('c1a2'),
            'c1a3' => $request->get('c1a3'),
            'c1a4' => $request->get('c1a4'),
            'c1a5' => $request->get('c1a5'),
            'c2a1' => $request->get('c2a1'),
            'c2a2' => $request->get('c2a2'),
            'c2a3' => $request->get('c2a3'),
            'c2a4' => $request->get('c2a4'),
            'c2a5' => $request->get('c2a5'),
            'c3a1' => $request->get('c3a1'),
            'c3a2' => $request->get('c3a2'),
            'c3a3' => $request->get('c3a3'),
            'c3a4' => $request->get('c3a4'),
            'c3a5' => $request->get('c3a5'),
            'c4a1' => $request->get('c4a1'),
            'c4a2' => $request->get('c4a2'),
            'c4a3' => $request->get('c4a3'),
            'c4a4' => $request->get('c4a4'),
            'c4a5' => $request->get('c4a5'),
            'c5a1' => $request->get('c5a1'),
            'c5a2' => $request->get('c5a2'),
            'c5a3' => $request->get('c5a3'),
            'c5a4' => $request->get('c5a4'),
            'c5a5' => $request->get('c5a5'),
            'c6a1' => $request->get('c6a1'),
            'c6a2' => $request->get('c6a2'),
            'c6a3' => $request->get('c6a3'),
            'c6a4' => $request->get('c6a4'),
            'c6a5' => $request->get('c6a5'),
        ]);
        Sets::create([
            'SetName' => $request->get('SetName'),
            'created_by' => Auth::user()->name,
        ]);
        $name = Auth::user()->name;
        $mysets = Sets::where('created_by', '=', $name)->where('deleted_at', '=', null)->get();
        return view('mySets', compact('mysets'));
    }

    public function multiplayerGameView($name){
        $Questions = Questions::where('SetName', '=', $name)->get();
        $Answers = Answers::where('SetName', '=', $name)->get();

        return view('multiplayerGameView', compact(['Questions', 'Answers']));
    }
    public function matchingGameView($name){
        $Questions = Questions::where('SetName', '=', $name)->get();
        $Answers = Answers::where('SetName', '=', $name)->get();
        return view('matchingGameView', compact(['Questions', 'Answers']));
    }
    public function games(){
        $name = Auth::user()->name;
        $mysets = Sets::where('created_by', '=', $name)->where('deleted_at', '=', null)->get();
        return view('mySets', compact('mysets'));
    }
    public function allSets(){
        $sets = Sets::where('deleted_at', '=', null)->get();
        return view('allSets', compact('sets'));
    }
    public function deleteSet($id){
        $now = Carbon::now();
        Sets::where('id', '=', $id)->update(['deleted_at' => $now]);
        $name = Auth::user()->name;
        $mysets = Sets::where('created_by', '=', $name)->where('deleted_at', '=', null)->get();
        return view('mySets', compact('mysets'));
    }
    public function updateSetView($name){
        $Questions = Questions::where('SetName', '=', $name)->get();
        $Answers = Answers::where('SetName', '=', $name)->get();

        return view('updateSet', compact(['Questions', 'Answers']));
    }
    public function updateSet(Request $request, $name){
        Questions::where('SetName', '=', $name)->update([
            'SetName' => $request->get('SetName'),
            'c1n' => $request->get('c1n'),
            'c2n' => $request->get('c2n'),
            'c3n' => $request->get('c3n'),
            'c4n' => $request->get('c4n'),
            'c5n' => $request->get('c5n'),
            'c6n' => $request->get('c6n'),
            'c1q1' => $request->get('c1q1'),
            'c1q2' => $request->get('c1q2'),
            'c1q3' => $request->get('c1q3'),
            'c1q4' => $request->get('c1q4'),
            'c1q5' => $request->get('c1q5'),
            'c2q1' => $request->get('c2q1'),
            'c2q2' => $request->get('c2q2'),
            'c2q3' => $request->get('c2q3'),
            'c2q4' => $request->get('c2q4'),
            'c2q5' => $request->get('c2q5'),
            'c3q1' => $request->get('c3q1'),
            'c3q2' => $request->get('c3q2'),
            'c3q3' => $request->get('c3q3'),
            'c3q4' => $request->get('c3q4'),
            'c3q5' => $request->get('c3q5'),
            'c4q1' => $request->get('c4q1'),
            'c4q2' => $request->get('c4q2'),
            'c4q3' => $request->get('c4q3'),
            'c4q4' => $request->get('c4q4'),
            'c4q5' => $request->get('c4q5'),
            'c5q1' => $request->get('c5q1'),
            'c5q2' => $request->get('c5q2'),
            'c5q3' => $request->get('c5q3'),
            'c5q4' => $request->get('c5q4'),
            'c5q5' => $request->get('c6q5'),
            'c6q1' => $request->get('c6q1'),
            'c6q2' => $request->get('c6q2'),
            'c6q3' => $request->get('c6q3'),
            'c6q4' => $request->get('c6q4'),
            'c6q5' => $request->get('c6q5'),

        ]);
        Answers::where('SetName', '=', $name)->update([
            'SetName' => $request->get('SetName'),
            'c1a1' => $request->get('c1a1'),
            'c1a2' => $request->get('c1a2'),
            'c1a3' => $request->get('c1a3'),
            'c1a4' => $request->get('c1a4'),
            'c1a5' => $request->get('c1a5'),
            'c2a1' => $request->get('c2a1'),
            'c2a2' => $request->get('c2a2'),
            'c2a3' => $request->get('c2a3'),
            'c2a4' => $request->get('c2a4'),
            'c2a5' => $request->get('c2a5'),
            'c3a1' => $request->get('c3a1'),
            'c3a2' => $request->get('c3a2'),
            'c3a3' => $request->get('c3a3'),
            'c3a4' => $request->get('c3a4'),
            'c3a5' => $request->get('c3a5'),
            'c4a1' => $request->get('c4a1'),
            'c4a2' => $request->get('c4a2'),
            'c4a3' => $request->get('c4a3'),
            'c4a4' => $request->get('c4a4'),
            'c4a5' => $request->get('c4a5'),
            'c5a1' => $request->get('c5a1'),
            'c5a2' => $request->get('c5a2'),
            'c5a3' => $request->get('c5a3'),
            'c5a4' => $request->get('c5a4'),
            'c5a5' => $request->get('c5a5'),
            'c6a1' => $request->get('c6a1'),
            'c6a2' => $request->get('c6a2'),
            'c6a3' => $request->get('c6a3'),
            'c6a4' => $request->get('c6a4'),
            'c6a5' => $request->get('c6a5'),
        ]);
        Sets::where('SetName', '=', $name)->update([
            'SetName' => $request->get('SetName'),
            'created_by' => Auth::user()->name,
        ]);
        $name = Auth::user()->name;
        $mysets = Sets::where('created_by', '=', $name)->where('deleted_at', '=', null)->get();
        return view('mySets', compact('mysets'));
    }
}
