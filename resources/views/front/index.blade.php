@extends('front/layout')
@section('page_title', 'Home Page')
@section('container')

    <div class="container" style="width: 750px; margin: 0 auto;">
        <div class="row-full">
            <section id="aa-slider">
                <div class="aa-slider-area">
                    <div id="sequence" class="seq">
                        <div class="seq-screen">
                            <ul class="seq-canvas">
                                <!-- single slide item -->
                                @foreach ($home_banner as $list)
                                    <li>
                                        <div class="seq-model">
                                            <img data-seq src="{{ asset('/storage/media/banner/' . $list->image) }}" />
                                        </div>
                                        @if ($list->btn_txt != '')
                                            <div class="seq-title">
                                                <a data-seq target="_blank" href="{{ $list->btn_link }}"
                                                    class="aa-shop-now-btn aa-secondary-btn">{{ $list->btn_txt }}</a>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- slider navigation btn -->
                        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                            <a type="button" class="seq-prev" aria-label="Previous"><span
                                    class="fa fa-angle-left"></span></a>
                            <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                        </fieldset>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- / slider -->
    <!-- Top bar Start -->
    <!-- start prduct navigation -->
    <div class="container" style="margin-top:30px">
        <div class="nav nav-tabs aa-products-tab">
            <h4>COLLECTION</h4>
        </div>
    </div>
    <!-- Top bar End -->

    <!-- Category Start-->
    <div class="category">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="category-item ch-400">
                        <img src="{{ asset('storage/media/category/hoodie1.jpg') }}" />
                        <a class="category-name category-font" href="{{ url('category/hoodies') }}">
                            <span>Hoodies</span>
                            <p>Click to Checkout</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-250">
                        <img src="{{ asset('storage/media/category/sneaker1.jpg') }}" />
                        <a class="category-name category-font" href="{{ url('category/sneakers') }}">
                            <span>Sneakers</span>
                            <p>Click to Checkout</p>
                        </a>
                    </div>
                    <div class="category-item ch-150">
                        <img src="{{ asset('storage/media/category/mask1.jpg') }}" />
                        <a class="category-name category-font" href="{{ url('category/masks') }}">
                            <span>Masks</span>
                            <p>Click to Checkout</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-150">
                        <img src="{{ asset('storage/media/category/cap1.jpg') }}" />
                        <a class="category-name category-font" href="{{ url('category/caps') }}">
                            <span>Caps</span>
                            <p>Click to Checkout</p>
                        </a>
                    </div>
                    <div class="category-item ch-">
                        <img src="{{ asset('storage/media/category/t-shirt1.jpg') }}" />
                        <a class="category-name category-font" href="{{ url('category/t-shirts') }}">
                            <h4>T-Shirts</h4>
                            <p>Click to Checkout</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-400">
                        <img src="{{ asset('storage/media/category/sweatpant1.jpg') }}" />
                        <a class="category-name category-font" href="{{ url('category/sweatpants') }}">
                            <span>Sweatpants</span>
                            <p>Click to Checkout</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End-->
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation- -->
                                <ul class="nav nav-tabs aa-products-tab">

                                    <li class="" ><a id = "tab1" href="#cat7" data-toggle="tab">Hoodies</a></li>
                                    <li class="active"><a id = "tab2" href="#cat11" data-toggle="tab">Sneakers</a></li>
                                    <li class=""><a href="#cat16" data-toggle="tab">Masks</a></li>
                                    <li class=""><a href="#cat18" data-toggle="tab">Caps</a></li>
                                    <li class=""><a href="#cat22" data-toggle="tab">T-Shirts</a></li>
                                    <li class=""><a href="#cat26" data-toggle="tab">Sweatpants</a></li>

                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    @php
                                        $loop_count = 1;
                                    @endphp
                                    @foreach ($home_categories as $list)
                                        @php
                                            $cat_class="";
                                            if ($loop_count == 1) {
                                                $cat_class="in active";
                                                $loop_count++;
                                            }
                                        @endphp
                                        <div class="tab-pane fade {{ $cat_class }}" id="cat{{ $list->id }}">
                                            <ul class="aa-product-catg">
                                                @if (isset($home_categories_product[$list->id][0]))
                                                    @foreach ($home_categories_product[$list->id] as $productArr)
                                                        <li>
                                                            <figure>
                                                                <a class="aa-product-img"
                                                                    href="{{ url('product/' . $productArr->slug) }}"><img
                                                                        src="{{ asset('storage/media/' . $productArr->image) }}"
                                                                        alt="{{ $productArr->name }}"></a>
                                                                <a class="aa-add-card-btn" href="javascript:void(0)"
                                                                    onclick="home_add_to_cart('{{ $productArr->id }}','{{ $home_product_attr[$productArr->id][0]->size }}','{{ $home_product_attr[$productArr->id][0]->color }}')"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <figcaption>
                                                                    <h4 class="aa-product-title"><a
                                                                            href="{{ url('product/' . $productArr->slug) }}">{{ $productArr->name }}</a>
                                                                    </h4>
                                                                    <span class="aa-product-price">Rs
                                                                        {{ $home_product_attr[$productArr->id][0]->price }}</span><span
                                                                        class="aa-product-price"><del>Rs
                                                                            {{ $home_product_attr[$productArr->id][0]->mrp }}</del></span>
                                                                </figcaption>
                                                            </figure>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li>
                                                        <figure>
                                                            No data found
                                                            <figure>
                                                    <li>
                                                @endif
                                            </ul>
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
    <!-- / Products section -->
    <!-- banner section -->
    <section id="aa-banner">
        <div class="container">
            <div class="">
                <div class="col-md-12">
                    <div class="">
                        <div class="aa-banner-area">
                            <a href="#"><img src="{{ asset('/storage/media/banner/small-banner.jpg') }}"
                                    alt="fashion banner img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#featured" data-toggle="tab">Featured</a></li>
                                <li><a href="#tranding" data-toggle="tab">Tranding</a></li>
                                <li><a href="#discounted" data-toggle="tab">Discounted</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men featured category -->
                                <div class="tab-pane fade in active" id="featured">
                                    <ul class="aa-product-catg aa-featured-slider">
                                        <!-- start single product item -->


                                        @if (isset($home_featured_product[$list->id][0]))
                                            @foreach ($home_featured_product[$list->id] as $productArr)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img"
                                                            href="{{ url('product/' . $productArr->slug) }}"><img
                                                                src="{{ asset('storage/media/' . $productArr->image) }}"
                                                                alt="{{ $productArr->name }}"></a>
                                                        <a class="aa-add-card-btn" href="javascript:void(0)"
                                                            onclick="home_add_to_cart('{{ $productArr->id }}','{{ $home_product_attr[$productArr->id][0]->size }}','{{ $home_product_attr[$productArr->id][0]->color }}')"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                    href="{{ url('product/' . $productArr->slug) }}">{{ $productArr->name }}</a>
                                                            </h4>
                                                            <span class="aa-product-price">Rs
                                                                {{ $home_featured_product_attr[$productArr->id][0]->price }}</span><span
                                                                class="aa-product-price"><del>Rs
                                                                    {{ $home_featured_product_attr[$productArr->id][0]->mrp }}</del></span>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            @endforeach
                                        @else
                                            <li>
                                                <figure>
                                                    No data found
                                                    <figure>
                                            <li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- / popular product category -->

                                <!-- start tranding product category -->
                                <div class="tab-pane fade" id="tranding">
                                    <ul class="aa-product-catg aa-tranding-slider">
                                        <!-- start single product item -->
                                        @if (isset($home_tranding_product[$list->id][0]))
                                            @foreach ($home_tranding_product[$list->id] as $productArr)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img"
                                                            href="{{ url('product/' . $productArr->slug) }}"><img
                                                                src="{{ asset('storage/media/' . $productArr->image) }}"
                                                                alt="{{ $productArr->name }}"></a>
                                                        <a class="aa-add-card-btn" href="javascript:void(0)"
                                                            onclick="home_add_to_cart('{{ $productArr->id }}','{{ $home_product_attr[$productArr->id][0]->size }}','{{ $home_product_attr[$productArr->id][0]->color }}')"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                    href="{{ url('product/' . $productArr->slug) }}">{{ $productArr->name }}</a>
                                                            </h4>
                                                            <span class="aa-product-price">Rs
                                                                {{ $home_tranding_product_attr[$productArr->id][0]->price }}</span><span
                                                                class="aa-product-price"><del>Rs
                                                                    {{ $home_tranding_product_attr[$productArr->id][0]->mrp }}</del></span>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            @endforeach
                                        @else
                                            <li>
                                                <figure>
                                                    No data found
                                                    <figure>
                                            <li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- / featured product category -->

                                <!-- start discounted product category -->
                                <div class="tab-pane fade" id="discounted">
                                    <ul class="aa-product-catg aa-discounted-slider">
                                        <!-- start single product item -->

                                        @if (isset($home_discounted_product[$list->id][0]))
                                            @foreach ($home_discounted_product[$list->id] as $productArr)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img"
                                                            href="{{ url('product/' . $productArr->slug) }}"><img
                                                                src="{{ asset('storage/media/' . $productArr->image) }}"
                                                                alt="{{ $productArr->name }}"></a>
                                                        <a class="aa-add-card-btn" href="javascript:void(0)"
                                                            onclick="home_add_to_cart('{{ $productArr->id }}','{{ $home_product_attr[$productArr->id][0]->size }}','{{ $home_product_attr[$productArr->id][0]->color }}')"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                    href="{{ url('product/' . $productArr->slug) }}">{{ $productArr->name }}</a>
                                                            </h4>
                                                            <span class="aa-product-price">Rs
                                                                {{ $home_discounted_product_attr[$productArr->id][0]->price }}</span><span
                                                                class="aa-product-price"><del>Rs
                                                                    {{ $home_discounted_product_attr[$productArr->id][0]->mrp }}</del></span>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            @endforeach
                                        @else
                                            <li>
                                                <figure>
                                                    No data found
                                                </figure>
                                            <li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->
    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>FREE SHIPPING</h4>
                                <P>FREE Shipping Day is HERE 🎅 🍵 🎄 <br> Get Free Shipping on all orders!</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>30 DAYS MONEY BACK</h4>
                                <P>Money back guarantees are often applied to products that can be easily returned.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>SUPPORT 24/7</h4>
                                <P>To give real service you must add something which cannot be bought or measured.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->

    <!-- Client Brand -->
    <!-- / Client Brand -->
    <input type="hidden" id="qty" value="1" />
    <form id="frmAddToCart">
        <input type="hidden" id="size_id" name="size_id" />
        <input type="hidden" id="color_id" name="color_id" />
        <input type="hidden" id="pqty" name="pqty" />
        <input type="hidden" id="product_id" name="product_id" />
        @csrf
    </form>
@endsection
