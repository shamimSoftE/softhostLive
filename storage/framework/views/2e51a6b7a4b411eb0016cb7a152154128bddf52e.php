
<?php $__env->startSection('meta'); ?>
  <title>Free Consultation</title>
          <meta property="og:title" content="Free Consultation" />
<meta property="og:description" content="<?php echo e($seo->quot_meta_desc); ?>" />
<meta property="og:image" content="<?php echo e(asset('assets/frontend/')); ?>/images/breadcrumb_bg.jpg" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta-keywords', "$seo->quot_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->quot_meta_desc"); ?>
<?php $__env->startSection('content'); ?>


    <!--============================
        BREADCRUMB START
    =============================-->
    <section class="breadcrumb_area" style="background: url(<?php echo e(asset('assets/frontend/')); ?>/images/breadcrumb_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1>ফ্রি কনসালটেশন</h1>
                            <ul>
                                <li><a href="<?php echo e(route('front.index')); ?>">হোম</a></li>
                                <li><a href="#">ফ্রি কনসালটেশন</a></li>
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


    <!--=============================
        CONTACT PAGE START
    ==============================-->
    <section class="contact mt_120 xs_mt_80 mb_120 xs_mb_80">
        <div class="container">
            <div class="contact_form_area">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                        <div class="contact_info_area">
                            <div class="contact_info">
                                <h3>মোবাইল নাম্বার</h3>
                                
																<?php
                                    $fnumber = explode( ',', $setting->number );
                                    for ($i=0; $i < count($fnumber); $i++) { 
                                        echo '<p>'.$fnumber[$i].'</p>';
                                    }
                                ?>
								
                            </div>
                            <div class="contact_info">
                                <h3>ইমেইল</h3>
															<?php
								$femail = explode( ',', $setting->email );
								for ($i=0; $i < count($femail); $i++) { 
									echo '<p>'.$femail[$i].'</p>';
								}
							?>
                            </div>
                            <div class="contact_info border-0 p-0 m-0">
                                <h3>অফিসের ঠিকানা</h3>
								
                                <p><?php echo e($setting->address); ?></p>
								
								
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                        <form class="contact_form">
                            <h3>ফ্রি কনসালটেশন এর জন্য নিচের ফরম পূরণ করুন</h3>
						<form action="<?php echo e(route('front.contact.submit')); ?>" method="POST">
							<?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact_form_input">
                                        <span><i class="fas fa-user"></i></span>
                                        <input type="text" name="name" placeholder="নাম">
									<?php if($errors->has('name')): ?>
										<p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
									<?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact_form_input">
                                        <span><i class="fas fa-envelope"></i></span>
                                        <input type="email" name="email" placeholder="ইমেইল">
										<?php if($errors->has('email')): ?>
										<p class="text-danger"> <?php echo e($errors->first('email')); ?> </p>
									<?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact_form_input">
                                        <span><i class="fas fa-phone-alt"></i></span>
                                        <input type="text" name="phone" placeholder="মোবাইল">
								   <?php if($errors->has('phone')): ?>
										<p class="text-danger"> <?php echo e($errors->first('phone')); ?> </p>
									<?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact_form_input">
                                        <span><i class="fas fa-book"></i></span>
                                        <input type="text" name="subject" placeholder="সাব্জেক্ট">
										<?php if($errors->has('subject')): ?>
										<p class="text-danger"> <?php echo e($errors->first('subject')); ?> </p>
									<?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact_form_input textarea">
                                        <span><i class="fas fa-pen"></i></span>
                                        <textarea rows="5" name="message" placeholder="ম্যাসেজ"></textarea>
										<?php if($errors->has('message')): ?>
										<p class="text-danger"> <?php echo e($errors->first('message')); ?> </p>
										<?php endif; ?>
                                    </div>
                                    <button class="common_btn mt_15" type="submit">সাবমিট করুন</button>
									<?php if($visibility->is_recaptcha == 1): ?>
												<div class="mt-3 d-inline-block ml-4" >
													<?php echo NoCaptcha::renderJs(); ?>

													<?php echo NoCaptcha::display(); ?>

													<?php if($errors->has('g-recaptcha-response')): ?>
													<?php
														$errmsg = $errors->first('g-recaptcha-response');
													?>
													<p class="text-danger mb-0"><?php echo e(__("$errmsg")); ?></p>
													<?php endif; ?>
												</div>
											<?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!--=============================
        CONTACT PAGE END
    ==============================-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softhostbd/public_html/core/resources/views/front/quote.blade.php ENDPATH**/ ?>