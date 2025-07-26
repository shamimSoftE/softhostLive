<?php $__env->startSection('meta'); ?>
  <title>Products</title>
          <meta property="og:title" content="Products" />
<meta property="og:description" content="<?php echo e($seo->product_meta_desc); ?>" />
<meta property="og:image" content="<?php echo e(asset('assets/frontend/')); ?>/images/breadcrumb_bg.jpg" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta-keywords', "$seo->product_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->product_meta_desc"); ?>



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
                            <h1> প্রোডাক্ট সমূহ</h1>
                            <ul>
                                <li><a href="<?php echo e(route('front.index')); ?>">হোম</a></li>
                                <li><a href="#"> প্রোডাক্ট</a></li>
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
        SHOP START
    ===============================-->
    <section class="shop pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
        

            <div class="row">
                
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_shop">
                        <div class="single_shop_img">
                            <img src="<?php echo e(asset('assets/front/img/'.$product->image)); ?>" alt="shop" class="img-fluid w-100">
                        </div>
                        <div class="single_shop_text">
                            <div class="header d-flex flex-wrap justify-content-between">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <b>(5.0)</b>
                                </p>
                                <span><?php echo e(Helper::showCurrencyPrice($product->current_price)); ?></span>
                            </div>
                            <a class='title' href='<?php echo e(route('front.product.details',$product->slug)); ?>'><?php echo e($product->title); ?></a>
                            <ul class="d-flex flex-wrap justify-content-between">
<li><a href="<?php echo e($product->purchase_link); ?>">এখুনি কিনুন</a></li>
                                <li><a href="<?php echo e(route('front.product.details',$product->slug)); ?>">বিস্তারিত পড়ুন</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
				
				
				
				
            </div>
           <div class="row">
            <div class="col-12 d-flex justify-content-center">
              <nav aria-label="Page navigation example">
                  <?php echo e($products->links()); ?>

              </nav>
            </div>
          </div>
        </div>
    </section>
    <!--==============================
        SHOP END
    ===============================-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softhostbd/public_html/core/resources/views/front/product/index.blade.php ENDPATH**/ ?>