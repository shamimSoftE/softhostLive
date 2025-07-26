<header>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 d-none d-md-block">
                    <ul class="header_info d-flex flex-wrap">
                        <li>
                            <a href="callto:{{ $setting->number }}"> <i class="fas fa-phone-alt"></i>
                                {{ $setting->number }}</a>
                        </li>
                        <li>
                            <a href="mailto:{{ $setting->email }}">
                                <i class="fas fa-envelope"></i>
                                {{ $setting->email }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-md-4">
                    <ul class="header_icon d-flex flex-wrap">
@foreach ($socials as $item)                       
					   <li>
                            <a href="{{ $item->url }}"><i class="{{ $item->icon }}"></i></a>
                        </li>
						@endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2355381278153504');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2355381278153504&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    </header>