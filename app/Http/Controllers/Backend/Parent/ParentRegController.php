<?php

namespace App\Http\Controllers\Backend\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use App\Models\DiscountStudent;

use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use DB;
use PDF;


class ParentRegController extends Controller
{
    
    public function ParentRegView(){

    	$data['allData'] = User::where('usertype','Parent')->get();
    	return view('backend.parent.parent_reg.parent_view',$data);
    }


    public function ParentAdd(){
    	$data['designation'] = Designation::all();
    	return view('backend.parent.parent_reg.parent_add',$data);
    }




    public function ParentStore(Request $request){
    	DB::transaction(function() use($request){
    	$checkYear = date('Ym',strtotime($request->join_date));
    	//dd($checkYear);
    	$parent = User::where('usertype','parent')->orderBy('id','DESC')->first();

    	if ($parent == null) {
    		$firstReg = 0;
    		$parentId = $firstReg+1;
    		if ($parentId < 10) {
    			$id_no = '000'.$parentId;
    		}elseif ($parentId < 100) {
    			$id_no = '00'.$parentId;
    		}elseif ($parentId < 1000) {
    			$id_no = '0'.$parentId;
    		}
    	}else{
     $parent = User::where('usertype','parent')->orderBy('id','DESC')->first()->id;
     	$parentId = $parent+1;
     	if ($parenteId < 10) {
    			$id_no = '000'.$parentId;
    		}elseif ($parentId < 100) {
    			$id_no = '00'.$parentId;
    		}elseif ($parentId < 1000) {
    			$id_no = '0'.$parentId;
    		}

    	} // end else 

    	$final_id_no = $checkYear.$id_no;
    	$user = new User();
    	$code = rand(0000,9999);
    	$user->id_no = $final_id_no;
    	$user->password = bcrypt($code);
    	$user->usertype = 'employee';
    	$user->code = $code;
    	$user->name = $request->name;
    	$user->fname = $request->fname;
    	$user->mname = $request->mname;
    	$user->mobile = $request->mobile;
    	$user->address = $request->address;
    	$user->gender = $request->gender;
    	$user->religion = $request->religion;
    	$user->designation_id = $request->designation_id;
    	$user->dob = date('Y-m-d',strtotime($request->dob));
    	$user->join_date = date('Y-m-d',strtotime($request->join_date));

    	if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/parent_images'),$filename);
    		$user['image'] = $filename;
    	}  
    	});


    	$notification = array(
    		'message' => 'Parent Registration Successful',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('parent.registration.view')->with($notification);

    } // END Method




    public function ParentEdit($id){
    	$data['editData'] = User::find($id);
    	$data['designation'] = Designation::all();
    	return view('backend.parent.parent_reg.parent_edit',$data);

    }


    public function ParentUpdate(Request $request, $id){
    
    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->fname = $request->fname;
    	$user->mname = $request->mname;
    	$user->mobile = $request->mobile;
    	$user->address = $request->address;
    	$user->gender = $request->gender;
    	$user->religion = $request->religion;
    	 
    	$user->designation_id = $request->designation_id;
    	$user->dob = date('Y-m-d',strtotime($request->dob));
    	 

    	if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/parent_images/'.$user->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/parent_images'),$filename);
    		$user['image'] = $filename;
    	}
 	    $user->save();

         

    	$notification = array(
    		'message' => 'Parent Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('parent.registration.view')->with($notification);


    }// END METHOD



    public function ParentDetails($id){
    	$data['details'] = User::find($id);

    $pdf = PDF::loadView('backend.parent.parent_reg.parent_details_pdf', $data);
	$pdf->SetProtection(['copy', 'print'], '', 'pass');
	return $pdf->stream('document.pdf');

    }




}
 