@extends('client.home-layout')
@section('home-product')
<section class="space min pt-0">
    <div class="container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="all-tab" href="#all" data-toggle="tab" role="tab" aria-controls="all" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="#mens" id="mens-tab" data-toggle="tab" role="tab" aria-controls="mens" aria-selected="false">Men's</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#women" id="women-tab" data-toggle="tab" role="tab" aria-controls="women" aria-selected="false">Women</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#kids" id="kids-tab" data-toggle="tab" role="tab" aria-controls="kids" aria-selected="false">Kids</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                    <!-- All Content -->


                    <div class="tab-pane fade show active" id="mens" role="tabpanel" aria-labelledby="mens-tab">
                        <div class="tab_product">
                            <div class="row rows-products">
                            @foreach($productList as $item)
                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="{{route('route_FrontEnd_Product_detail',['id'=>$item->id])}}"><img class="card-img-top" src="{{$item->image?''.Storage::url($item->image):'http://placehold.it/100x100'}}" alt="..." height="300px" ></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">{{$item->view}}</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="{{route('route_FrontEnd_Product_detail',['id'=>$item->id])}}">{{$item->product_name}}</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">{{$item->price}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div>





                </div>

            </div>
        </div>

    </div>
</section>
@endsection
