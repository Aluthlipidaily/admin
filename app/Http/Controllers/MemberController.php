<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
class MemberController extends Controller
{
    public function addMember(Request $request){
        $member = new Member;
    
     
        $member->mem_title_id=$request->title;
        $member->mem_name_with_initials=$request->name_with_initials;
        $member->mem_name_in_full=$request->full_name;
        $member->mem_gender_id=$request->gender;
        $member->mem_marital_status_id=$request->marital_status;
        $member->mem_pers_address=$request->personal_address;
        $member->mem_dob=$request->dob;
        $member->mem_telephone=$request->phone_number;
        $member->res_marital_status_id=$request->pb_service_num;
        $member->mem_nominee_name=$request->nominee_name;
        $member->mem_nominee_address=$request->nominee_address;



        

        $member->save();
 
        return redirect('http://localhost:8000/dashboard/newMember');

    }

    public function loadMembers(){
        $member = Member::all()->toArray();
        return view('index',compact('students'));
    }
}
