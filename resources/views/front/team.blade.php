
@extends('front.layout')
@section('meta')
  <title>Our Team</title>
          <meta property="og:title" content="Our Team" />
<meta property="og:description" content="{{ $seo->team_meta_desc }}" />
<meta property="og:image" content="{{ asset('assets/frontend/') }}/images/breadcrumb_bg.jpg" />
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
                            <h1>আমাদের টিম</h1>
                            <ul>
                                <li><a href="{{ route('front.index') }}">হোম</a></li>
                                <li><a href="#">টিম</a></li>
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
        TEAM PAGE START
    ===============================-->
    <section class="team_page pt_95 xs_pt_55 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
			
			
			@foreach($teams as $key => $item)
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
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
				
          <div class="row mt-30">
			<div class="col-lg-12 text-center">
				<div class="d-inline-block">
					{{ $teams->links() }}
				</div>
			</div>
		</div>
            
        </div>
		
    </section>
    <!--==============================
        TEAM PAGE END
    ===============================-->
 
 
@endsection
