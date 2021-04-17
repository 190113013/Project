<?php
namespace App\Http\Controllers;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StudInsertController extends Controller
{
    
    public function insert(){
        
        return view('pr');
    }
    public function create(Request $request){
        $rules = [
			'username' => 'required|string|min:3|max:255',
			'surname' => 'required|string|min:3|max:255',
			'phone' => 'required|string|min:3|max:255'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$student = new StudInsert;
                $student->username = $data['username'];
                $student->surname = $data['surname'];
				$student->phone = $data['phone'];
				$student->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }
}