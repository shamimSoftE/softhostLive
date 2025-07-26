
<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>


<?php $__env->startSection('meta'); ?>

    <meta property="og:title" content="<?php echo e($setting->website_title); ?>" />
<meta property="og:description" content="<?php echo e($seo->meta_description); ?>" />
<meta property="og:image" content="<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>" />
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
  
  
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

 <!--==============================
        BANNER START
    ===============================-->
    <section class="banner" style="background: url(<?php echo e(asset('assets/front/img/'.$sinfo->hero_bg_image )); ?>) no-repeat center/cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="banner_content">
                        <h3><?php echo e($sinfo->exprience); ?></h3>
                        <h1><?php echo e($sinfo->hero_title); ?></h1>
                        <p class="description"><?php echo e($sinfo->hero_text); ?>

                        </p>
                        <div class="banner_btn d-flex flex-wrap">
                            <a href="<?php echo e(URL::to('/gate-a-quote')); ?>" class="common_btn">ফ্রি কনসালটেশন</a>
                            <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                href="https://youtu.be/<?php echo e($sinfo->youtube_video); ?>">
                                <i class=" fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-duration="1s">
                    <div class="banner_img">
                        <img src="<?php echo e(asset('assets/front/img/'.$sinfo->hero_image)); ?>" alt="banner-img" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        BANNER END
    ===============================-->


    <!--==============================
        ABOUT START
    ===============================-->
    <section class="about pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="about_img_box">
                        <div class="small_img">
                            <img src="<?php echo e(asset('assets/front/img/'.$sinfo->about_image1)); ?>" alt="image" class="img-fluid w-100">
                        </div>
                        <div class="main_img">
                            <img src="<?php echo e(asset('assets/front/img/'.$sinfo->about_image)); ?>" alt="image" class="img-fluid w-100">
                        </div>
                        <div class="support_img">
                            <img src="<?php echo e(asset('assets/front/img/'.$sinfo->about_image2)); ?>" alt="image" class="img-fluid w-100">
                            <div class="item_card">
                                <span>
                                    <svg width="45" height="51" viewBox="0 0 45 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M35.6076 36.014L30.966 34.4671L29.2997 31.1344C30.8009 29.6064 31.8432 27.5848 32.1946 25.4761L32.4024 24.2305H34.1797C35.7951 24.2305 37.1094 22.9162 37.1094 21.3008V15.1484C37.1094 7.07129 30.5381 0.5 22.4609 0.5C14.3631 0.5 7.8125 7.05244 7.8125 15.1484V21.3008C7.8125 22.5738 8.629 23.6594 9.76562 24.0625V25.207C9.76562 26.8225 11.0799 28.1367 12.6953 28.1367H13.5529C13.9763 29.0563 14.5242 29.9081 15.191 30.6732C15.3293 30.8322 15.4735 30.9863 15.6213 31.1362L13.9559 34.4671L9.31416 36.0141C3.91719 37.8137 0 43.4952 0 49.5234C0 50.0628 0.437207 50.5 0.976562 50.5H43.9453C44.4846 50.5 44.9219 50.0628 44.9219 49.5234C44.9219 43.4952 41.0048 37.8137 35.6076 36.014ZM35.1562 21.3008C35.1562 21.8393 34.7182 22.2773 34.1797 22.2773H32.6893C32.9375 20.3545 33.1029 18.3083 33.1694 16.293C33.1714 16.2361 33.173 16.1809 33.1747 16.125H35.1562V21.3008ZM10.7422 22.2773C10.2037 22.2773 9.76562 21.8393 9.76562 21.3008V16.125H11.7479C11.7511 16.2269 11.7545 16.3292 11.7583 16.4322C11.7584 16.4357 11.7586 16.4392 11.7587 16.4427C11.7587 16.443 11.7587 16.4433 11.7587 16.4436C11.8271 18.4037 11.9903 20.3968 12.2329 22.2772H10.7422V22.2773ZM12.6953 26.1836C12.1568 26.1836 11.7188 25.7455 11.7188 25.207V24.2305H12.5193L12.7271 25.4765C12.7668 25.7133 12.8155 25.9492 12.8719 26.1836H12.6953ZM11.7204 14.1719H9.80273C10.2974 7.62685 15.7595 2.45312 22.4609 2.45312C29.1326 2.45312 34.6187 7.62617 35.119 14.1719H33.2016C33.1313 8.77861 28.7394 4.40625 23.3351 4.40625H21.587C16.1828 4.40625 11.7906 8.77861 11.7204 14.1719ZM21.5869 6.35938H23.335C27.7108 6.35938 31.2525 9.93857 31.25 14.3096C31.25 14.6169 31.2476 14.8845 31.2424 15.1279C31.2424 15.1311 31.2423 15.1343 31.2423 15.1375L30.0208 14.963C26.7024 14.4892 23.5692 12.9226 21.1983 10.5517C21.0151 10.3686 20.7668 10.2656 20.5078 10.2656C17.8852 10.2656 15.3746 11.4605 13.715 13.4793C14.124 9.50283 17.4856 6.35938 21.5869 6.35938ZM14.8965 26.1836C14.4076 24.5573 13.8482 19.7722 13.7246 16.7058L15.039 14.9532C16.2461 13.3442 18.1241 12.3445 20.1219 12.2298C22.7505 14.7313 26.1511 16.3833 29.7446 16.8964L31.1823 17.1019C31.0862 19.1414 30.8898 21.1881 30.6085 23.0704C30.6084 23.071 30.6083 23.0717 30.6082 23.0724C30.5188 23.6775 30.4482 24.067 30.2682 25.1548C29.751 28.2568 27.4363 31.062 24.3808 31.826C23.1232 32.1399 21.7984 32.1398 20.5416 31.826C18.6337 31.349 16.8843 30.0289 15.7553 28.1367H17.7461C18.1492 29.2733 19.2347 30.0898 20.5078 30.0898H22.4609C24.0796 30.0898 25.3906 28.7789 25.3906 27.1602C25.3906 25.5447 24.0764 24.2305 22.4609 24.2305H20.5078C19.2063 24.2305 18.1369 25.0711 17.7444 26.1836H14.8965ZM20.4257 33.8023C21.0955 33.9435 21.7784 34.0156 22.4609 34.0156C22.9952 34.0156 23.5296 33.9709 24.0579 33.8842L22.3323 35.7091L20.4257 33.8023ZM20.9897 37.1288L17.8923 40.4044C17.0396 38.7722 16.3068 37.0734 15.7059 35.3344L16.869 33.008L20.9897 37.1288ZM27.8873 32.6771L29.2158 35.3343C28.6139 37.0763 27.881 38.7756 27.0291 40.4059L23.7139 37.0906L27.8873 32.6771ZM19.5312 27.1602C19.5312 26.621 19.9686 26.1836 20.5078 26.1836H22.4609C22.9994 26.1836 23.4375 26.6217 23.4375 27.1602C23.4375 27.6994 23.0001 28.1367 22.4609 28.1367H20.5078C19.9693 28.1367 19.5312 27.6986 19.5312 27.1602ZM1.99219 48.5469C2.3792 43.7091 5.59883 39.3118 9.93184 37.8669L14.0426 36.497C14.7957 38.5795 15.7287 40.6036 16.8222 42.5263C16.824 42.5296 16.8258 42.5329 16.8276 42.5361C16.8276 42.5362 16.8277 42.5362 16.8277 42.5363C17.6267 43.9415 18.5259 45.3146 19.5008 46.6183L20.7021 48.5469H1.99219ZM22.4609 47.6764L21.1365 45.5501C21.1217 45.5263 21.1059 45.5031 21.0891 45.4807C20.2982 44.4258 19.5605 43.3226 18.8887 42.1934L22.3714 38.5104L26.0411 42.1801C25.3647 43.3175 24.6245 44.4253 23.833 45.4805C23.7852 45.5442 23.853 45.4437 22.4609 47.6764ZM24.2197 48.5469L25.421 46.6184C26.4002 45.3098 27.3059 43.9256 28.1128 42.5039C28.1177 42.4953 28.1223 42.4865 28.1271 42.4779C28.1277 42.4769 28.1283 42.4759 28.1289 42.4748C29.2085 40.5705 30.1317 38.564 30.8793 36.497L34.9899 37.8669C39.323 39.3118 42.5427 43.7091 42.9297 48.5469H24.2197Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <h3>২৪/৭ সাপোর্ট</h3>
                                <p>যেকোন সময়ে , যেকোন সমস্যায়</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s">
                    <div class="section_heading pt_35">
                        <h3><?php echo e($sinfo->about_title); ?></h3>
                        <h2><?php echo e($sinfo->about_sub_title); ?></h2>
                    </div>
                    <div class="about_content">
                        <p><?php echo $sinfo->about_text; ?></p>
                        <div class="grid_item">
                            <div class="left">
                                <div class="experience">
                                    <span>
                                        <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.38064 0.563713C1.62442 0.923296 0.321585 2.27825 0.0505954 4.02926C0.00369328 4.31588 -0.00672941 6.39521 0.00369328 11.9766C0.0193273 20.2157 -0.00151807 19.5851 0.305951 20.4033C0.6499 21.3257 1.66611 22.3419 2.58852 22.6859C3.38064 22.9829 3.19825 22.9725 7.32563 22.9725C11.0934 22.9725 11.1403 22.9725 11.281 22.8631C11.5572 22.6598 11.6406 22.493 11.6406 22.1647C11.6406 21.8364 11.5572 21.6697 11.281 21.4664C11.1403 21.357 11.0726 21.357 7.37774 21.3309C3.67769 21.3049 3.60994 21.3049 3.34416 21.1902C2.49472 20.8463 1.95274 20.247 1.73907 19.4184C1.61921 18.965 1.61921 4.51391 1.73907 4.05532C1.97358 3.15896 2.6719 2.46585 3.57346 2.23134C4.02164 2.1167 14.3088 2.1167 14.757 2.23134C15.6586 2.46585 16.3569 3.15896 16.5914 4.05532C16.6539 4.31067 16.6696 4.76927 16.6696 6.69747C16.6696 9.29792 16.6644 9.27187 17.0135 9.53244C17.1751 9.65751 17.2585 9.68357 17.5034 9.68357C17.7483 9.68357 17.8317 9.65751 17.9933 9.53244C18.3528 9.26145 18.3424 9.31356 18.3268 6.48901C18.3059 3.7739 18.3111 3.84165 18.0245 3.08079C17.8734 2.67952 17.4825 2.08543 17.1125 1.72063C16.7582 1.35584 16.1536 0.949352 15.742 0.798223C14.9342 0.495966 15.3563 0.5116 9.29552 0.501177C4.83982 0.495966 3.65163 0.506388 3.38064 0.563713Z"
                                                fill="#FF3838" />
                                            <path
                                                d="M4.65797 5.56141C4.30881 5.71254 4.11078 6.11381 4.18374 6.50466C4.23064 6.74959 4.49121 7.03622 4.72572 7.10396C4.856 7.14565 5.93996 7.15608 8.02971 7.14565C11.0783 7.13002 11.1409 7.13002 11.2816 7.02058C11.5578 6.81734 11.6412 6.65058 11.6412 6.32226C11.6412 5.99395 11.5578 5.82718 11.2816 5.62394C11.1409 5.5145 11.0783 5.5145 7.9776 5.50408C5.42925 5.49366 4.78304 5.50408 4.65797 5.56141Z"
                                                fill="#FF3838" />
                                            <path
                                                d="M4.65696 9.73048C4.1671 9.94415 4.01075 10.606 4.3547 11.0177C4.62569 11.3356 4.49541 11.3252 8.4873 11.3252C12.0623 11.3252 12.1457 11.3252 12.3489 11.2209C12.8857 10.9447 12.9482 10.1995 12.4583 9.82429L12.2759 9.68358L8.54462 9.67316C5.52204 9.66274 4.78203 9.67316 4.65696 9.73048Z"
                                                fill="#FF3838" />
                                            <path
                                                d="M15.7996 11.4033C14.7522 11.5909 13.8975 12.0495 13.1262 12.8312C12.454 13.5087 12.0214 14.2748 11.7869 15.2128C11.6514 15.76 11.667 17.0003 11.8182 17.5527C12.0266 18.3396 12.4852 19.1578 13.0376 19.7467L13.3347 20.0698V22.2429C13.3347 23.7438 13.3555 24.4838 13.3972 24.6193C13.5327 25.0727 14.1007 25.5 14.5646 25.5C14.9085 25.5 15.1743 25.3749 15.9456 24.8486L16.6699 24.3535L17.4412 24.8694C18.2907 25.4375 18.4939 25.5261 18.8639 25.4844C19.3017 25.4323 19.656 25.1873 19.8645 24.7965C19.9739 24.5932 19.9791 24.5307 19.9948 22.3263L20.0104 20.0646L20.3179 19.7258C20.7087 19.3037 20.938 18.9546 21.2038 18.4022C21.5477 17.6882 21.6363 17.2609 21.6416 16.3541C21.6416 15.4942 21.5842 15.1607 21.3028 14.4572C20.938 13.5348 20.1355 12.5915 19.2808 12.0652C18.2594 11.4398 16.9618 11.1897 15.7996 11.4033ZM17.3735 13.0709C17.8321 13.1648 18.4939 13.4983 18.8535 13.811C20.0521 14.8584 20.3491 16.6251 19.5518 17.9957C19.2964 18.4282 18.7701 18.9546 18.3376 19.2099C16.7012 20.1636 14.5541 19.5278 13.7099 17.8393C13.2148 16.8544 13.2148 15.8069 13.6995 14.8376C14.3874 13.4774 15.8778 12.7583 17.3735 13.0709ZM15.487 21.185C16.0967 21.3466 17.2432 21.3466 17.8529 21.185C18.0874 21.1225 18.2907 21.0704 18.3063 21.0704C18.3219 21.0704 18.3376 21.6071 18.3376 22.269V23.4676L17.6288 22.9986C16.6699 22.3628 16.6699 22.3628 15.711 22.9986L15.0023 23.4676V22.269C15.0023 21.6071 15.0179 21.0704 15.0336 21.0704C15.0492 21.0704 15.2524 21.1225 15.487 21.185Z"
                                                fill="#FF3838" />
                                            <path
                                                d="M4.65797 13.0657C4.30881 13.2169 4.11078 13.6181 4.18374 14.009C4.23064 14.2539 4.49121 14.5406 4.72572 14.6083C4.856 14.65 5.75235 14.6604 7.40435 14.65C9.82762 14.6344 9.89016 14.6344 10.0361 14.5249C10.5468 14.1445 10.5468 13.5087 10.0361 13.1283C9.89016 13.0188 9.83284 13.0188 7.35224 13.0084C5.31981 12.998 4.78304 13.0084 4.65797 13.0657Z"
                                                fill="#FF3838" />
                                            <path
                                                d="M4.65696 16.401C4.1671 16.6147 4.01075 17.2765 4.3547 17.6882C4.61527 17.9957 4.62048 17.9957 7.10629 17.9957C9.62858 17.9957 9.61295 17.9957 9.87352 17.6517C9.99859 17.4902 10.0246 17.4068 10.0246 17.1619C10.0246 16.9169 9.99859 16.8335 9.87352 16.672C9.61295 16.3228 9.63379 16.328 7.09587 16.328C5.31359 16.3332 4.77682 16.3489 4.65696 16.401Z"
                                                fill="#FF3838" />
                                        </svg>
                                    </span>
                                    <p><?php echo e($sinfo->about_experince_yers); ?> বছরের পরামর্শের <span>অভিজ্ঞতা</span></p>
                                </div>
                                <ul>
                                    <li><?php echo e($sinfo->about_tiitle_1); ?></li>
                                    <li><?php echo e($sinfo->about_tiitle_2); ?></li>
                                    <li><?php echo e($sinfo->about_tiitle_3); ?></li>
                                </ul>
                                <a class="common_btn" href="<?php echo e(URL::to('/gate-a-quote')); ?>">ফ্রি কনসালটেশন</a>
                            </div>
                            <div class="right">
                                <div class="counter_item">
                                    <h4><?php echo e($sinfo->sucess_rate); ?></h4>
                                    <p>সফলতার রেট</p>
                                </div>
                                <hr>
                                <div class="counter_item">
                                    <h4><?php echo e($sinfo->satisfied_client); ?></h4>
                                    <p>সন্তুষ্ট ক্লায়েন্ট</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        ABOUT END
    ===============================-->


    <!--==============================
        FEATURES START
    ===============================-->
    <section class="features pt_115 xs_pt_75 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="section_heading">
                        <h3>আমাদের বৈশিষ্ট্য</h3>
                        <h2>আমাদের বিশেষ বৈশিষ্ট্য সমূহ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
				
				
				
				
				<?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
				<div class="col-xl-3 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="feature_item">
                        <div class="icon">
							
							<img src="<?php echo e($item->icon); ?>" alt="icon" class="img-fluid w-100">
							
                        </div>
                        <div class="content">
                            <a href=''><?php echo e($item->title); ?></a>
                            <p><?php echo e($item->text); ?></p>
                        </div>
                    </div>
                </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				
				
				
				
				
				
				
				
				
            </div>
        </div>
    </section>
    <!--==============================
        FEATURES END
    ===============================-->


    <!--==============================
        ACHIEVEMENTS START
    ===============================-->
    <section class="achievements pt_115 xs_mt_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="section_heading">
                        <h3>অর্জন সমূহ</h3>
                        <h2>আমাদের অর্জন সমূহ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
			
			  <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="achievement_item">
                        <div class="icon">
                            <span><img src="https://blogger.googleusercontent.com/img/b/<?php echo e($item->icon); ?>" alt="icon" class="img-fluid w-100"></span>
                        </div>
                        <h4><span class="counter"><?php echo e($item->number); ?></span>+</h4>
                        <p><?php echo e($item->title); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				
				
				
				
            </div>
        </div>
    </section>
    <!--==============================
        ACHIEVEMENTS END
    ===============================-->


    <!--==============================
        PROJECTS START
    ===============================-->
    <section class="projects pt_115 xs_pt_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="section_heading">
                        <h3>আমরা আরও ভাল সমাধান অফার করি</h3>
                        <h2>আমাদের লেটেস্ট প্রোজেক্ট সমূহ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="projects_filter d-flex flex-wrap">
                        <button class=" active" data-filter="*"><?php echo e(__('All')); ?></button>
                        
						<?php $__currentLoopData = $all_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(route('front.portfolio',['category'=>$item->slug])); ?>">
						<button><?php echo e($item->title); ?></button>
						</a>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="row grid">
			
			
			 <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-sm-6 col-lg-4 .<?php echo e($item->title); ?> wow fadeInUp" data-wow-duration="1s">
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
        PROJECTS END
    ===============================-->


    <!--============================
        SERVICES START
    =============================-->
    <section class="services mt_120 xs_mt_80 pt_115 xs_pt_75 pb_95 xs_pb_55">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="section_heading">
                        <h3>আমাদের সার্ভিস সমূহ </h3>
                        <h2>একটি উচ্চ-মানের সার্ভিস সমূহ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
			
			
			
			
	<?php $__currentLoopData = $my_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="service_item">
                        <span class="icon"><i class="<?php echo e($item->icon); ?>"></i></span>
                        <h2><?php echo e($item->title); ?></h2>
                        <p><?php echo $item->short_description; ?></p>
                        <a href='<?php echo e(route('front.service.details', $item->slug)); ?>'>বিস্তারিত</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
				
				
				
				
            </div>
        </div>
    </section>
    <!--============================
        SERVICES END
    =============================-->


<?php if($visibility->is_t5_team_section == 1): ?>
    <!--============================
        TEAM START
    =============================-->
   
   
   <section class="home_2_team pt_115 xs_pt_75 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_heading pb_20">
                        <h3>আমাদের টিম</h3>
                        <h2>আমাদের সকল টিম মেম্বাদেরকে দেখুন</h2>
                    </div>
                </div>
            </div>
            
			
			<div class="row">
                
				
				
				<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <div class="home_2_team_item">
                        <div class="image">
                            <span>
                                <img src="<?php echo e(asset('assets/front/img/team/'.$item->image)); ?>" alt="image" class="img-fluid w-100">
                            </span>
                        </div>
                        <div class="text">
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
                            <a class="link" href="<?php echo e(route('front.team_details', $item->id)); ?>"><?php echo e($item->name); ?></a>
                            <p><?php echo e($item->dagenation); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				
				
				
				
				
				
				
            </div>
        </div>
    </section>
   
   
   
   
    <!--============================
        TEAM END
    =============================-->
<?php endif; ?>

    <!--============================
        TESTIMONIAL START
    =============================-->




<section class="home_2_testimonial pt_115 xs_pt_75 pb_120 xs_pb_80"
        style="background: url(<?php echo e(asset('assets/frontend')); ?>/images/testimonial_2_bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="section_heading">
                        <h3>প্রশংসা সমূহ</h3>
                        <h2>আমাদের ক্লায়েন্টগন কি বলে</h2>
                    </div>
                </div>
            </div>
            <div class="row home_2_team_slider">
                
				
				<?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="home_2_single_team">
                        <span>
                            <img src="<?php echo e(asset('assets/front/img/'.$item->image)); ?>" alt="image" class="img-fluid w-100">
                        </span>
                        <p><?php echo e($item->message); ?></p>
                        <div class="item_bottom">
                            <div class="text">
                                <h4><?php echo e($item->name); ?></h4>
                                <p><?php echo e($item->position); ?></p>
                            </div>
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>
        </div>
    </section>














    <!--============================
        TESTIMONIAL END
    =============================-->

    <?php if($visibility->is_t5_blog_section == 1): ?>
    <!--============================
        BLOG START
    =============================-->
    <section class="blog pt_115 xs_pt_75 pb_115 xs_pb_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="section_heading pb_20">
                        <h3><?php echo e($sinfo->blog_title); ?></h3>
                        <h2><?php echo e($sinfo->blog_sub_title); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
			
			<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="<?php echo e(asset('assets/front/img/blog/'.$item->image)); ?>" alt="blog" class="img-fluid w-100">
                            
                        </div>
                        <div class="single_blog_text">
                            <ul>
                                <li><i class="far fa-user-circle"></i>বাই এডমিন</li>
                                <li><i class="fal fa-calendar-alt"></i><?php echo e(date ( 'd M, Y', strtotime($item->created_at) )); ?></li>
                            </ul>
                            <a class='title' href='<?php echo e(route('front.blogdetails', $item->slug)); ?>'><?php echo e((strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title))); ?></a>
                            <p><?php echo (strlen(strip_tags(Helper::convertUtf8($item->short_details))) > 100) ? substr(strip_tags(Helper::convertUtf8($item->short_details)), 0, 120) . '...' : strip_tags(Helper::convertUtf8($item->short_details)); ?></p>
                            <a class='more_btn' href='<?php echo e(route('front.blogdetails', $item->slug)); ?>'>বিস্তারিত পড়ুন <i
                                    class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				
                
            </div>
        </div>
    </section>
    <!--============================
        BLOG END
    =============================-->
    <?php endif; ?>
    <?php if($visibility->is_t5_client_section == 1): ?>
    <!--============================
        BRAND START
    =============================-->
    <section class="brand pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="marquee_animi">
                        <ul class="brand_logo_area d-flex flex-wrap justify-content-between">
						 <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e($item->link); ?>"><img src="<?php echo e(asset('assets/front/img/client/'.$item->image)); ?>" alt="brand" class="img-fluid w-100"></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BRAND END
    =============================-->
<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softhostbd/public_html/core/resources/views/front/themes/theme5.blade.php ENDPATH**/ ?>