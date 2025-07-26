@extends('front.layout')
@section('meta')
  <title>{{ $team->name }}</title>
          <meta property="og:title" content="{{ $team->name }}" />
<meta property="og:description" content="{{ $seo->team_meta_descn }}" />
<meta property="og:image" content="{{ asset('assets/front/img/team/'.$team->image) }}" />
@endsection
@section('meta-keywords', "$seo->team_meta_key")
@section('meta-description', "$seo->team_meta_desc")
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
                            <h1>{{ $team->name }}</h1>
                            <ul>
                                <li><a href="{{ route('front.index') }}">হোম</a></li>
                                <li><a href="#">{{ $team->name }}</a></li>
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
        TEAM DETAILS START
    ===============================-->
    <section class="team_details pt_120 xs_pt_80 pb_100 xs_pb_60">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1s">
                    <div class="team_detils_img">
                        <img src="{{ asset('assets/front/img/team/'.$team->image) }}" alt="team" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-duration="1s">
                    <div class="team_detils_text">
                        <h2>{{ $team->name }}</h2>
                        <h6>{{ $team->dagenation }}</h6>
                        <p>{!! $team->description !!}</p>
                        <span>আমাকে অনুসরন করুন</span>
                        <ul class="d-flex flex-wrap">
						
						@if($team->url1 && $team->icon1)
                            <li><a href="{{ $team->url1 }}"><i class="{{ $team->icon1 }}"></i></a></li>
                        @endif
						
												@if($team->url2 && $team->icon2)
                            <li><a href="{{ $team->url2 }}"><i class="{{ $team->icon2 }}"></i></a></li>
                        @endif
						
						
																		@if($team->url3 && $team->icon3)
                            <li><a href="{{ $team->url3 }}"><i class="{{ $team->icon3 }}"></i></a></li>
                        @endif
																		@if($team->url4 && $team->icon4)
                            <li><a href="{{ $team->url4 }}"><i class="{{ $team->icon4 }}"></i></a></li>
                        @endif
						
																		@if($team->url5 && $team->icon5)
                            <li><a href="{{ $team->url5 }}"><i class="{{ $team->icon5 }}"></i></a></li>
                        @endif
						
						
						
						</ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mt_90 xs_mt_50">
                <div class="col-xl-5 wow fadeInLeft" data-wow-duration="1s">
                    <div class="section_heading mt_50">
                        <h3>স্কিলস</h3>
                        <h2>অভিজ্ঞ টিম আইডিয়া প্রদান করে</h2>
                        <p>এটিই প্রধান কারণ যা আমাদেরকে সবার থেকে আলাদা করে এবং আমাদেরকে আইডিয়া প্রদান করে।</p>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-duration="1s">
                    <div class="team_details_skills">
                        <p>{{ $team->skill1 }}</p>
                        <div id="bar1" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="{{ $team->skill1_text }}"></span>
                        </div>
                        <p>{{ $team->skill2 }}</p>
                        <div id="bar2" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="{{ $team->skill2_text }}"></span>
                        </div>
                        <p>{{ $team->skill3 }}</p>
                        <div id="bar3" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="{{ $team->skill3_text }}"></span>
                        </div>
                        <p>{{ $team->skill4 }}</p>
                        <div id="bar4" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="{{ $team->skill4_text }}"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        TEAM DETAILS END
    ===============================-->


    <!--============================
        RELATED TEAM START
    =============================-->
    <section class="related_team pt_115 xs_pt_75 pb_110 xs_pb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="section_heading pb_20">
                        <h3>আমাদের টিম</h3>
                        <h2>আমাদের সকল টিম মেম্বারদের তালিকা</h2>
                    </div>
                </div>
            </div>
            <div class="row team_slider">
			
			@foreach($teams as $key => $item)
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_team">
                        <img src="{{ asset('assets/front/img/team/'.$item->image) }}" alt="team" class="img-fluid w-100">
                        <div class="text">
                            <a href='{{ route('front.team_details', $item->id) }}'>{{ $item->name }}</a>
                            <p>{{ $item->dagenation }}</p>
                        </div>
                        <ul>
                            
							@if($item->url1 && $item->icon1)
                            <li><a href="{{ $item->url1 }}"><i class="{{ $item->icon1 }}"></i></a></li>
							@endif
							
													@if($item->url2 && $item->icon2)
                            <li><a href="{{ $item->url2 }}"><i class="{{ $item->icon2 }}"></i></a></li>
							@endif
							
																				@if($item->url3 && $item->icon3)
                            <li><a href="{{ $item->url3 }}"><i class="{{ $item->icon3 }}"></i></a></li>
							@endif
							
							
																				@if($item->url4 && $item->icon4)
                            <li><a href="{{ $item->url4 }}"><i class="{{ $item->icon4 }}"></i></a></li>
							@endif
																				@if($item->url5 && $item->icon5)
                            <li><a href="{{ $item->url5 }}"><i class="{{ $item->icon5 }}"></i></a></li>
							@endif
							
							
							
							
                        </ul>
                    </div>
                </div>
                @endforeach
				
				
				
				
				
            </div>
        </div>
    </section>
    <!--============================
        RELATED TEAM END
    =============================-->

@endsection
