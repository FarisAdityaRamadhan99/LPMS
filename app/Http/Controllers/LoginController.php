<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends BaseController
{
    public function index()
    {

        return view('login');
    }

    public function aksiLogin(Request $request)
    {
        $user = DB::table('user')->where(['username' => $request->username, 'password' => $request->password])->get();

        if($user){
            foreach($user as $u){
                if($u->id_level == 2){
                    session()->put('id', $u->id);
                    echo "<script>alert('Login Berhasil');window.location='". route('petugas') ."'</script>";
                }else if($u->id_level == 3){
                    session()->put('id', $u->id);
                    echo "<script>alert('Login Berhasil');window.location='". route('user') ."'</script>";
                }
            }
        }else{
            echo "<script>alert('Username atau Password Salah!!');window.location='". route('login') ."'</script>";
        }
    }

    public function aksiLogout()
    {
        session()->forget('id');
        echo "<script>alert('Logout Berhasil');window.location='". route('welcome') ."'</script>";
    }
}
