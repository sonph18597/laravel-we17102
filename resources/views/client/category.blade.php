@extends('client.home-layout')
@section('home-product')
    <section class="space min pt-0">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
                        <li class="nav-item" >
                            <a class="nav-link" id="all-tab" href="{{route('home')}}" >All</a>
                        </li>
                        @foreach ($categoryList as $item)
                            <li class="nav-item" >
                                <a class="nav-link active" href="{{route('home_category',['id'=>$item->id])}}" >{{$item->category_name}}
                                </a>
                            </li>
                        @endforeach
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
