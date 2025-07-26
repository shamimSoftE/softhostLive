	@php
$links = json_decode($menus, true);
//  dd($links);

@endphp

	
	
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class='navbar-brand' href='{{ route('front.index') }}'>
                <img src="{{ asset('assets/front/img/'.$setting->header_logo ) }}" alt="{{ $setting->website_title }}" class="img-fluid w-100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="far fa-bars menu_bar_icon"></i>
                <i class="far fa-times menu_close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
				
				
				                    <li class="nav-item">
                        <a class='nav-link active' href='{{ URL::to('/') }}'>Home</a>
                    </li>
				
				
				

                    <li class="nav-item">
                        <a class='nav-link' href='{{ URL::to('/about') }}'>About</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link' href='{{ URL::to('/service') }}'>Services</a>
                    </li>
										                    <li class="nav-item">
                        <a class='nav-link' href='{{ URL::to('/portfolio') }}'>Portfolio</a>
                    </li>
                    <li class="nav-item">
		@php
            $product_category = App\Models\ProductCategory::where('language_id',$currentLang->id)->where('status',1)->get();
        @endphp
					
                        <a class="nav-link" href="{{ route('front.products') }}">{{ __('Product') }} +</a>
                        <ul class="droap_menu">
						@foreach ($product_category as $pcategory)
                            <li><a href='{{ route('front.product.load',$pcategory->id) }}'>{{ $pcategory->name }}</a></li>
							 @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page +</a>
                        <ul class="droap_menu">
                            <li><a href='{{ URL::to('/package') }}'>Package</a></li>
							<li><a href='{{ URL::to('/team') }}'>Our Team</a></li>
							<li><a href='{{ URL::to('/gallery') }}'>Gallery</a></li>
							<li><a href='{{ URL::to('/faq') }}'>FAQ</a></li>
							<li><a href='{{ URL::to('/blog') }}'>Blog</a></li>
							<li><a href='{{ URL::to('/career') }}'>Career</a></li>
                        </ul>
                    </li>
					
					

					
					
                    <li class="nav-item">
                        <a class='nav-link' href='{{ URL::to('/contact') }}'>Contact</a>
                    </li>
                </ul>
                <ul class="right_menu d-flex flex-wrap">
                    <li>
                        <a class='cart_view' href='{{ route('front.cart') }}'>
						            @php
                $countitem = 0;
                if(Session::has('cart')){
                    $cart = Session::get('cart');
                    $cartTotal = 0;
                    if($cart){
                        foreach($cart as $p){
                            $cartTotal += (double)$p['price'] * (int)$p['qty'];
                        }
                    }
                }else{
                    $cart = [];
                }
            @endphp
						
						
						
                            <img src="{{ asset('assets/frontend/') }}/images/cart.svg" alt="cart-icon" class="img-fluid w-100">
                            <b>{{ count($cart) }}</b>
                        </a>
                    </li>
		    @if( $visibility->is_user_system == 1)
            @if(auth()->check())
                    <li><a href='{{ route('user.dashboard') }}'>{{ __("User Dashboard") }}</a></li>
					    @else
						 <li><a href='{{ route('user.login') }}'>{{ __('Login') }}</a></li>	
					@endif
					@endif
					
                </ul>
            </div>
        </div>
    </nav>