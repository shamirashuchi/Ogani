@extends('front-end.master')

@section('title','Shopping Cart')

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
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <p class="text-center text-success">{{session('message')}}</p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Action</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($sum=0)
                            @foreach($cart_products as $cart_product)
                            <tr>
                                <td class="shoping__cart__price">
                                    <img src="{{asset($cart_product->options->image)}}" class="w-25" alt="">
                                </td>
                                <td>
                                    <h5>{{$cart_product->name}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{$cart_product->price}}
                                </td>
                                <form action="{{route('cart.update', ['row_id' => $cart_product->rowId])}}" method="POST">
                                    @csrf
                                    <td class="shoping__cart__item">
                                    <div class="quantity row">
                                        <div class="mx-auto pro-qty col-lg-10">
                                                <input  type="number" name="qty" value="{{$cart_product->qty}}">
                                        </div>

                                    </div>
                                </td>
                                    <td>
                                        <button type="submit" class="primary-btn cart-btn cart-btn-right text-white border-0" style="background-color: #7fad39">Update</button>
                                    </td>
                                </form>
                                <td class="shoping__cart__total">
                                    {{round($cart_product->subtotal)}}
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a class="remove-item" href="{{route('cart.delete', ['row_id' => $cart_product->rowId])}}" onclick="return confirm('Are you sure to delete this item..')"><span class="icon_close"></span></a>
                                </td>
                            </tr>
                            @php($sum = $sum + $cart_product->subtotal)
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{route('home')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>

{{--                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>--}}
{{--                            Update Cart</a>--}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                                <li>Cart Subtotal<span>{{$sum}}</span></li>
                                <li>Tax Total<span>{{$tax = round($sum*0.15)}}</span></li>
                                <li>Shipping Cost<span>{{$shipping = 100}}</span></li>
                                <li class="last">You Payable<span>{{ $sum + $tax + $shipping}}</span></li>
                            </ul>
                        <a href="{{route('checkout')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    Session::put('sum',$sum);
    ?>
    <!-- Shoping Cart Section End -->

@endsection
