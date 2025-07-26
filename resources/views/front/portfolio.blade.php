@extends('front.layout')
@section('meta')
  <title>Portfolio</title>
          <meta property="og:title" content="Portfolio" />
<meta property="og:description" content="{{ $seo->portfolio_meta_desc }}" />
<meta property="og:image" content="{{ asset('assets/frontend/') }}/images/breadcrumb_bg.jpg" />
@endsection
@section('meta-keywords', "$seo->portfolio_meta_key")
@section('meta-description', "$seo->portfolio_meta_desc")
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
                            <h1>আমাদের প্রোজেক্ট সমূহ</h1>
                            <ul>
                                <li><a href="{{ route('front.index') }}">হোম</a></li>
                                <li><a href="#">প্রোজেক্ট সমূহ</a></li>
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
        PROJECTS PAGE START
    ===============================-->
    <section class="projects_page pt_95 xs_pt_55 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
               


@foreach ($portfolios as $item)
			   <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="project_item">
                        <img src="{{ asset('assets/front/img/portfolio/'.$item->featured_image) }}" alt="project" class="img-fluid w-100">
                        <div class="project_item_text">
                            <span>{{ $item->service->title }}</span>
                            <h3>{{ $item->title }}</h3>
                            <a href='{{ route('front.portfolio.details', $item->slug) }}'>বিস্তারিত জানুন <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
				@endforeach
				
				
				
				
				
				
				
				
				
            </div>
            
        </div>
    </section>
    <!--==============================
        PROJECTS PAGE END
    ===============================-->










@endsection
