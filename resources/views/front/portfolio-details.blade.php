@extends('front.layout')
@section('meta')
  <title>{{ $portfolio->title }}</title>
          <meta property="og:title" content="{{ $portfolio->title }}" />
<meta property="og:description" content="{{ $portfolio->meta_description }}" />
<meta property="og:image" content="{{ asset('assets/front/img/portfolio/'.$portfolio->featured_image) }}" />
@endsection
@section('meta-keywords', "$portfolio->meta_keywords")
@section('meta-description', "$portfolio->meta_description")
@section('content')

    <!--============================
        BREADCRUMB START
    =============================-->
    <section class="breadcrumb_area" style="background: url({{ asset('assets/frontend/') }}/images/breadcrumb_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1>{{ $portfolio->title }}</h1>
                            <ul>
                                <li><a href="{{ route('front.index') }}">হোম</a></li>
                                <li><a href="{{ route('front.portfolio') }}">প্রোজেক্ট</a></li>
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
                        
                    @if($portfolio_images->count() > 0)
                        <div class="projects_details_img">
                            @foreach ($portfolio_images as $item)
                            <img src="{{ asset('assets/front/img/portfolio/'.$item->image ) }}" alt="project" class="img-fluid w-100">
                             @endforeach
                        </div>
                        
                    
                    
                    @else
                     <div class="projects_details_img">
                            <img src="{{ asset('assets/front/img/portfolio/'.$portfolio->featured_image) }}" alt="project" class="img-fluid w-100">
                        </div>
                          @endif
                        
                        
                        
                        <div class="projects_details_text">
                           
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="sidebar">
                        <div class="sidebar_project_info">
                            <h2>প্রোজেক্ট এর তথ্য</h2>
                            <ul class="list">
                                <li><span>শুরুর তারিখ :</span> {{ $portfolio->start_date }}</li>
                                <li><span>সাবমিট এর তারিখ :</span> {{ $portfolio->submission_date }}</li>
                                <li><span>ক্লাইন্টের নাম :</span> {{ $portfolio->client_name }}</li>
                                <li><span>ক্যাটাগরি :</span> {{ $portfolio->service->title }}</li>
								 @if($portfolio->link)
                                <li><span>লাইভ প্রিভিউ :</span> {{ $portfolio->link }}</li>
							 @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        PROJECTS DETAILS END
    ===============================-->


    <!--==============================
        RELATED PROJECTS START
    ===============================-->
    <section class="projects related_project pb_110 xs_pb_70">
        <div class="container">
            <h2>নতুন প্রোজেক্ট</h2>
            <div class="row team_slider">
               
 @foreach ($portfolios as $item)
			   <div class="col-lg-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="project_item">
                        <img src="{{ asset('assets/front/img/portfolio/'.$item->featured_image) }}" alt="project" class="img-fluid w-100">
                        <div class="project_item_text">
                            <span>{{ $item->service->title }}</span>
                            <h3>{{ $item->title }}</h3>
                            <a href="{{ route('front.portfolio.details', $item->slug) }}">বিস্তারিত জানুন<i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
 @endforeach





            </div>
        </div>
    </section>
    <!--==============================
        RELATED PROJECTS END
    ===============================-->

@endsection
