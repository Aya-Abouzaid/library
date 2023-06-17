<?php

namespace App\Http\Controllers;

use App\Models\User;
use Doctrine\Inflector\Rules\Turkish\Rules;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * 
     * 
     * @return mixed
     */

     
    public function register (Request $request)
    {   $this->validate($request ,[
        'name'=>['required'],
        'email'=>['required'],
        'password'=>['required'],
        'phone'=>['required','min:11,max:11'],
        'gender'=>['required','in:male,female']
    ]);

        $user = User::create(
            [
               'name' => request()-> name,
               'email' => request()-> email,
               'password'=> Hash::make( request()-> password),
               'gender'=> request()-> gender,
               'phone'=> request()-> phone,
               
               
            ]);
            return response()->json($user,200) ;
    
    }

    public function login (Request $request){
       if (auth()->attempt([              
                         'email' => request()-> email,
                         'password' => request()-> password,
       ]))
     { return response()->json(['message'=>"sucsessfull", '']);

     }
     else {
        return response()->json(['message'=>"login failed"],400);
     }



       





    }
}


