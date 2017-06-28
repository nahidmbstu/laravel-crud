<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class taskUpdateController extends Controller{
   public function index($id){
      $users = DB::select('select * from tasks');
      return view('show',['users'=>$users]);
   }
   public function showlist($id) {
      $users = DB::select('select * from tasks where id = ?',[$id]);
      return view('list_update',['users'=>$users]);
   }
   public function edit(Request $request,$id) {
      $name = $request->input('task_name');
      $detail = $request->input('task_detail');
      DB::update('update tasks set task_name = ?,task_detail= ? where id = ?',[$name,$detail,$id]);
      echo "Record updated successfully.<br/>";
      
   }
}