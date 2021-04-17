<?php

namespace App\Http\Controllers;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\InsertController;

class InsertController extends Controller {
   public function insertform() {
      return view('pr');
   }
	
   public function insert(Request $request) {
     $request->input('customers');
      DB::insert('insert into customers(username, surname, phone) values(?, ?, ?)',[
      $request->input('username'),
		$request->input('surname'),
		$request->input('phone')
      ]);
      echo "Record inserted successfully.<br/>";
   }
}
