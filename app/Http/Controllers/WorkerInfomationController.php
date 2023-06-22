<?php

namespace App\Http\Controllers;

use App\Models\WorkerInfomation;
use Illuminate\Http\Request;

class WorkerInfomationController extends Controller
{
    //
    private $uploadFolder;  
    public function __construct()  
    {  
        // $this->uploadDir = public_path('');  
        $this->uploadFolder = 'assets/images/workers/';  
    } 
    public function getAllWorker(){
        $dt = WorkerInfomation::all();
        return response()->json(['data'=>$dt]);
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
    public function create(Request $request) {
        
        // dd($request);
        $number_code = WorkerInfomationController::getLastestCode($request->code_worker);
        $new_w = $number_code + 1;
        if($new_w < 10){$num_padded = sprintf("%02d", $new_w);}
        $code_worker='';
        $path ='';
        // dd($new_w);
        switch($request->code_worker)
        {
            
            case 2:
                $code_worker = 'B'.$num_padded;
                break;
            case 3:
                $code_worker = 'C'.$num_padded;
                break;
            case 4:
                $code_worker = 'D'.$num_padded;
                break;
            case 5:
                $code_worker = 'F'.$num_padded;
                break;
            case 6:
                $code_worker = 'G'.$num_padded;
                break;
            case 7:
                $code_worker = 'VP'.$num_padded;
                break;
            default:
                $code_worker = 'A'.$num_padded;
                break;
                 
        }
        if($request->hasFile('image_worker'))
        {
            $files = $request->file('image_worker');
            $extension = $files->getClientOriginalExtension();
            $allowedfileExtension = ['pdf', 'jpg', 'png'];
            $check = in_array($extension, $allowedfileExtension);
            if ($check) {
                $name =   $code_worker . "." . $files->getClientOriginalExtension();
                $path = $files->move($this->uploadFolder, $name);
            }
            $new_add = new WorkerInfomation([
                'slug'=>$code_worker,
                'name_worker'=>$request->name_worker,
                'img_worker'=>$path,
                'code_worker'=>$code_worker ,
                'kind_worker'=>$request->code_worker,
                'year_worker'=>$request->year_worker,
                'description_worker'=>$request->description_worker,
                'flag'=>1,
            ]);
            $new_add->save();
            if($new_add)
            {
                return view('admin.index')-> with('status', 'Thêm mới trang thợ thành công!');
            }
            else{
                return view('admin.index')-> with('error', 'Thêm mới trang thợ thành công!');
            }
    // sdsd
        }
        else 
            return  view('admin.index')-> with('error', 'Vui lòng chọn hình ảnh');
        
    }
    public function getLastestCode ($id)
    {
       
        $co = WorkerInfomation::where('kind_worker','=',$id)->get('id');
        return $co->count();
       
    }
}
