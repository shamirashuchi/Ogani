@extends('front-end.master')

@section('title','Checkout Page')

@section('body')


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('/')}}front-end-assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <form action="{{ route('new.order') }}" method="post">
        @csrf
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md text-white" style="background-image: url('{{asset('/')}}front-end-assets/assets/images/background/th.jpeg'); background-size: cover; background-position: center;">
                            <!-- Your content here -->


                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Full Name<span>*</span></p>
                                        @if(isset($customer->name))
                                            <input  class="w-full" type="text" value="{{$customer->name}}" readonly name="name" placeholder="Full Name"/>
                                        @else
                                            <input type="text" name="name" required placeholder="Full Name"/>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text">
                            </div>

                            <div class="checkout__input">
                                <p>Delivery Address<span>*</span></p>
                                <div class="row">
                                    <div class="col-lg-12">
                                @if(isset($customer->delivery_address))
                                    <textarea class="pt-2 w-100"  name="delivery_address" placeholder="Delivery Address">{{$customer->address}}</textarea>
                                @else
                                    <textarea class="pt-2 w-100" name="delivery_address" placeholder="Delivery Address"> </textarea>
                                @endif
                            </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        @if(isset($customer->mobile))
                                            <input type="number" value="{{$customer->mobile}}" readonly name="mobile" placeholder="Phone Number"/>
                                        @else
                                            <input type="number" name="mobile" required placeholder="Phone Number"/>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        @if(isset($customer->email))
                                            <input type="email" value="{{$customer->email}}" readonly name="email" placeholder="Email Address"/>
                                        @else
                                            <input type="email" name="email" required placeholder="Email Address"/>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox text-white">
                                <label for="acc" class="text-white">
                                    Create an account?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Create an account by entering the information below. If you are a returning customer
                                please login at the top of the page</p>
                            <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc" class="text-white">
                                    Ship to a different address?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text"
                                       placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                            <div class="col-md-12">
                                <label class="me-2 single-form form-default"> Payment Method</label>
                                <div class="pt-2">
                                    <lebel class="me-3"><input type="radio" checked name="payment_method" value="Cash"/><span class="ms-2">Cash on Delivery</span></lebel>
                                    <lebel><input type="radio" name="payment_method" value="Online"/> <span class="ms-2">Online</span></lebel>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                @foreach($cart_products as $cartProduct)
                                <div class="total-price">
                                    <p class="value">
                                        {{$cartProduct->name}} -
                                        ({{$cartProduct->price}} * {{$cartProduct->qty}}) :
                                    </p>
                                    <p class="price">{{ round($cartProduct->subtotal) }}</p>
                                </div>
                                @endforeach
{{--                                <ul>--}}
{{--                                    <li>Vegetable’s Package <span>$75.99</span></li>--}}
{{--                                    <li>Fresh Vegetable <span>$151.99</span></li>--}}
{{--                                    <li>Organic Bananas <span>$53.99</span></li>--}}
{{--                                </ul>--}}
                                <div class="checkout__order__subtotal">Subtotal <span>{{ $sum =Session::get('sum') }}</span></div>
                                <input type="hidden" value="{{ $sum }}" name="sub_total">
                                <div class="checkout__order__total">Tax total:<span>{{ $tax = round($sum*0.15) }}</span></div>
                                <input type="hidden" value="{{ $tax }}" name="tax_total">
                                <div class="checkout__order__total">shipping:<span>{{$shipping = 100}}</span></div>
                                <input type="hidden" value="{{ $shipping }}" name="shipping_total">
                                <div class="checkout__order__total">Payable amount:<span>{{ $orderTotal=$sum+$tax+$shipping }}</span></div>
                                <input type="hidden" value="{{ $orderTotal }}" name="order_total">
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    </form>
@endsection
