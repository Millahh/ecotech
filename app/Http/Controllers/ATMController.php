<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ATMController extends Controller
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
    return redirect('atm-qrcode');
    // $users = User::find($AppID);
    // // $AppID = $request->AppID;
    // // $dt = User::where('AppID',$AppID)->first();
    // if($users){
    //     return redirect('atm-qrcode');
    // }
    // else{
    //     return redirect('atm-idsalah');
    // }
//     $AppID = $request->AppID;
//     // $password = $request->password;
//     $data = User::where('AppID',$AppID)->first();
//     if($data){
//         return redirect('atm-qrcode');
//         //cek data ada/tidak
//         if(Hash::check($password, $data->password)){
//             Session::put('AppID', $data->AppID);
//             Session::put('email',$data->email);
//             Session::put('atm-idcard', TRUE);//ragu di idcard nya, bs diganti ATM-idcard atau ATM.IDCard 
//             return redirect('login');//ragu, bisa diganti yg atas
//         }
//         else{
//             return redirect('atm-qrcode');
//         }
//     }
//     else{
//         // $AppID = $request->AppID;
//         // $data = User::where('AppID',$AppID)->first();
//         // echo $data;
//         return redirect('atm-idsalah');
// }
    
}}
