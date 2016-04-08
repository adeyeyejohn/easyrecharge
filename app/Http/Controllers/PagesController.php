<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Auth;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller {


    public function __construct(AuthController $authController){
        $this->authController = $authController;
        //
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['title'] = "Easy Recharge";
        return view('homepage',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */



    public function regPage()
    {
        $data['title'] = "New User :: Easy Recharge";
        return view('newuser',$data);
    }

    public function profile()
    {
        if(empty(Auth::user())) {
            return redirect::to('/');
        }
        $data['title'] = "My Account :: Easy Recharge";
        $data['userDetails'] = Auth::user();
        return view('profile',$data);
    }

    public function logOut()
    {
        $logout  = Auth::logout();
        return redirect::to('/');
    }

    public function updateUser()
    {
        if(empty(Auth::user())) {
            return redirect::to('/');
        }
        $user = Auth::user();
        //dd($request);
        $data 		= 	[
            'email' => 	Input::get('email'),
            'phone' => Input::get('phone'),
            'name' => Input::get('name')
        ];
        //dd($data);
        DB::table('users')
            ->where('id', 1)
            ->update($data);
        return redirect::to('/profile')->withErrors('<div class="alert alert-success">Details Updated Succesfully</div>');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function dashboard()
    {
        if(empty(Auth::user())) {
            return redirect::to('/');
        }
        return redirect::to('/');
    }


   

}
