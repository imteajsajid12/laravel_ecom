@extends('layouts.app')
@section('content')



<!--MESSEGE-->


@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<!--END MESSEGE-->
@php

@endphp
@php
$total=0;
@endphp

<form action="/order" method="post">
    @csrf

      <!-- Hero Area Start-->
      <div class="slider-area ">
          <div class="single-slider slider-height2 d-flex align-items-center">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="hero-cap text-center">
                              <h2>Cart List</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
   <!--================Cart Area =================-->
   <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                @php
                    $totalp =$item->Price * $item->quantity;
                @endphp
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                        <img src="{{URL::to('image/'.$item->photo)  }}" alt="" />
                    </div>
                    <div class="media-body">
                        <p>{{ $item->name }}</p>
                        <input type="text" hidden  name="mail" value="{{ $item->User->email }}">


                    </div>
                  </div>
                </td>
                <td>
                    <h5>${{ $item->Price }}</h5>
                    <input type="text" hidden name="total" value="{{ $item->Price }} tk">
                </td>
                <td>
                  <div class="product_count">

                    <input class="input-number" name="qty" type="number" value="{{ $item->quantity }}" min="0" max="10">



                  </div>
                </td>
                <td>
                    <h5>${{ $totalp }}</h5>
                </td>
                <td><a href="{{URL::to('cartdelete/'.$item->id)  }}" class="btn btn-danger btn-sm" onclick= "return confirm('Are You Sure?')">x</a></td>
              </tr>
              @php
              $total +=$totalp;
              @endphp
             @endforeach
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                    <h5 >${{ $total }}<h5>


                </td>
              </tr>

              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td>
                  <h5>Delivery</h5>
                </td>
                <br>
                <td>
                  <div class="shipping_box">
                      <br>
                    <ul class="list">

                      <li class="active">
                        Hand Chash Delivery: $2.00
                        <input type="radio" value="Hand_cash" name="payment" aria-label="Radio button for following text input" required >
                       
                      </li>
                    </ul>
                    <h6>
                  Address
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </h6>
                    <select class="shipping_select"  name="city">
                      <option >Dhaka</option>

                    </select>
                   <strong>Address</strong>
              <textarea class="form-control" name="Address" required placeholder="Home - Address"></textarea>

                     <strong>Postcode/Zipcode</strong>
                    <input class="post_code" type="text" name="postcode"placeholder="Postcode/Zipcode" />

                    <button class="btn_1 checkout_btn_1" type="submit"  onclick="return confirm('Are You Sure?')" >Shop Now</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="checkout_btn_inner float-left">
            <a class="btn_1" href="/shop">Continue Shopping</a>

          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->


</form>
  @endsection

