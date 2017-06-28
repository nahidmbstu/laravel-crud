<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
           public function insert( Request $req)

    {
            $name=$req->input('task_name');
            
            $detail=$req->input('task_detail');

            $data=array('task_name'=>$name,'task_detail'=>$detail);

            DB::table('tasks')->insert($data);
            echo "success";
            // $this->show();
    }

    
    public function show()

    {
       

           $data = DB::table('tasks')->get();

    	 if (count($data)>0)
    	  {
              return view ('show',compact('data'));
    	  }
    	 
    	 else

    	  {

           echo "No task to show";
    	 
    	  }
    }

}
