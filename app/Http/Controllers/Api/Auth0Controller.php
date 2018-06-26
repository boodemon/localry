<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\memberRequest;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User as Member;
use Request as Req;
use Auth;

class Auth0Controller extends Controller
{
    public function __construct(){

    }
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }

    public function register(memberRequest $request)
    {
        $row = new Member;
        $row->name      = $request->input('name');
        $row->username  = $request->input('username');
        $row->email     = $request->input('email');
        $row->password  = bcrypt($request->input('password'));
        $row->tel       = $request->input('tel') != '' ? $request->input('tel') : '';
        if( $row->save() ){
            $data = [
                'code'      => 200,
                'result'    => 'successful',
            ];
        }else{
            $data = [
                'code'      => 202,
                'result'    => 'error'
            ];
        }
        return response()->json( $data );
    }

	public function login(Request $request){
           	
			$user = $request->input('username');
			$password = $request->input('password');
			$email 	= ['email' => $user, 'password' => $password];
			$username 	= ['username' => $user, 'password' => $password];
            $result = [];
            /*
            $tokenFetch = JWTAuth::parseToken()->authenticate();
            if ($tokenFetch) {
                JWTAuth::invalidate();
            }
            */

			// if($token = auth()->attempt($username) ){
			if($token = JWTAuth::attempt($username) ){
				//Member::where('username',$user)->update(['remember_token' => $token ]);
				$data = auth()->user();
				$result = [
					'result' 	=> 'successful' , 
					'code'		=> 200,
					'auth' 		=> $token,
                    'data'		=> $data,
                    'msg'       => 'Login from Username'
				];
			}else if($token =  JWTAuth::attempt($email) ){
				//Member::where('email',$user)->update(['remember_token' => $token ]);
				$data = auth()->user();
				$result = [
					'result' 	=> 'successful' , 
					'code'		=> 200,
					'auth' 		=> $token,
                    'data'		=> $data,
                    'msg'       => 'Login from Email'
				];
			}else{
				$result = [
					'result' => 'error',
					'message' => 'Username/Password false Please try again '
					];
			}
			return Response()->json($result);
    }

    public function checkuser(Request $request){
        if( $request->input('type') == 'username'){
            $row = User::where('username',$request->input('text'))->count();
        }elseif( $request->input('type') == 'email') {
            $row = User::where('email',$request->input('text'))->count();
        }else{
            $row = 0;
        }
        return $row ;
    }
}
