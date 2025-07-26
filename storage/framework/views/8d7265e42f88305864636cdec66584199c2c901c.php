
<?php $__env->startSection('meta'); ?>
  <title>Blog</title>
          <meta property="og:title" content="Blog" />
<meta property="og:description" content="<?php echo e($seo->blog_meta_desc); ?>" />
<meta property="og:image" content="<?php echo e(asset('assets/frontend/')); ?>/images/breadcrumb_bg.jpg" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta-keywords', "$seo->blog_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->blog_meta_desc"); ?>
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
                            <h1>ব্লগ</h1>
                            <ul>
                                <li><a href="<?php echo e(route('front.index')); ?>">হোম</a></li>
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
								<?php if(count($blogs) == 0): ?>
						<div class="col-md-12">
							<div class="bg-light py-5">
							<h3 class="text-center"><?php echo e(__('কোন ব্লগ নেই')); ?></h3>
							</div>
						</div>
					<?php else: ?>
			
			
			
			<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="<?php echo e(asset('assets/front/img/blog/'.$item->image)); ?>" alt="blog" class="img-fluid w-100">
                           
                        </div>
                        <div class="single_blog_text">
                            <ul>
                                <li><i class="far fa-user-circle"></i> বাই এডমিন</li>
                                <li><i class="fal fa-calendar-alt"></i> <?php echo e(date ( 'd M, Y', strtotime($item->created_at) )); ?></li>
                            </ul>
                            <a class='title' href='<?php echo e(route('front.blogdetails', $item->slug)); ?>'><?php echo e((strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title))); ?></a>
                            <p><?php echo (strlen(strip_tags(Helper::convertUtf8($item->short_details))) > 120) ? substr(strip_tags(Helper::convertUtf8($item->short_details)), 0, 120) . '...' : strip_tags(Helper::convertUtf8($item->short_details)); ?></p>
                            <a class='more_btn' href='<?php echo e(route('front.blogdetails', $item->slug)); ?>'>বিস্তারিত পড়ুন <i
                                    class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
				
				
				
				
				
            </div>
           				<div class="row mt-30">
					<div class="col-lg-12 text-center">
						<div class="d-inline-block">
							<?php echo e($blogs->appends(['language' => request()->input('language')])->links()); ?>

						</div>
					</div>
				</div>
        </div>
    </section>
    <!--==============================
        BLOG PAGE END
    ===============================-->








<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softhostbd/public_html/core/resources/views/front/blogs.blade.php ENDPATH**/ ?>