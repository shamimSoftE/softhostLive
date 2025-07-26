
<?php $__env->startSection('meta'); ?>
  <title><?php echo e($portfolio->title); ?></title>
          <meta property="og:title" content="<?php echo e($portfolio->title); ?>" />
<meta property="og:description" content="<?php echo e($portfolio->meta_description); ?>" />
<meta property="og:image" content="<?php echo e(asset('assets/front/img/portfolio/'.$portfolio->featured_image)); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta-keywords', "$portfolio->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$portfolio->meta_description"); ?>
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
                            <h1><?php echo e($portfolio->title); ?></h1>
                            <ul>
                                <li><a href="<?php echo e(route('front.index')); ?>">হোম</a></li>
                                <li><a href="<?php echo e(route('front.portfolio')); ?>">প্রোজেক্ট</a></li>
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
        PROJECTS DETAILS START
    ===============================-->
    <section class="projects_details pt_120 xs_pt_80 pb_110 xs_pb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft" data-wow-duration="1s">
                    <div class="projects_details_contect">
                        
                    <?php if($portfolio_images->count() > 0): ?>
                        <div class="projects_details_img">
                            <?php $__currentLoopData = $portfolio_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('assets/front/img/portfolio/'.$item->image )); ?>" alt="project" class="img-fluid w-100">
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                    
                    
                    <?php else: ?>
                     <div class="projects_details_img">
                            <img src="<?php echo e(asset('assets/front/img/portfolio/'.$portfolio->featured_image)); ?>" alt="project" class="img-fluid w-100">
                        </div>
                          <?php endif; ?>
                        
                        
                        
                        <div class="projects_details_text">
                           
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="sidebar">
                        <div class="sidebar_project_info">
                            <h2>প্রোজেক্ট এর তথ্য</h2>
                            <ul class="list">
                                <li><span>শুরুর তারিখ :</span> <?php echo e($portfolio->start_date); ?></li>
                                <li><span>সাবমিট এর তারিখ :</span> <?php echo e($portfolio->submission_date); ?></li>
                                <li><span>ক্লাইন্টের নাম :</span> <?php echo e($portfolio->client_name); ?></li>
                                <li><span>ক্যাটাগরি :</span> <?php echo e($portfolio->service->title); ?></li>
								 <?php if($portfolio->link): ?>
                                <li><span>লাইভ প্রিভিউ :</span> <?php echo e($portfolio->link); ?></li>
							 <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        PROJECTS DETAILS END
    ===============================-->


    <!--==============================
        RELATED PROJECTS START
    ===============================-->
    <section class="projects related_project pb_110 xs_pb_70">
        <div class="container">
            <h2>নতুন প্রোজেক্ট</h2>
            <div class="row team_slider">
               
 <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			   <div class="col-lg-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="project_item">
                        <img src="<?php echo e(asset('assets/front/img/portfolio/'.$item->featured_image)); ?>" alt="project" class="img-fluid w-100">
                        <div class="project_item_text">
                            <span><?php echo e($item->service->title); ?></span>
                            <h3><?php echo e($item->title); ?></h3>
                            <a href="<?php echo e(route('front.portfolio.details', $item->slug)); ?>">বিস্তারিত জানুন<i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





            </div>
        </div>
    </section>
    <!--==============================
        RELATED PROJECTS END
    ===============================-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softhostbd/public_html/core/resources/views/front/portfolio-details.blade.php ENDPATH**/ ?>