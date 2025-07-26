@extends('front.layout')
@section('meta')
  <title>Blog</title>
          <meta property="og:title" content="Blog" />
<meta property="og:description" content="{{ $seo->blog_meta_desc }}" />
<meta property="og:image" content="{{ asset('assets/frontend/') }}/images/breadcrumb_bg.jpg" />
@endsection
@section('meta-keywords', "$seo->blog_meta_key")
@section('meta-description', "$seo->blog_meta_desc")
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
                            <h1>ব্লগ</h1>
                            <ul>
                                <li><a href="{{ route('front.index') }}">হোম</a></li>
                                <li><a href="#">ব্লগ</a></li>
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
        BLOG PAGE START
    ===============================-->
    <section class="blog_page pt_95 xs_pt_55 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
								@if (count($blogs) == 0)
						<div class="col-md-12">
							<div class="bg-light py-5">
							<h3 class="text-center">{{__('কোন ব্লগ নেই')}}</h3>
							</div>
						</div>
					@else
			
			
			
			@foreach ($blogs as $item)
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="{{ asset('assets/front/img/blog/'.$item->image) }}" alt="blog" class="img-fluid w-100">
                           
                        </div>
                        <div class="single_blog_text">
                            <ul>
                                <li><i class="far fa-user-circle"></i> বাই এডমিন</li>
                                <li><i class="fal fa-calendar-alt"></i> {{date ( 'd M, Y', strtotime($item->created_at) )}}</li>
                            </ul>
                            <a class='title' href='{{route('front.blogdetails', $item->slug)}}'>{{ (strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title)) }}</a>
                            <p>{!! (strlen(strip_tags(Helper::convertUtf8($item->short_details))) > 120) ? substr(strip_tags(Helper::convertUtf8($item->short_details)), 0, 120) . '...' : strip_tags(Helper::convertUtf8($item->short_details)) !!}</p>
                            <a class='more_btn' href='{{route('front.blogdetails', $item->slug)}}'>বিস্তারিত পড়ুন <i
                                    class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
				@endforeach
				@endif
				
				
				
				
				
            </div>
           				<div class="row mt-30">
					<div class="col-lg-12 text-center">
						<div class="d-inline-block">
							{{$blogs->appends(['language' => request()->input('language')])->links()}}
						</div>
					</div>
				</div>
        </div>
    </section>
    <!--==============================
        BLOG PAGE END
    ===============================-->








@endsection
