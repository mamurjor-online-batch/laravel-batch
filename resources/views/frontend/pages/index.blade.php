@extends('layouts.front')
{{-- title --}}
@section('title', $title)
{{-- meta title --}}
@section('meta_title', $metaTitle)
{{-- meta description --}}
@section('meta_description', $metaDescription)

@push('styles')

@endpush

{{-- front page content  --}}
@section('contents')
    <div class="container-indent0">
        <div class="container-fluid">
            <div class="row tt-layout-promo-box">
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
                                <img src="{{ asset('/') }}images/loader.svg" data-src="images/promo/index-promo-img-01.jpg" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">SALE</div>
                                    </div>
                                </div>
                            </a>
                            <a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
                                <img src="{{ asset('/') }}images/loader.svg" data-src="images/promo/index-promo-img-02.jpg" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">NEW</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
                                <img src="{{ asset('/') }}images/loader.svg" data-src="images/promo/index-promo-img-03.jpg" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">WOMEN</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
                                <img src="{{ asset('/') }}images/loader.svg" data-src="images/promo/index-promo-img-04.jpg" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">MEN</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
                                <img src="{{ asset('/') }}images/loader.svg" data-src="images/promo/index-promo-img-05.jpg" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">ACCESSORIES</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <a href="listing-left-column.html" class="tt-promo-box tt-one-child">
                                <img src="{{ asset('/') }}images/loader.svg" data-src="images/promo/index-promo-img-06.jpg" alt="">
                                <div class="tt-description">
                                    <div class="tt-description-wrapper">
                                        <div class="tt-background"></div>
                                        <div class="tt-title-small">SHOES</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title">
                <h1 class="tt-title">TRENDING</h1>
                <div class="tt-description">TOP VIEW IN THIS WEEK</div>
            </div>
            <div class="row tt-layout-product-item">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center product-nohover">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-03.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-03-02.jpg" alt=""></span>
                                <span class="tt-label-location">
                                    <span class="tt-label-new">New</span>
                                </span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $12
                            </div>
                            <div class="tt-option-block">
                                <ul class="tt-options-swatch js-change-img">
                                    <li class="active"><a href="#" class="options-color-img" data-src="images/product/product-03.jpg" data-src-hover="images/product/product-03-02.jpg" data-tooltip="Blue" data-tposition="top"></a></li>
                                    <li><a href="#" class="options-color-img" data-src="images/product/product-03-05.jpg" data-src-hover="images/product/product-03-05-hover.jpg" data-tooltip="Light Blue" data-tposition="top"></a></li>
                                    <li><a href="#" class="options-color-img" data-src="images/product/product-03-06.jpg" data-src-hover="images/product/product-03-06-hover.jpg" data-tooltip="Green" data-tposition="top"></a></li>
                                    <li><a href="#" class="options-color-img" data-src="images/product/product-03-07.jpg" data-src-hover="images/product/product-03-07-hover.jpg" data-tooltip="Pink" data-tposition="top"></a></li>
                                    <li><a href="#" class="options-color-img" data-src="images/product/product-03-08.jpg" data-src-hover="images/product/product-03-08-hover.jpg" data-tooltip="Orange" data-tposition="top"></a></li>
                                </ul>
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-43.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-43-03.jpg" alt=""></span>
                                <span class="tt-label-location">
                                    <span class="tt-label-our-fatured">Fatured</span>
                                </span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $17
                            </div>
                            <div class="tt-option-block">
                                <ul class="tt-options-swatch">
                                    <li class="active"><a class="options-color tt-color-bg-01" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-02" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-27-01.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-27.jpg" alt=""></span>
                                <span class="tt-label-location">
                                    <span class="tt-label-our-stock">Out Of Stock</span>
                                </span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $12
                            </div>
                            <div class="tt-option-block">
                                <ul class="tt-options-swatch">
                                    <li><a class="options-color tt-color-bg-01" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-02" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-01.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-01-02.jpg" alt=""></span>
                                <span class="tt-label-location">
                                    <span class="tt-label-sale">Sale 15%</span>
                                </span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                <span class="new-price">$14</span>
                                <span class="old-price">$24</span>
                            </div>
                            <div class="tt-option-block">
                                <ul class="tt-options-swatch">
                                    <li class="active"><a href="#" class="options-color-img" data-src="images/custom/texture-img-06.jpg" data-tooltip="Blue" data-tposition="top"></a></li>
                                    <li><a href="#" class="options-color-img" data-src="images/custom/texture-img-07.jpg" data-tooltip="Light Blue" data-tposition="top"></a></li>
                                    <li><a href="#" class="options-color-img" data-src="images/custom/texture-img-08.jpg" data-tooltip="Yellow" data-tposition="top"></a></li>
                                </ul>
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-26.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-26-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $56
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-45.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-45-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $78
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-14.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-14-01.jpg" alt=""></span>
                            </a>
                            <div class="tt-countdown_box">
                                <div class="tt-countdown_inner">
                                    <div class="tt-countdown"
                                        data-date="2019-05-01"
                                        data-year="Yrs"
                                        data-month="Mths"
                                        data-week="Wk"
                                        data-day="Day"
                                        data-hour="Hrs"
                                        data-minute="Min"
                                        data-second="Sec"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $51
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-15.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-15-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $12
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-indent">
        <div class="container-fluid-custom">
            <div class="row tt-layout-promo-box">
                <div class="col-sm-6 col-md-4">
                    <a href="listing-left-column.html" class="tt-promo-box">
                        <img src="{{ asset('/') }}images/loader.svg" data-src="images/promo/index-promo-img-07.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">FALL-WINTER CLEARANCE SALES</div>
                                <div class="tt-title-large">GET UP TO <span class="tt-base-color">50% OFF</span></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="listing-left-column.html" class="tt-promo-box">
                        <img src="{{ asset('/') }}images/loader.svg" data-src="images/promo/index-promo-img-08.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">SUMMER <span class="tt-base-color">2018</span></div>
                                <div class="tt-title-large">NEW ARRIVALS</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="listing-left-column.html" class="tt-promo-box">
                        <img src="{{ asset('/') }}images/loader.svg" data-src="images/promo/index-promo-img-09.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-background"></div>
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">NEW COLLECTION</div>
                                <div class="tt-title-large"><span class="tt-base-color">HANDBAGS</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title">
                <h2 class="tt-title">BEST SELLER</h2>
                <div class="tt-description">TOP SALE IN THIS WEEK</div>
            </div>
            <div class="row tt-layout-product-item">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-16.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-16-01.jpg" alt=""></span>
                            </a>
                            <div class="tt-countdown_box">
                                <div class="tt-countdown_inner">
                                    <div class="tt-countdown"
                                        data-date="2019-04-14"
                                        data-year="Yrs"
                                        data-month="Mths"
                                        data-week="Wk"
                                        data-day="Day"
                                        data-hour="Hrs"
                                        data-minute="Min"
                                        data-second="Sec"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $24
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-46.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-46-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $8
                            </div>
                            <div class="tt-option-block">
                                <ul class="tt-options-swatch">
                                    <li class="active"><a class="options-color" href="#">
                                        <span class="swatch-img">
                                            <img src="{{ asset('/') }}images/custom/texture-img-06.jpg" alt="">
                                        </span>
                                        <span class="swatch-label color-black"></span>
                                    </a></li>
                                    <li><a class="options-color" href="#">
                                        <span class="swatch-img">
                                            <img src="{{ asset('/') }}images/custom/texture-img-07.jpg" alt="">
                                        </span>
                                        <span class="swatch-label color-black"></span>
                                    </a></li>
                                    <li><a class="options-color" href="#">
                                        <span class="swatch-img">
                                            <img src="{{ asset('/') }}images/custom/texture-img-08.jpg" alt="">
                                        </span>
                                        <span class="swatch-label color-black"></span>
                                    </a></li>
                                </ul>
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-18.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-18-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $46
                            </div>
                            <div class="tt-option-block">
                                <ul class="tt-options-swatch">
                                    <li><a class="options-color tt-color-bg-01" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-02" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-19.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-19-02.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $35
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-41.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-41-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $124
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-02.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-02-03.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $43
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-05.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-05-02.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $124
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-33.jpg" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ asset('/') }}images/loader.svg" data-src="images/product/product-33-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $54
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-indent">
        <div class="container">
            <div class="tt-block-title">
                <h2 class="tt-title">LATES FROM BLOG</h2>
                <div class="tt-description">THE FRESHEST AND MOST EXCITING NEWS</div>
            </div>
            <div class="tt-blog-thumb-list">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="tt-blog-thumb">
                            <div class="tt-img"><a href="blog-single-post.html" target="_blank"><img src="{{ asset('/') }}images/loader.svg" data-src="images/blog/blog-post-img-06.jpg" alt=""></a></div>
                            <div class="tt-title-description">
                                <div class="tt-background"></div>
                                <div class="tt-tag">
                                    <a href="blog-single-post.html">FASHION</a>
                                </div>
                                <div class="tt-title">
                                    <a href="blog-single-post.html">DOLORE EU FUGIATNULLA PARIATUR</a>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="tt-meta">
                                    <div class="tt-autor">
                                        by <a href="#">ADRIAN</a> on January 14, 2017
                                    </div>
                                    <div class="tt-comments">
                                        <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="tt-blog-thumb">
                            <div class="tt-img"><a href="blog-single-post.html" target="_blank"><img src="{{ asset('/') }}images/loader.svg" data-src="images/blog/blog-post-img-04.jpg" alt=""></a></div>
                            <div class="tt-title-description">
                                <div class="tt-background"></div>
                                <div class="tt-tag">
                                    <a href="blog-single-post.html">FASHION</a>
                                </div>
                                <div class="tt-title">
                                    <a href="blog-single-post.html">INCIDIDUNT UT LABORE ET DOLORE</a>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="tt-meta">
                                    <div class="tt-autor">
                                        by <a href="#">ADRIAN</a> on January 14, 2017
                                    </div>
                                    <div class="tt-comments">
                                        <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="tt-blog-thumb">
                            <div class="tt-img"><a href="blog-single-post.html" target="_blank"><img src="{{ asset('/') }}images/loader.svg" data-src="images/blog/blog-post-img-02.jpg" alt=""></a></div>
                            <div class="tt-title-description">
                                <div class="tt-background"></div>
                                <div class="tt-tag">
                                    <a href="blog-single-post.html">FASHION</a>
                                </div>
                                <div class="tt-title">
                                    <a href="blog-single-post.html">INCIDIDUNT UT LABORE ET DOLORE</a>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="tt-meta">
                                    <div class="tt-autor">
                                        by <a href="#">ADRIAN</a> on January 14, 2017
                                    </div>
                                    <div class="tt-comments">
                                        <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-indent">
        <div class="container-fluid">
            <div class="tt-block-title">
                <h2 class="tt-title"><a target="_blank" href="https://www.instagram.com/wokieeshop/">@ FOLLOW</a> US ON</h2>
                <div class="tt-description">INSTAGRAM</div>
            </div>
            <div class="row">
                <div id="instafeed" class="instafeed-fluid"
                    data-accessToken="8626857013.dd09515.0fcd8351c65140d48f5a340693af1c3f"
                    data-clientId="dd095157744c4bd0a67181fc4906e5b6"
                    data-userId="8626857013"
                    data-limitImg="6">
                </div>
            </div>
        </div>
    </div>

    <div class="container-indent">
        <div class="container">
            <div class="row tt-services-listing">
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <a href="#" class="tt-services-block">
                        <div class="tt-col-icon">
                            <i class="icon-f-48"></i>
                        </div>
                        <div class="tt-col-description">
                            <h4 class="tt-title">FREE SHIPPING</h4>
                            <p>Free shipping on all US order or order above $99</p>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <a href="#" class="tt-services-block">
                        <div class="tt-col-icon">
                            <i class="icon-f-35"></i>
                        </div>
                        <div class="tt-col-description">
                            <h4 class="tt-title">SUPPORT 24/7</h4>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <a href="#" class="tt-services-block">
                        <div class="tt-col-icon">
                            <i class="icon-e-09"></i>
                        </div>
                        <div class="tt-col-description">
                            <h4 class="tt-title">30 DAYS RETURN</h4>
                            <p>Simply return it within 24 days for an exchange.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush