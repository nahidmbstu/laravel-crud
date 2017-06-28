<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class taskDeleteController extends Controller
{
    public function index(){
      $users = DB::select('select * from task');
      return view('show',['users'=>$users]);
   }
   public function destroy($id) {
      DB::delete('delete from tasks where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      
   }
}
