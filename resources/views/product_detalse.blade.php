@extends('layouts.app')
@section('content')

<form action="{{ route('addcart') }}" method="POST">
    @csrf
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

        <div class="product_image_area">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="product_img_slide owl-carousel">
                    <div class="product_img">

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
                        {{ $data->detelse}}
                    </p>
                    <div class="card_area">
                        <div class="product_count_area">
                            <p>Quantity</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="product_count_item input-number" name="qty" type="text" value="1" min="0" max="10">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <input type="text" name="product_id" hidden value="{{ $data->id }}">
                            <p>${{ $data->Price }}</p>
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
</div>



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


        @endsection
