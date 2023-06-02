<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Log;

class AuthController extends Controller
{
    public function register(Request $request){

        $validator = Validator::make($request->all(),[
            'nama_user'=>'required',
            'nim'=>'required',
            'password'=>'required|min:8',
            'confirmation_password'=>'required|same:password'
        ]);

        if($validator->fails()){
            return messageError($validator->messages()->toArray());
        }
        $user = $validator->validate();

        User::create($user);
        
        $payload=[
            'nama_user'=>$user['nama_user'],
            'role'=>'user',
            'iat'=>now()->timestamp,
            'exp'=>now()->timestamp+7000
        ];
        
        $token = JWT::encode($payload,env('JWT_SECRET_KEY'),'HS256');

        Log::create([
            'module'=>'login',
            'action'=>'login akun',
            'useraccess'=>$user['id_user']
        ]);

        return response()->json([
            "data"=>[
                'msg'=>'berhasil login',
                'nama_user'=>$user['nama_user'],
                'nim'=>$user['nim'],
                'role'=>'user',
            ],
            "token"=>"Bearer {$token}"
        ],200);

    }
    
}
