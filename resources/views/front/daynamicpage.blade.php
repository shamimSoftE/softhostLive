@extends('front.layout')

@section('meta-keywords', "$front_daynamic_page->meta_keywords")
@section('meta-description', "$front_daynamic_page->meta_description")
@section('content')

         

<!--====== PAGE TITLE PART ENDS ======-->

    <!-- Faq Area Start -->
	<section class="pt-120 pb-120 dynamicpage">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        {!! $front_daynamic_page->body !!}
                    </div>
                </div>
            </div>
		</div>
	</section>
	<!-- Faq Area End -->

@endsection
