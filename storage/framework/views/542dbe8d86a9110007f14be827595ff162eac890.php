<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!--End of Google Analytics script-->
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <meta name="description" content="<?php echo $__env->yieldContent('meta-description'); ?>">
	<meta name="keywords" content="<?php echo $__env->yieldContent('meta-keywords'); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
 <?php echo $__env->yieldContent('meta'); ?>
    <!--====== Title ======-->
    <title><?php echo e($setting->website_title); ?></title>


    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/front/img/'.$setting->fav_icon)); ?>" type="image/png">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/venobox.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/slick.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/animated_barfiller.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/select2.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/animate.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/utilities.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/responsive.css" />
</head>

<body>

    <!--============================
        HEADER START
    =============================-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 d-none d-md-block">
                    <ul class="header_info d-flex flex-wrap">
                        <li>
                            <a href="callto:<?php echo e($setting->number); ?>"> <i class="fas fa-phone-alt"></i>
                                <?php echo e($setting->number); ?></a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo e($setting->email); ?>">
                                <i class="fas fa-envelope"></i>
                                <?php echo e($setting->email); ?>

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-md-4">
                    <ul class="header_icon d-flex flex-wrap">
<?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                       
					   <li>
                            <a href="<?php echo e($item->url); ?>"><i class="<?php echo e($item->icon); ?>"></i></a>
                        </li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--============================
        HEADER END
    =============================-->


    <!--============================
        MENU START
    =============================-->
	<?php
$links = json_decode($menus, true);
//  dd($links);

?>

	
	
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class='navbar-brand' href='<?php echo e(route('front.index')); ?>'>
                <img src="<?php echo e(asset('assets/front/img/'.$setting->header_logo )); ?>" alt="<?php echo e($setting->website_title); ?>" class="img-fluid w-100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="far fa-bars menu_bar_icon"></i>
                <i class="far fa-times menu_close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
				
				
				 <!--   <li class="nav-item">-->
     <!--                   <a class='nav-link active' href='<?php echo e(URL::to('/')); ?>'>হোম</a>-->
     <!--               </li>-->

     <!--               <li class="nav-item">-->
     <!--                   <a class='nav-link' href='<?php echo e(URL::to('/about')); ?>'>আমাদের সম্পর্কে</a>-->
     <!--               </li>-->
     <!--               <li class="nav-item">-->
     <!--                   <a class='nav-link' href='<?php echo e(URL::to('/service')); ?>'>সার্ভিস</a>-->
     <!--               </li>-->
										       
					<!--<li class="nav-item">-->
     <!--                   <a class='nav-link' href='<?php echo e(route('front.products')); ?>'>প্রোডাক্ট</a>-->
     <!--               </li>-->
				
     <!--               <li class="nav-item">-->
     <!--                   <a class="nav-link" href="#">পেইজ +</a>-->
     <!--                   <ul class="droap_menu">-->
     <!--                       <li><a href='<?php echo e(URL::to('/portfolio')); ?>'>আমাদের প্রোজেক্ট</a></li>-->
     <!--                        <li><a href='<?php echo e(URL::to('/package')); ?>'>আমাদের প্যাকেজ</a></li>-->
					<!--		<li><a href='<?php echo e(URL::to('/team')); ?>'>আমাদের টিম</a></li>-->
					<!--		<li><a href='<?php echo e(URL::to('/faq')); ?>'>এফএকিউ</a></li>-->
					<!--		<li><a href='<?php echo e(URL::to('/blog')); ?>'>ব্লগ</a></li>-->
     <!--                   </ul>-->
     <!--               </li>-->
     
                    <?php
                        $menu = App\Models\Category::where('parent_id', 0)->get();
                    ?>


                    <li class="nav-item">
                        <a class='nav-link active' href='<?php echo e(url('/')); ?>'>হোম</a>
                    </li>

                    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            
                            <?php if($item->type == 0): ?>
                                <a class='nav-link' href='<?php echo e($item->url); ?>'><?php echo e($item->name); ?></a>
                            <?php else: ?>
                                <a class='nav-link' href='<?php echo e(url($item->url)); ?>'><?php echo e($item->name); ?></a>
                            <?php endif; ?>

                            <?php if(isset($item->subCategories) && count($item->subCategories) > 0): ?>
                                <ul class="droap_menu">
                                    <?php $__currentLoopData = $item->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($subItem->type == 0): ?>
                                            <li><a href='<?php echo e($subItem->url); ?>'><?php echo e($subItem->name); ?></a></li>
                                        <?php else: ?>
                                           <li><a class='nav-link' href='<?php echo e(url($subItem->url)); ?>'><?php echo e($subItem->name); ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
					

					
					
                    
                </ul>
                <ul class="right_menu d-flex flex-wrap">
           
           

                    <li><a href='<?php echo e(URL::to('/gate-a-quote')); ?>'>ফ্রি কনসালটেশন</a></li>

					
                </ul>
            </div>
        </div>
    </nav>

    <!--============================
        MENU END
    =============================-->

	<?php echo $__env->yieldContent('content'); ?>
 
    <!--==============================
        FOOTER START
    ===============================-->
    <footer class="pt_100 xs_pt_80">
        <div class="container">
            <div class="row pb_55">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer_contact">
                        <h4>আমাদের ইমেইল</h4>
                        <p>
                            <a href="mailto:<?php echo e($setting->email); ?>"><?php echo e($setting->email); ?></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="footer_contact">
                        <h4>আমাদের হটলাইন</h4>
                        <p>
                            <a href="callto:<?php echo e($setting->number); ?>"><?php echo e($setting->number); ?></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="footer_contact contact_with">
                        <h4>সোশ্যাল মিডিয়া</h4>
                        <ul>
                             <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
                                <a href="<?php echo e($item->url); ?>"><i class="<?php echo e($item->icon); ?>"></i></a>
                            </li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
							
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer_body pt_75 pb_75 xs_pt_50 xs_pb_50">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer_content xs_mb_50">
                            <a class='footer_logo' href='<?php echo e(route('front.index')); ?>'>
                                <img src="<?php echo e(asset('assets/front/img/'.$setting->footer_logo )); ?>" alt="<?php echo e($setting->website_title); ?>" class="img-fluid w-100" />
                            </a>
                            <p class="footer_description pt_40 sm_pt_20 sm_pb_20">
                              <?php echo e($setting->footer_text); ?>

                            </p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6 col-md-6 xs_mb_50">
                        <div class="footer_content">
                            <h3>লিঙ্ক</h3>
                            <ul class="footer_link">

							
                                <li><a href="<?php echo e(URL::to('/package')); ?>">প্যাকেজ লিস্ট</a></li>
								 <li><a href="<?php echo e(URL::to('/team')); ?>">আমাদের টিম</a></li>
								  <li><a href="<?php echo e(URL::to('/blog')); ?>">লেটেস্ট ব্লগ</a></li>
								   <li><a href="<?php echo e(URL::to('/faq')); ?>">এফএকিউ</a></li>
								   <li><a href="<?php echo e(URL::to('/contact')); ?>">যোগাযোগ করুন</a></li>
								
								
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6 col-md-6 xs_mb_50">
                        <div class="footer_content">
                            <h3>লিঙ্ক</h3>
                            <ul class="footer_link">
							<?php $__currentLoopData = $flinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($item->url); ?>"><?php echo e($item->name); ?></a></li>
								 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 xs_mb_30">
                        <div class="footer_content">
                            <h3>নিউজলেটার</h3>
                            <p class="pb_20">
                                আমাদের সকল আপডেট অফার পেতে, আমাদের সাথে কানেক্ট থাকতে ইমেইল এর মাধ্যমে সাবস্ক্রাইব করুন।
                            </p>
                            <form action="<?php echo e(route('front.newsletter')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="subscribe">
                                    <input type="email" name="email" placeholder="<?php echo e(__('Enter your email....')); ?>" />
									<?php if($errors->has('email')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('email')); ?> </p>
                                    <?php endif; ?>
                                    <span><i class="fas fa-envelope"></i></span>
                                </div>
                                <button class="mt_25" type="submit">সাবস্ক্রাইব  করুন</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom pt_45 pb_45  xs_pb_25">
                <div class="row ">
                    <div class="col-xl-6 col-lg-5">
                        <div class="copy">
                            <p><?php echo $setting->copyright_text; ?></p>
                        </div>
                    </div>
					
					
					
                    <div class="col-xl-6 col-lg-7">
                        <div class="footer_right_bottom">
                            <div class="payment ml_30 xs_ml_0">
                                <p>পেমেন্ট বাই :</p>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo e(asset('assets/frontend/')); ?>/images/payment.png" alt="master-card" class="img-fluid w-100">
                                    </a>
									  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </footer>
    <!--==============================
        FOOTER END
    ===============================-->


    <!--==============================
        SCROLL BUTON START
    ===============================-->
    <div class="scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--==============================
        SCROLL BUTON END
    ===============================-->


    <!--jquery library js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/jquery-3.7.0.min.js"></script>
    <!--bootstrap js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/bootstrap.bundle.min.js"></script>
    <!--font-awesome js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/Font-Awesome.js"></script>
    <!--venobox js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/venobox.min.js"></script>
    <!--isotope js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/isotope.pkgd.min.js"></script>
    <!--slick js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/slick.min.js"></script>
    <!--jquery.marquee js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/jquery.marquee.min.js"></script>
    <!--animated_barfiller js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/animated_barfiller.js"></script>
    <!--sticky_sidebar js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/sticky_sidebar.js"></script>
    <!--select2 js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/select2.min.js"></script>
    <!--counter js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/jquery.countup.min.js"></script>
    <!--wow js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/wow.min.js"></script>
    <!--main/custom js-->
    <script src="<?php echo e(asset('assets/frontend/')); ?>/js/main.js"></script>
	
	
<?php if(session()->has('success')): ?>
    <script>
        $(function() {
            // Form Submit Success Message alert
            $message = '<?php echo e(session('success')); ?>';

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            
            Toast.fire({
                icon: 'success',
                title: $message
            })
        });
    </script>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
    <script>
        $(function() {
            // Form Submit Success Message alert
            $message = '<?php echo e(session('warning')); ?>';

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            
            Toast.fire({
                icon: 'warning',
                title: $message
            })
        });
    </script>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <script>
        $(function() {
            // Form Submit Success Message alert
            $message = '<?php echo e(session('error')); ?>';

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            
            Toast.fire({
                icon: 'error',
                title: $message
            })
        });
    </script>
<?php endif; ?>
	
</body>

</html><?php /**PATH /home/softhostbd/public_html/core/resources/views/front/layout.blade.php ENDPATH**/ ?>