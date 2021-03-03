<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owmen;
use App\Models\Member;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Contact;
use App\Models\Order;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class MemberController extends Controller
{
    //home
    public function home(){
        return view('index')->with('product', Product::all());
    }
    //
    public function shop(){
return view('shop')->with('mem', Product::all())->with('mem1',Owmen::all());
    }
    public function cart(Member $member, Owmen $owmen){
        $user_id = Auth::id();
        $product= $member->Join('products','members.product_id','=','products.id')->where('members.user_id',$user_id)
     ->get();



       // $product1=DB::table('owmens')->join('products','owmens.product_id','=','products.id')
      //  ->where('owmens.user_id',$user_id)->select('products.*')
       // ->get();


        return view('cart',compact('product'));
    }
    public function deletecart($id){
    Member:: where('product_id',$id)->delete();

    return redirect('cart');

    }
    public function contact(){
        return view('contact');

    }
    public function contacts(Request $req, Contact $con){
        $con->messege =$req['message'];
        $con->name =$req['name'];
        $con->email =$req['email'];
        $con->subject =$req['subject'];
        $con->save();


        return redirect('/');

    }
    public function ordernow(Request $req, Order $order ){


        $userid= auth::id();
        $allcard= Member:: where ('user_id',$userid)->get();
        foreach($allcard as $card)

        $order->product_id = $card['product_id'];
        $order->user_id=$card['user_id'];
        $order->address=$req['address'];
        $order->save();



        return $userid;
    }






    public function admin(){
        return view('backend.dashboard')->with('mem', Product::all());
    }
    public function admindelete($id){
        Product:: where('id',$id)->delete();
        return redirect('admin');
    }
    public function about(){
        return view('about');
    }


    public function adminowmen(){
        return view('admin1');
    }

        public function adminsave(Product  $member, Request $req){
            if($req->hasFile('photo')){
                $image = $req->file('photo');

              $file_name = time().'.'.$image->getClientOriginalExtension();
              $req->photo->move('image/',$file_name);


            $data = $req->all();

             $member->name =$data['name'];
             $member->detelse =$data['detelse'];


             $member->price= $data['price'];
         // $member->photo = $req ->photo;
        // $path =$req->file('photo')->store('');
         //$path2=('storage/');
         $member->photo =$file_name;


             $member->save();


        return redirect('admin');
    }
}




 public function detelse($id){
 $data = Product:: find($id);

 return view('product_detalse',compact('data'));
 }
//scearch
public function scearch(Request $req){
    // return $req->input();
    return view('scearch')->with('scearch', Product::where('name','like','%'.$req->input('qurey').'%')->get());
//$data=Product::where('name','like','%'.$req->input('qurey').'%')->get();
}

}
