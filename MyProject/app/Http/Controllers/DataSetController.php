<?php

namespace App\Http\Controllers;

use App\Models\Sets;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataSetController extends Controller
{
    public function dataSetsList(){
        $sets = Sets::where('deleted_at', '=', null)->get();

        return view('admin.dataSetsList', compact('sets'));
    }
    public function deletedDataSets(){
        $sets = Sets::where('deleted_at', '!=', null)->get();

        return view('admin.deletedDataSets', compact('sets'));
    }
    public function undeleteSet($id){
        Sets::where('id', '=', $id)->update([
           'deleted_at' => null,
        ]);

        $sets = Sets::where('deleted_at', '!=', null)->get();
        return view('admin.deletedDataSets', compact('sets'));
    }

    public function hardDeleteSet($id){
        Sets::where('id', '=', $id)->delete();

        $sets = Sets::where('deleted_at', '!=', null)->get();
        return view('admin.deletedDataSets', compact('sets'));
    }

    public function deleteDataSet($id){
        $time = Carbon::now();
        Sets::where('id', '=', $id)->update([
            'deleted_at' => $time
        ]);

        $sets = Sets::where('deleted_at', '=', null)->get();

        return view('admin.dataSetsList', compact('sets'));
    }
}
