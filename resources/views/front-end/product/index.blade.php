@extends('front-end.master')

@section('title','Product Detail Page')

@section('body')

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('/')}}front-end-assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vegetable’s Package</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <a href="./index.html">Vegetables</a>
                            <span>Vegetable’s Package</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Product Details Section Begin -->
    <section class="product-details spad">

        <div class="container">

            <form action="{{route('cart.add')}}" method="post">
                @csrf
                <input type="hidden" value="{{$product->id}}" name="id">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
{{--                            <img class="product__details__pic__item--large"--}}
                            <div class="categories__item product__item__pic flex flex-column align-center" style="background-color: #F3F6FA;">
                                <img class="w-100  pt-4 " src="{{ asset($product->image) }}" alt="Delicious Fried Chicken Plate">
{{--                                <ul class="product__item__pic__hover">--}}
{{--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
                            </div>
{{--                                 src="{{asset('/')}}front-end-assets/img/product/details/product-details-1.jpg" alt="">--}}
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            @foreach($product->otherImage as $otherImage)
                                <div class="flex flex-column align-center justify-center" style="background-color: #F3F6FA;height: 120px;width:120px">
                                <img class="mx-auto pt-4" style=" height: 100px;width: 100px;" src="{{asset($otherImage->image)}}" alt="">
                                </div>
                            @endforeach
{{--                            <img data-imgbigurl="img/product/details/product-details-2.jpg"--}}
{{--                                 src="{{asset('/')}}front-end-assets/img/product/details/thumb-1.jpg" alt="">--}}
{{--                            <img data-imgbigurl="img/product/details/product-details-3.jpg"--}}
{{--                                 src="{{asset('/')}}front-end-assets/img/product/details/thumb-2.jpg" alt="">--}}
{{--                            <img data-imgbigurl="img/product/details/product-details-5.jpg"--}}
{{--                                 src="{{asset('/')}}front-end-assets/img/product/details/thumb-3.jpg" alt="">--}}
{{--                            <img data-imgbigurl="img/product/details/product-details-4.jpg"--}}
{{--                                 src="{{asset('/')}}front-end-assets/img/product/details/thumb-4.jpg" alt="">--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$product->name}}</h3>
{{--                        <h3>{{$product->id}}</h3>--}}
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">{{$product->selling_price}}</div>
                        <p>{{$product->short_description}}</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="number" name="qty"  value="1" min="1">
{{--                                    <input type="text" value="1">--}}
                                </div>
                            </div>
                        </div>
                        <button type="submit"  class="primary-btn">ADD TO CARD</button>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                   aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                   aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                   aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>{!! $product->long_description !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
{{--    </section>--}}
{{--    <section>--}}
        <div class="container">
            <div class="card">

                <div class="card-header">{{$messages->first()->user->name}}</div>

                <div class="card-body" style="background-image: url('{{asset('/')}}front-end-assets/assets/images/background/3d-rendering-geometric-shapes.jpg'); background-size: cover; ">
                    @php
                            $customerId = session('customer_id');
                             $url = url()->current();
    $path = parse_url($url, PHP_URL_PATH);
    $segments = explode('/', $path);
    $id = end($segments); // Get the last segment (which is the ID)
    // Now you can use the $id variable in your logic
                            $productId = $id;

                           // Retrieve the customer by ID
    $customer = \App\Models\Customer::find($customerId);
    if($customer){
        $messages = App\Models\Message::where('customer_id', $customerId)->where('product_id', $id)->get();
    } else {
        $messages = collect(); // Create an empty collection if the customer does not exist
    }
                    @endphp

                    @if($messages->count() > 0)

                        <ul>
                            @foreach($messages as $message)
                                @if($message->flag === 1)
                                    <ul>
                                                <li class="py-3 px-2 mb-2 rounded bg-white text-success float-left font-weight-bold"  style="width: 200px; word-wrap: break-word;">{{ $message->message }}</li><br><br><br><br>
                                    </ul>

                                @else

                                            <ul>

                                                    <li class="bg-white py-3 px-2 mb-2 rounded  text-success float-right font-weight-bold"  style="width: 200px; word-wrap: break-word;">{{ $message->message }}</li><br><br><br>

                                            </ul>

                                @endif
                            @endforeach
                        </ul>
                    @else
                        <p>No messages available.</p>
                    @endif
                </div>
                {{--            <div class="card-body">--}}
                {{--                <chat-messages :messages="messages"></chat-messages>--}}
                {{--            </div>--}}
                <div class="card-footer">
                    <form>
                    @csrf <!-- Include CSRF token -->

                        <div class="input-group">
                            {{-- Input field --}}

                            <input  id="btn-input" type="text" name="message" class="form-control input-sm rounded-lg" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage" />

                            {{-- Button --}}
                            <span class="input-group-btn">
        <button class="btn btn-primary btn-sm site-btn ml-2" id="btn-chat" >
            Send
        </button>
    </span>
                        </div>
                    </form>
                    {{--                <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>--}}
                </div>
            </div>
        </div>

    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('/')}}front-end-assets/img/product/product-1.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('/')}}front-end-assets/img/product/product-2.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('/')}}front-end-assets/img/product/product-3.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('/')}}front-end-assets/img/product/product-7.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

@endsection

<script>
    const productId = {{$product->id}};
    console.log(productId);
    // alert((message) ? "This won't" : "work");

</script>

