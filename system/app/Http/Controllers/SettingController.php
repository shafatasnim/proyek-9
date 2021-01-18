<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Auth;

class SettingController extends Controller
{
    function store()
    {
       $data = request()->all();

        if(request('current')){
            $user = Auth::user();
            $check = Hash::check(request('current'), $user->password);
         
            if($check){
                if(request('new') == request('confirm')){

                    $user->password = bcrypt(request('new'));
                    $user->save();

                    return back()->with('success', 'Password Berhasil Diganti');

                }else{
                return back()->with('danger', 'Password Baru Tidak cocok');

                }
            }else{
                return back()->with('danger', 'Password Sekarang Salah');
            }
            
        }else{

        }
        return back()->with('danger', 'Password Kosong');
    }
    

    function index()
    {
        if (Auth::guard('pembeli')->check()) {
            $data['user'] = Auth::guard('pembeli')->user();
        } else {
            $data['user'] = AUth::guard('penjual')->user();
        }

        return view('setting.index', $data);
    }
}
