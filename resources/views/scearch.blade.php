@extends('layouts.app')
@section('content')



<main>

    <!-- Latest Products Start -->
    <section class="popular-items latest-padding">
        <div class="container">
            <div class="row product-btn justify-content-between mb-40">
                <div class="properties__button">
                    <!--Nav Button  -->
                    <h3>Result:-</h3>
                    <hr>
                </div>
                <!-- Grid and List view -->
                <div class="grid-list-view">

                </div>

            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">



                    <div class="row">
                        @foreach ($scearch as $pro)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-popular-items mb-50 text-center">
                                <div class="popular-img">
                                    <img src="{!! 'image/'.$pro->photo !!}" alt="{{$pro->photo }}" style="
                                    height: 380px;">
                                    <div class="img-cap">
                                  <a href="{{URL::to('detelase/'.$pro->id)}}"><span>Add to cart</span></a>
                                   </div>
                                    <div class="favorit-items">

                                    </div>
                                </div>
                                <div class="popular-caption">
                                    <h3><a href="">{!! $pro->name !!}</a></h3>


                                    <span> {!! $pro->Price!!} Tk</span>

                                </div>

                            </div>


                        </div>
                        @endforeach




                    </div>

                </div>

            </div>
            <!-- End Nav Card -->
        </div>
    </section>
    <!-- Latest Products End -->

</main>

    @endsection
