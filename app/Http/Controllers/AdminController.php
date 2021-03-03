<?php

namespace App\Http\Controllers;

use App\Models\Owmen;
use App\Models\Member;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Sell;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
     $this->middleware('auth:admins');
    }




    public function admin3(){
        return view('backend.ported.navebar')
        ->with('product', Product::all())
        ->with('order', Order::all())
        ->with('delevery', Product::all())
        ->with('conteact', Contact::all())
        ->with('total1',Sell::get()->sum("total_price"))
        ->with('total',Sell::all());
    }




    public function admin1(){
        return view('backend.dashboard')
        ->with('product', Product::all())
        ->with('order', Order::all())
        ->with('delevery', Product::all())
        ->with('conteact', Contact::all())
        ->with('total1',Sell::get()->sum("total_price"))
        ->with('total',Sell::all());
    }

    public function show_product(){
        return view('backend.tables')->with('mem', Product::all());
    }


    public function adminsave(){
        return view('backend.user');
    }


    public function admin(Product  $member, Request $req){
        if($req->hasFile('photo')){
            $image = $req->file('photo');

          $file_name = time().'.'.$image->getClientOriginalExtension();
          $req->photo->move('image/',$file_name);


        $data = $req->all();

         $member->name =$data['name'];
         $member->detelse =$data['details'];


         $member->price= $data['price'];
     // $member->photo = $req ->photo;
    // $path =$req->file('photo')->store('');
     //$path2=('storage/');
     $member->photo =$file_name;


         $member->save();


    return redirect('admin/add_product');
}
}
public function admindelete($id){

$data=Product:: where('id',$id)->first();
$image_path = "image/".$data->photo;

 if (file_exists($image_path)) {

       @unlink($image_path);

   }
Product:: where('id',$id)->delete();
    return redirect('admin/product_table');
}

public function contracts(){
    return view('backend.contact')->with('con',Contact::all());
}
public function delete($id){
    Contact:: where ('id',$id)->delete();
    return redirect('admin/contacts');
}

public function order(){
    return view('backend.order')
    ->with('order', Order::all());


}


    public function detelse($id){



    return view('backend.total_product')
    ->with('data', Order:: where ('user_id',$id)->get());


}
public function jjj(){
    return view('backend.maps')
    ->with('kkk', Order::all());

}
public function delevery_delete(Request $req){
$order = new Sell();
$order->total_price =$req['total'];
$order->save();
Order::where('user_id',$req['id'])->delete();
 return redirect('admin/product_table');
return back();

}
public function sell(){
    return view('backend.sell')
    ->with('sell', Sell::all());
}
public function sell_delete($id){
    Sell:: where ('id',$id)->delete();
    return back();
}
}
