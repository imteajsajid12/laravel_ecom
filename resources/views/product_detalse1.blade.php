@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Watch Shop</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End-->
    <!--================Single Product Area =================-->
    <form action="{{ route('addcart') }}" method="POST">
        @csrf
        <div class="product_image_area">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="product_img_slide owl-carousel">
                    <div class="single_product_img">

                    <img src="{{URL::to('image/'.$data->photo)  }}" alt="{{URL::to('image/'.$data->photo)  }}"class="center" style="display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 50%;">

                    </div>

                </div>
                </div>
                <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h3>{{ $data->name }}<br>
                        </h3>
                    <p>
                        {{ $data->name }}
                    </p>
                    <div class="card_area">
                        <div class="product_count_area">
                            <p>Quantity</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <input type="text" name="product_id" hidden value="{{ $data->id }}">
                            <p>${{ $data->price }}</p>
                        </div>
                    <div class="add_to_cart">
                        <button type="submit" class="btn_3">add to cart</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

    </form>




    <script>
        $(document).on("change keyup blur", "#chDiscount", function() {
            var main = $('#cBalance').val();
            var disc = $('#chDiscount').val();
           // var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
            var mult = main * disc; // gives the value for subtract from main value
            var discont = mult;
            $('#result').val(discont);
        });
    </script>






    <!--================End Single Product Area =================-->
    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Get promotions & updates!</h2>
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Enter your mail">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->

        @endsection
