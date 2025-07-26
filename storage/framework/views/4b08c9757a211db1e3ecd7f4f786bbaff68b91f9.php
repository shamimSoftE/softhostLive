
<?php $__env->startSection('meta'); ?>
  <title><?php echo e($team->name); ?></title>
          <meta property="og:title" content="<?php echo e($team->name); ?>" />
<meta property="og:description" content="<?php echo e($seo->team_meta_descn); ?>" />
<meta property="og:image" content="<?php echo e(asset('assets/front/img/team/'.$team->image)); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta-keywords', "$seo->team_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->team_meta_desc"); ?>
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
                            <h1><?php echo e($team->name); ?></h1>
                            <ul>
                                <li><a href="<?php echo e(route('front.index')); ?>">হোম</a></li>
                                <li><a href="#"><?php echo e($team->name); ?></a></li>
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
                        <img src="<?php echo e(asset('assets/front/img/team/'.$team->image)); ?>" alt="team" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-duration="1s">
                    <div class="team_detils_text">
                        <h2><?php echo e($team->name); ?></h2>
                        <h6><?php echo e($team->dagenation); ?></h6>
                        <p><?php echo $team->description; ?></p>
                        <span>আমাকে অনুসরন করুন</span>
                        <ul class="d-flex flex-wrap">
						
						<?php if($team->url1 && $team->icon1): ?>
                            <li><a href="<?php echo e($team->url1); ?>"><i class="<?php echo e($team->icon1); ?>"></i></a></li>
                        <?php endif; ?>
						
												<?php if($team->url2 && $team->icon2): ?>
                            <li><a href="<?php echo e($team->url2); ?>"><i class="<?php echo e($team->icon2); ?>"></i></a></li>
                        <?php endif; ?>
						
						
																		<?php if($team->url3 && $team->icon3): ?>
                            <li><a href="<?php echo e($team->url3); ?>"><i class="<?php echo e($team->icon3); ?>"></i></a></li>
                        <?php endif; ?>
																		<?php if($team->url4 && $team->icon4): ?>
                            <li><a href="<?php echo e($team->url4); ?>"><i class="<?php echo e($team->icon4); ?>"></i></a></li>
                        <?php endif; ?>
						
																		<?php if($team->url5 && $team->icon5): ?>
                            <li><a href="<?php echo e($team->url5); ?>"><i class="<?php echo e($team->icon5); ?>"></i></a></li>
                        <?php endif; ?>
						
						
						
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
                        <p><?php echo e($team->skill1); ?></p>
                        <div id="bar1" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="<?php echo e($team->skill1_text); ?>"></span>
                        </div>
                        <p><?php echo e($team->skill2); ?></p>
                        <div id="bar2" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="<?php echo e($team->skill2_text); ?>"></span>
                        </div>
                        <p><?php echo e($team->skill3); ?></p>
                        <div id="bar3" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="<?php echo e($team->skill3_text); ?>"></span>
                        </div>
                        <p><?php echo e($team->skill4); ?></p>
                        <div id="bar4" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="<?php echo e($team->skill4_text); ?>"></span>
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
			
			<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_team">
                        <img src="<?php echo e(asset('assets/front/img/team/'.$item->image)); ?>" alt="team" class="img-fluid w-100">
                        <div class="text">
                            <a href='<?php echo e(route('front.team_details', $item->id)); ?>'><?php echo e($item->name); ?></a>
                            <p><?php echo e($item->dagenation); ?></p>
                        </div>
                        <ul>
                            
							<?php if($item->url1 && $item->icon1): ?>
                            <li><a href="<?php echo e($item->url1); ?>"><i class="<?php echo e($item->icon1); ?>"></i></a></li>
							<?php endif; ?>
							
													<?php if($item->url2 && $item->icon2): ?>
                            <li><a href="<?php echo e($item->url2); ?>"><i class="<?php echo e($item->icon2); ?>"></i></a></li>
							<?php endif; ?>
							
																				<?php if($item->url3 && $item->icon3): ?>
                            <li><a href="<?php echo e($item->url3); ?>"><i class="<?php echo e($item->icon3); ?>"></i></a></li>
							<?php endif; ?>
							
							
																				<?php if($item->url4 && $item->icon4): ?>
                            <li><a href="<?php echo e($item->url4); ?>"><i class="<?php echo e($item->icon4); ?>"></i></a></li>
							<?php endif; ?>
																				<?php if($item->url5 && $item->icon5): ?>
                            <li><a href="<?php echo e($item->url5); ?>"><i class="<?php echo e($item->icon5); ?>"></i></a></li>
							<?php endif; ?>
							
							
							
							
                        </ul>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				
				
				
				
            </div>
        </div>
    </section>
    <!--============================
        RELATED TEAM END
    =============================-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softhostbd/public_html/core/resources/views/front/team-details.blade.php ENDPATH**/ ?>