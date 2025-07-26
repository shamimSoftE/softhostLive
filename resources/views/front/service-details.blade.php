@extends('front.layout')
@section('content')
@section('meta')
  <title>{{ $service->title }}</title>
        <meta property="og:title" content="{{ $service->title }}" />
<meta property="og:description" content="{{ $seo->meta_description }}" />
<meta property="og:image" content="{{ asset('assets/frontend/') }}/images/breadcrumb_bg.jpg" />
@endsection
@section('meta-keywords', "$seo->meta_keywords")
@section('meta-description', "$seo->meta_description")
    <!--============================
        BREADCRUMB START
    =============================-->
    <section class="breadcrumb_area" style="background: url({{ asset('assets/frontend/') }}/images/breadcrumb_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1>{{ $service->title }}</h1>
                            <ul>
                                <li><a href="{{ route('front.index') }}">হোম</a></li>
                                <li><a href="{{ route('front.service') }}">সার্ভিস</a></li>
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
        SERVICES DETAILS START
    ===============================-->
    <section class="services_details pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft" data-wow-duration="1s">
                    <div class="services_details_area">
                        <div class="services_details_img">
                            <img src="{{ asset('assets/front/img/service/'.$service->image) }}" alt="service" class="img-fluid w-100">
                        </div>
                        <div class="services_details_text">
                            <h2>{{ $service->title }}</h2>
                            <p> {!! $service->content !!}</p>


                        </div>
                        <div class="details_aacordian mt_60">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            আমাদের হটলাইন নাম্বার
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{{ $setting->number }}</p>
                                        </div>
                                    </div>
                                </div>
                               
							   
							   
							                                   <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                            aria-expanded="false" aria-controls="collapseThree1">
                                            আমাদের ইমেইল এড্রেস
                                        </button>
                                    </h2>
                                    <div id="collapseThree1" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{{ $setting->email }}</p>
                                        </div>
                                    </div>
                                </div>
								
								                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                            aria-expanded="false" aria-controls="collapseThree1">
                                            আমাদের ঠিকানা
                                        </button>
                                    </h2>
                                    <div id="collapseThree1" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{{ $setting->address }}</p>
                                        </div>
                                    </div>
                                </div>
							   
							   
							   
							   
							   
							   
							   
							   
                                
								
								
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="sidebar">

                        <div class="sidebar_category mt_60">
                            <h3>সার্ভিস সমূহ</h3>
                            <ul>
							@foreach ($services as $item)
                                <li><a href="{{ route('front.service.details', $item->slug) }}">{{ $item->title }}</a></li>
								@endforeach
								
                            </ul>
                        </div>
                        <div class="sidebar_contact mt_60">
                            <img src="{{ asset('assets/frontend/') }}/images/sidebar_contact_img.jpg" alt="contact" class="img-fluid w-100">
                            <div class="text">
                                <i class="far fa-plus"></i>
                                <h4>যেকোনো সমস্যায় যোগাযোগ করুন</h4>
                                <a class="common_btn" href="{{ URL::to('/contact') }}">যোগাযোগ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        SERVICES DETAILS END
    ===============================-->
    
        <!--==============================
        PRICING START
    ===============================-->
    <section class="pricing pt_95 xs_pt_55 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
             <div class="section_heading">
                        <h2>আমাদের সকল সেবার মূল্য তালিকা</h2>
                    </div>
                
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
