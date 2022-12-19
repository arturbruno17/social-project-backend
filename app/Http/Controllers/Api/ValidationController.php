<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use App\Models\Admin;
use App\Models\Suporte;
class ValidationController extends Controller
{
    public function validation(ValidationRequest $request){

        
        if(Admin::where('email', $request->email)->exists()){
            $user = DB::table('admins')
                    ->where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();

            if(!$user){
                return redirect('/')->with('msg', 'Usuário não encontrado');
            }

            return redirect('/admin')->with('user', $user);
        }

        if(Suporte::where('email', $request->email)->exists()){
            $user = DB::table('suportes')
                    ->where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();

            if(!$user){
                return redirect('/')->with('msg', 'Usuário não encontrado');
            }

            return redirect('/suporte')->with('user', $user);
        }

        return redirect()->back()->with('msg', 'Usuário não encontrado');

    }
}
