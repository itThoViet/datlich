<?php

namespace App\Http\Controllers;

use App\Models\WorkerInfomation;
use Illuminate\Http\Request;

class WorkerInfomationController extends Controller
{
    //
    public function getAllWorker(){
        $dt = WorkerInfomation::all();
        return response()->json($dt);
    }
    public function showWorker($worker = null) {
        if(!$worker) {
            return view('welcome');
        }
    
        // Category param exist
    
        else if($worker) {
            $worker = WorkerInfomation::where('slug', $worker)->first();
            
            if($worker)
            {
                return view('workers.index', compact('worker'));
                // dd($slug);
            }
            else {
                abort('404');
            }
          
        }
            // Nothing founded! Show 404
            else {
            abort('404');
        }
    }

}
