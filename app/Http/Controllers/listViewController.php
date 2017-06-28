<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class listViewController extends Controller {
   public function index(){
      $users = DB::select('select * from tasks');
      return view('list_view',['task_name'=>$users]);
   }
}