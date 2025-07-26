@extends('front.layout')
@section('meta')
  <title>{{ $product->title }}</title>
          <meta property="og:title" content="{{ $product->title }}" />
<meta property="og:description" content="{{ $seo->meta_description }}" />
<meta property="og:image" content="{{asset('assets/front/img/'.$product->image)}}" />
@endsection
@section('meta-keywords', "$seo->meta_keywords")
@section('meta-description', "$seo->meta_description")

@php
    $reviews = App\Models\ProductReview::where('product_id', $product->id)->get();
    $avarage_rating = App\Models\ProductReview::where('product_id',$product->id)->avg('review');
    $avarage_rating =  round($avarage_rating,2);

    if(Auth::user()){
        $userID = Auth::user()->id;
    }else{
        $userID = null;
    }

    $userOrders = App\Models\Order::where('user_id', $userID)->get();

    $isBuyProduct = '';

    foreach ($userOrders as $key => $userOrder) {
      $cart = json_decode($userOrder->cart,true);
      foreach ($cart as $key => $item){
        if($item['id'] == $product->id){
          $isBuyProduct = true;
        }
      }
    }


@endphp

@section('content')
<style>
.btn{list-style:none;text-align:center;margin:10px!important;padding:10px!important;font-size:14px;clear:both;display:inline-block;text-decoration:none!important;color:#FFF!important}
.btn ul {margin:0;padding:0}
.btn li{display:inline;margin:5px;padding:0;list-style:none;}
.demo,.download{padding:12px 15px!important;color:#fff!important;font-weight:700;font-size:14px;font-family:Open Sans,sans-serif;text-align:center;text-transform:uppercase;border-radius:3px;opacity:.95;border:0;letter-spacing:2px;transition:all .2s ease-out}
.demo {background-color:#3498DB;}
.download {background-color:#1ABC84;}
.demo:hover {background-color:#60B8F4;color:#fff;border-bottom:2px solid #3498DB; opacity:1;}
.download:hover {background-color:#49DDAA;color:#fff;border-bottom:2px solid #1ABC84;opacity:1;}
.demo:before {content:&#39;\f135&#39;;display:inline-block;font-weight:normal;vertical-align:top;margin-right:10px;width:16px;height:16px;line-height:24px;font-family:fontawesome;transition:all 0.5s ease-out;}
.download:before {content:&#39;\f019&#39;;display:inline-block;font-weight:normal;vertical-align:top;margin-right:10px;width:16px;height:16px;line-height:24px;font-family:fontawesome;transition:all 0.5s ease-out;}
</style>

    <!--============================
        BREADCRUMB START
    =============================-->
    <section class="breadcrumb_area" style="background: url({{ asset('assets/frontend/') }}/images/breadcrumb_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1>{{ $product->title }}</h1>
                            <ul>
                                <li><a href="#">হোম</a></li>
                                <li><a href="#">আমাদের প্রোডাক্ট</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BREADCRUMB END
    =============================-->


    <!--==============================
        PROJECTS DETAILS START
    ===============================-->
    <section class="projects_details pt_120 xs_pt_80 pb_110 xs_pb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft" data-wow-duration="1s">
                    <div class="projects_details_contect">
                        <div class="projects_details_img">
                            <img src="{{asset('assets/front/img/'.$product->image)}}" alt="project" class="img-fluid w-100">
                        </div>
                        <div class="projects_details_text">
                            <h2>{{ $product->title }}</h2>
                            <p>{!! $product->description !!}</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="sidebar">
                        <div class="sidebar_project_info">
                            <h2>সোর্স কোডের এর তথ্য </h2>
                            <ul class="list">
                                <li><span>মূল্য :</span> {{ Helper::showCurrencyPrice($product->current_price) }}</li>
                                <li><span>লারাভেল ভার্শন :</span> {{ $product->laravel_version }}</li>
                                <li><span>ডিজাইন :</span> প্রিমিয়াম ডিজাইন</li>
                                <li><span>আপডেট :</span> ১ বছরের ফি আপডেট</li>
                                <li><span>সাপোর্ট :</span>  এনিডেস্ক এর মাধ্যমে সাপোর্ট</li>
                                <li><span>রিপ্লাই :</span> ১ ঘন্টার মধ্যে উত্তর প্রদান</li>
                                <li><span>সাপোর্ট :</span> ১ বছরের ফ্রি সাপোর্ট</li>
                            </ul>
<div style="text-align: center;">
<ul class="btn">
<li><a class="demo" href="{{ $product->demo }}" target="_blank">ডেমো</a></li>
<li><a class="download" href="{{ $product->purchase_link }}" target="_blank">এখুনি কিনুন</a></li>
</ul>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        PROJECTS DETAILS END
    ===============================-->


   











@endsection


@section('script')

@endsection
