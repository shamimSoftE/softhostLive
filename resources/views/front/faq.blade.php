@extends('front.layout')
@section('meta')
  <title>FAQ</title>
          <meta property="og:title" content="FAQ" />
<meta property="og:description" content="{{ $seo->faq_meta_desc }}" />
<meta property="og:image" content="{{ asset('assets/frontend/') }}/images/breadcrumb_bg.jpg" />
@endsection
@section('meta-keywords', "$seo->faq_meta_key")
@section('meta-description', "$seo->faq_meta_desc")
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
                            <h1>এফএকিউ</h1>
                            <ul>
                                <li><a href="{{ route('front.index') }}">হোম</a></li>
                                <li><a href="#">এফএকিউ</a></li>
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
        FAQ PAGE START
    ===============================-->
    <section class="faq_page pt_90 xs_pt_50 pb_120 xs_pb_80">
        <div class="container">
            <div class="faq_area">
                <div class="details_aacordian">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="row">
                            <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1s">
                                
								
								@foreach ($faqs as $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            {{ $item->title }}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{!! $item->content !!}</p>
                                        </div>
                                    </div>
                                </div>
								@endforeach
								
								
								
                                
                            </div>
                            <div class="col-xl-6 wow fadeInRight" data-wow-duration="1s">


@foreach ($faqs1 as $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo3"
                                            aria-expanded="false" aria-controls="collapseTwo3">
                                            {{ $item->title }}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo3" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{!! $item->content !!}</p>
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
    </section>
   
    <!--==============================
        FAQ PAGE END
    ===============================-->




@endsection
