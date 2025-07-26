@extends('front.layout')
@section('meta')
  <title>Service</title>
      <meta property="og:title" content="Service" />
<meta property="og:description" content="{{ $seo->service_meta_desc }}" />
<meta property="og:image" content="{{ asset('assets/frontend/') }}/images/breadcrumb_bg.jpg" />
  
  
@endsection
@section('meta-keywords', "$seo->service_meta_key")
@section('meta-description', "$seo->service_meta_desc")
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
                            <h1>আমাদের সার্ভিস সমূহ</h1>
                            <ul>
                                <li><a href="#">হোম</a></li>
                                <li><a href="#">আমাদের সার্ভিস সমূহ</a></li>
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
        SERVICES PAGE START
    ===============================-->
    <section class="services_page pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
               

@foreach ($services as $item)
			   <div class="col-xl-3 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="service_item">
                        <span class="icon"><i class="{{ $item->icon }}"></i></span>
                        <h2>{{ $item->title }}</h2>
                        <p>{!! $item->short_description !!}</p>
                        <a href='{{ route('front.service.details', $item->slug) }}'>বিস্তারিত</a>
                    </div>
                </div>
				                @endforeach
				
                
        </div>
    </section>
    <!--==============================
        SERVICES PAGE END
    ===============================-->

@endsection
