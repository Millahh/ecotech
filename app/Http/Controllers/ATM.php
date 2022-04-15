<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ATM extends Controller
{
//     public function index(){
//         if(!Session::get('login')){
//             return redirect('ATM.IDSalah');
//         }
//         else{
//             return view('ATM.signIn');
//         }

// }
public function idcard(){
    return view('ATM.IDCard');
}
public function idcardPost(Request $request){
    $id = $request->AppID;
    $data = User::where('AppID',$id)->first();
    if($data){
        //cek data ada/tidak
        if(Hash::check($password, $data->password)){
            Session::put('AppID', $data->id);
            Session::put('idcard', TRUE);//ragu di idcard nya, bs diganti ATM-idcard atau ATM.IDCard 
            return redirect('atm-signin');//ragu, bisa diganti yg atas
        }
        else{
            return redirect('atm-idsalah');
        }
    }
}
}
