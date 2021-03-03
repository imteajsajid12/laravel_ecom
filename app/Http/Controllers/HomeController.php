<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index')->with('product', Product::all());
    }
    public function cart1(Request $req ){
        $cart=Member::where('product_id',$req->product_id)->first();

        if(!is_null($cart)){
           $cart->increment ('quantity');
        }
        else{
            $cart = new Member();
            $cart->user_id =Auth::id();
            $cart->product_id = $req['product_id'];
            $cart->quantity = $req['qty'];
            $cart->save();
            return redirect('cart');
         }
         return redirect('cart');

        }




        public function cartdelete($id){
            Member:: where ('product_id',$id)->delete();
            return redirect('cart')
            ->with('success','Delete successfully');
        }










public function ordernow(Request $req ){
//us




    $userid= auth::id();
    $allcard= Member:: where ('user_id',$userid)->get();
    foreach($allcard as $card)
    if(!$card){
        return redirect('cart');

    }
else{

 //mail
 $details = [
    'title' => 'Time Zone',
    'body' =>'Dear admin one user send a order'
];

Mail::to('taijulhira2686@gmail.com') ->send(new \App\Mail\MyTestMail($details));
//end
//user
$details = [
'title' => 'Time Zone',
'body' =>'Dear Coustomer Your Product Delevery Soon'
];

Mail::to($req['mail']) ->send(new \App\Mail\MyTestMail($details));



    $order = new Order;
    $order->product_id = $card['product_id'];
    $order->user_id=$card['user_id'];
    $order->quantity=$card['quantity'];
    $order->address=$req['Address'];
    $order->city=$req['city'];
    $order->postcode=$req['postcode'];
    $order->delevery=$req['payment'];
    $order->total=$req['total'];


    $order->save();




 //


}

return back()
->with( Member:: where ('user_id',$userid)->delete())
->with('success','send a mail,your product delevery on 72h thank you.');
 }


}





