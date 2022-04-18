<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Atm;
use App\Models\Bottle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Log;

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
        return redirect('atm-menu');
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
        
    }
    
    public function getData(Request $request)
    {
        $input = $request->all();        
          
        // Log::info($input);
        $atm = Atm::create($input);
        $lastId = $atm->id;
     
        // return view('ATM.succes-input', $data);
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

    public function sendDataSucces($id){
        $data = Atm::find($id);
        $data = Atm::where('id', $id)->first();
        return view('ATM.succes-input', compact('data'));
    }

    public function inputBotol(){
        $itemBotol = Bottle::orderBy('ukuran', 'asc')->get();
        $data = array('itemBotol' => $itemBotol);
        return view('ATM.jmlh-bottle', $data);
    }

    public function getPenghasilan(Request $request, $id){
        // $data = Atm::get();
        $botol = Atm::find($id);
        $itembotol = $request->bottle();
        $getJumlah = Atm::where('id', $id)->first();
        $data = array('botol' => $botol,
                      'getJumlah' => $getJumlah);

        return view('ATM.jmlh-bottle', $data);
    }

    // public function showJumlah($id){
    //     $data =[
    //         'atm' => $this->Atm->detailData($id),
    //     ];
    //     return view('ATM.jmlh-bottle', $data);
    // }


    
}

