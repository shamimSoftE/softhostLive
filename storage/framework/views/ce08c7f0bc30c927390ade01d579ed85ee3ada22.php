
<?php $__env->startSection('meta'); ?>
  <title>Portfolio</title>
          <meta property="og:title" content="Portfolio" />
<meta property="og:description" content="<?php echo e($seo->portfolio_meta_desc); ?>" />
<meta property="og:image" content="<?php echo e(asset('assets/frontend/')); ?>/images/breadcrumb_bg.jpg" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta-keywords', "$seo->portfolio_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->portfolio_meta_desc"); ?>
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
                            <h1>আমাদের প্রোজেক্ট সমূহ</h1>
                            <ul>
                                <li><a href="<?php echo e(route('front.index')); ?>">হোম</a></li>
                                <li><a href="#">প্রোজেক্ট সমূহ</a></li>
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
        PROJECTS PAGE START
    ===============================-->
    <section class="projects_page pt_95 xs_pt_55 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
               


<?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			   <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="project_item">
                        <img src="<?php echo e(asset('assets/front/img/portfolio/'.$item->featured_image)); ?>" alt="project" class="img-fluid w-100">
                        <div class="project_item_text">
                            <span><?php echo e($item->service->title); ?></span>
                            <h3><?php echo e($item->title); ?></h3>
                            <a href='<?php echo e(route('front.portfolio.details', $item->slug)); ?>'>বিস্তারিত জানুন <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				
				
				
				
				
				
				
				
            </div>
            
        </div>
    </section>
    <!--==============================
        PROJECTS PAGE END
    ===============================-->










<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softhostbd/public_html/core/resources/views/front/portfolio.blade.php ENDPATH**/ ?>