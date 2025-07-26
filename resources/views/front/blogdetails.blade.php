@extends('front.layout')
@section('meta')
  <title>{{ $blog->title }}</title>
          <meta property="og:title" content="{{ $blog->title }}" />
<meta property="og:description" content="{{ $blog->meta_description }}" />
<meta property="og:image" content="{{asset('assets/front/img/blog/'.$blog->image) }}" />
@endsection
@section('meta-keywords', "$blog->meta_keywords")
@section('meta-description', "$blog->meta_description")
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
                            <h1>বিস্তারিত ব্লগ</h1>
                            <ul>
                                <li><a href="#">হোম</a></li>
                                <li><a href="#">ব্লগ ডিটেইলস</a></li>
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
        BLOG DETAILS START
    ===============================-->
    <section class="blog_details pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft" data-wow-duration="1s">
                    <div class="blog_details_content">
                        <div class="blog_details_img">
                            <img src="{{asset('assets/front/img/blog/'.$blog->image) }}" alt="blog" class="img-fluid w-100">
                        </div>
                        <ul class="blog_det_header">
                            <li><i class="far fa-user-circle"></i> বাই এডমিন</li>
                            <li><i class="fal fa-calendar-alt"></i> {{date ( 'd M, Y', strtotime($blog->created_at) )}}</li>
                        </ul>
                        <div class="blog_details_text">
                            <h2>{{ $blog->title }}</h2>
                            <p>{!! $blog->content !!}</p>
                        </div>
							@if($visibility->is_blog_share_links == 1)
							<div class="blog-details-bar mt-30">
								<div class="blog-social">
									<h4 class="title">সোশ্যাল শেয়ার</h4>
									
									<div class="share-blog">
										<div class="tag-social-link text-center justify-content-center">
											<!-- AddToAny BEGIN -->
											<div class="a2a_kit a2a_kit_size_32 a2a_default_style d-inline-block">
											<a class="a2a_button_facebook"></a>
											<a class="a2a_button_twitter"></a>
											<a class="a2a_button_email"></a>
											<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
											</div>
											<script async src="https://static.addtoany.com/menu/page.js"></script>
											<!-- AddToAny END -->
										</div>
									</div>
								</div>
							</div>
							@endif

                        

                        

                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="sidebar">

                        <div class="sidebar_category mt_60">
                            <h3>ব্লগ ক্যাটাগরি</h3>
                            <ul>
							
							@foreach ($bcategories as $bcategory)
                                <li><a href="{{route('front.blogs',  ['term'=>request()->input('term'), 'category'=>$bcategory->slug,  'month' => request()->input('month'), 'year' => request()->input('year')]) }}">{{ $bcategory->name }}</a></li>
								@endforeach
								
                            </ul>
                        </div>
                        <div class="sidebar_post mt_60">
                            <h3>নতুন ব্লগ</h3>
                            <ul>
                               

@foreach ($latestblogs as $latestblog)
							   <li>
                                    <div class="img">
                                        <img src="{{asset('assets/front/img/blog/'.$latestblog->image)}}" alt="blog" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <p><i class="fal fa-calendar-alt"></i> {{date ( 'd M, Y', strtotime($latestblog->created_at) )}}</p>
                                        <a href='{{route('front.blogdetails', $latestblog->slug)}}'>{{ (strlen(strip_tags(Helper::convertUtf8($latestblog->title))) > 50) ? substr(strip_tags(Helper::convertUtf8($latestblog->title)), 0, 50) . '...' : strip_tags(Helper::convertUtf8($latestblog->title)) }}</a>
                                    </div>
                                </li>
								@endforeach
								
								
								
                                
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        BLOG DETAILS END
    ===============================-->



 

@endsection
