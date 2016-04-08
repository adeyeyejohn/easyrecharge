<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Http\Controllers\Auth\AuthController;
use Request;
use App\Transaction;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function initOrder()
    {
        $request = Request::all();
        if($request['type'] == 'units'){
            $data['network']	= $request['network'];
            $data['type']		= $request['type'];
            $data['amount']		= $request['amount'];
            $data['phone']		= $request['phone'];
            $data['title']		= 'Order';
            return view('orders',$data);
        }
    }

    public function confirmPay()
    {
        $request = Request::all();
        if (Auth::user()) {
        $authVals	    	= Auth::user();
        $data['trans']		= rand(0,999999999);
        $data['network']	= $request['network'];
        $data['type']		= $request['type'];
        $data['amount']		= $request['amount'];
        $data['phone']		= $request['phone'];
        if(isset($request['onlinePay'])){
            $vary = [
                'transaction_id' => $data['trans'],
                'user_id'		 => $authVals->id,
                'amount'		 => $request['amount'],
                'method'		 => 'online',
                'phone'		 	 => $request['phone'],
                'network'		 => $request['network'],
                'status'		 => 'pending'
            ];
            $insert = DB::table('transactions')->insert($vary);

            return view('onlinepay',$data);
        
        }elseif(isset($request['walletPay'])){
              dd($data);
        }else{
            return redirect::to('/');
            }
        }
        dd(Request::all());
    }

    public function showOrder($id)
    {
        $trans = Transaction::find($id);
        dd($trans);
    }

}
