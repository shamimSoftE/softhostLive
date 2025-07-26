@extends('front.layout')
@section('meta')
  <title>{{ $sinfo->package_title }}</title>
          <meta property="og:title" content="{{ $sinfo->package_title }}" />
<meta property="og:description" content="{{ $seo->package_meta_desc }}" />
<meta property="og:image" content="{{ asset('assets/frontend/') }}/images/breadcrumb_bg.jpg" />
@endsection
@section('meta-keywords', "$seo->package_meta_key")
@section('meta-description', "$seo->package_meta_desc")
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
                            <h1>আমাদের প্যাকেজ সমূহ</h1>
                            <ul>
                                <li><a href="{{ route('front.index') }}">হোম </a></li>
                                <li><a href="#">প্যাকেজ সমূহ</a></li>
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
        PRICING START
    ===============================-->
    <section class="pricing pt_95 xs_pt_55 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                
				@foreach($plans as $key => $plan)
				<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_pricing">
                        <h4>{{ $plan->title }}</h4>
                        <h2>{{Helper::showCurrencyPrice($plan->price)}}
@if($plan->time)
						<span>/{{ $plan->time }}</span>
						@else
						<span></span>
					
					@endif
						
						
						
						
						</h2>
                        <ul>
						
						
												@php
							$feature = explode( ',', $plan->feature );
							for ($i=0; $i < count($feature); $i++) { 
                          echo '<li>'.$feature[$i].'</li>';
														}
						@endphp
							
							
                        </ul>
						@if ($plan->button_text != null && $plan->button_link != null)
                        <a href="{{ $plan->button_link }}">{{ $plan->button_text }}</a>
					@endif
                    </div>
                </div>
				@endforeach
				
				
               
            </div>
        </div>
    </section>
    <!--==============================
        PRICING END
    ===============================-->


@endsection
