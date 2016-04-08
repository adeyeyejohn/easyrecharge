<?php namespace App\Http\Controllers\Auth;

use App\User;
use DB;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Validator;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function registerUser(Request $request)
	{
		$email = $request['email'];
		$phone = $request['phone'];
		$name =  $request['name'];
		//dd($request->all());
		$password = Hash::make($request['password']);
		$data = [
			'status' => 'active',
			'name'   => $name,
			'email'  => $email,
			'phone'  => $phone,
			'password' => $password
		];
		//$emailCheck    = User::where('email',$email);
		$emailCheck =  $get = DB::table('users')->where('email', $email)->get();
		if($emailCheck == TRUE){
			return redirect::to('/newuser')->withErrors('<div class="alert alert-danger">Email Already Exist</div>');
		}else{
			//$insert = DB::table('users')->insert($data);
			$userCreate = User::create($data);
			if($userCreate == TRUE) {
				$errors = ['code' => '1','message'=>'User Created'];
				return redirect::to('/newuser')->withErrors('<div class="alert alert-success">User Created Succesfully</div>');
			}
		}


	}

	public function loginUser(Request $request)
	{
		$email = $request['email'];
		$password =  $request['password'];

		$data = [
			'email' => $email,
			'password' => $password
		];

		if(Auth::attempt($data)){
			$user = Auth::user();
			session::put('user_id', $user->id);
			return redirect::to('/dashboard');

		} else {
			return "Login failed";
		}


	}

	public function checkLoggedUser()
	{
		if(empty(Auth::user())) {
			return redirect::to('/');
		}else{

		}
	}



	public function deloutUser()
	{
		/*$logout = Auth::logout();
		if($logout){
			return redirect::to('/');
		}*/
		return"yahoo";
	}

}
