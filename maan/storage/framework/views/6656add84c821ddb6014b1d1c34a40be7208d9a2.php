<?php $__env->startSection('main-content'); ?>

<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-action">

    <div class="page-title-02 bg-image overlay-relative"
        style="background-image:url('<?php echo e(asset('frontend/images/image-bg/01.jpg')); ?>');">
        <div class="overlay-holder opacity-5"></div>
        <div class="container">
            <h2><?php echo e(trans('frontend.blog')); ?></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(URL('/')); ?>"><?php echo e(trans('frontend.home')); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('frontend.blog')); ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <section>

        <div class="container">

            <div class="row gap-40">


                <div class="col-12 col-lg-9">

							<div class="content-wrapper">

								<div class="post-horizon-wrapper">

									<article class="post-horizon-item blog-single clearfix">

                                        <?php

                                        $title = "";

                                        $text = "";

                                        if (trans('frontend.code') =="en") {
                                        $title= $post->title_en;
                                        $text= $post->text_en;



                                        }elseif (trans('frontend.code') == "tr") {
                                        $title= $post->title_tr;

                                        $text= $post->text_tr;


                                        }else {
                                        $title= $post->title_ar;
                                        $text= $post->text_ar;


                                        }
                                        ?>


										<div class="blog-media">
                                        <img src="<?php echo e(URL("uploads/posts/".$post->f_image)); ?>" alt="<?php echo e($title); ?>">
										</div>

										<div class="blog-content mt-30">
											<h3><?php echo e($title); ?></h3>
											<ul class="blog-meta clearfix">

                                            <li><?php echo e($post->date); ?></li>
                                            <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php

                                            $cat = "";



                                            if (trans('frontend.code') =="en") {

                                            $cat = $post->categories[$category]->name_en;


                                            }elseif (trans('frontend.code') == "tr") {

                                            $cat = $post->categories[$category]->name_tr;


                                            }else {
                                            $cat = $post->categories[$category]->name_ar;
                                            }
                                            ?>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e(trans('frontend.in')); ?> |  <?php echo e($cat); ?></li>

											</ul>
											<div class="blog-entry">

                                         <?php echo $text; ?>

                                            </div>

										</div>

										<div class="blog-extra bg-light-primary">
											<div class="row gap-20 align-items-center">


												<div class="col-xs-12 col-lg-6">
													<ul class="social-share-sm float-left float-lg-left">

														<li><span><i class="fas fa-share-square"></i> <?php echo e(trans('frontend.share')); ?></span></li>


                                                       	<li class="the-label"> <a href="mailto:?Subject=<?php echo e($title); ?>&amp;Body=<?php echo e(url()->current()); ?>">

                                                            <i class="fa fa-envelope  "></i> </a></li>

                                                       	<li class="the-label"> <a href="https://www.facebook.com/sharer.php?u=<?php echo e(url()->current()); ?>" target="_blank">

                                                            <i class="fab fa-facebook "></i> </a></li>

                                                      	<li class="the-label">  <a href="https://plus.google.com/share?url=<?php echo e(url()->current()); ?>" target="_blank">

                                                            <i class="fab fa-google-plus"></i> </a></li>




                                                      	<li class="the-label">  <a href="https://twitter.com/share?url=<?php echo e(url()->current()); ?>&amp;text=<?php echo e($title); ?>&amp;hashtags=maan_tours"
                                                            target="_blank">

                                                            <i class="fab fa-twitter "></i> </a></li>



                                                      	<li class="the-label">  <a href="whatsapp://send?text=<?php echo e(url()->current()); ?>" data-action="share/whatsapp/share">


                                                            <i class="fab fa-whatsapp  "></i>


                                                        </a></li>


													</ul>
												</div>
											</div>
										</div>

									</article>

									<div class="mb-40"></div>


<div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">

    <h3 class="heading-title"><span><?php echo e(trans('frontend.comments')); ?></span></h3>

    <div class="change-search-wrapper">

        <div class="alert alert-success d-none" id="msg_div">
            <span id="res_message"></span>
        </div>

        <div class="row gap-10 gap-xl-20 align-items-end">


 <div class="fb-comments" data-href="https://www.maantour61.com/" data-width="100%" data-numposts="10"></div>






        </div>

    </div>


</div>

								</div>

							</div>

                        </div>

                <div class="col-12 col-lg-3">

                    <aside class="sidebar-wrapper style-02">



                        <div class="sidebar-box">

                            <div class="box-title">
                                <h5><span><?php echo e(trans('frontend.categories')); ?></span></h5>
                            </div>

                            <div class="box-content">

                                <ul class="category-list">


                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php

                                    $cate = "";


                                    if (trans('frontend.code') =="en") {

                                    $cate = $category->name_en;


                                    }elseif (trans('frontend.code') == "tr") {

                                    $cate = $category->name_tr;


                                    }else {
                                    $cate = $category->name_ar;
                                    }
                                    ?>





                                    <li><a href="#"><?php echo e($cate); ?></a></li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>

                            </div>

                        </div>

                        <div class="sidebar-box">

                            <div class="box-title">
                                <h5><span> <?php echo e(trans('frontend.recent_posts')); ?></span></h5>
                            </div>

                            <div class="box-content">

                                <ul class="post-small-list">

                                    <?php $__currentLoopData = $reposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php

                                    $rtitle = "";



                                    if (trans('frontend.code') =="en") {
                                    $rtitle= $repost->title_en;


                                    }elseif (trans('frontend.code') == "tr") {
                                    $rtitle= $repost->title_tr;


                                    }else {
                                    $rtitle= $repost->title_ar;


                                    }
                                    ?>


                                    <li class="clearfix">
                                        <a href="<?php echo e(route('post',$repost->slug)); ?>">
                                            <div class="image">
                                                <img src="<?php echo e(URL("uploads/posts/".$repost->f_image)); ?>"
                                                    alt="<?php echo e($rtitle); ?>" />
                                            </div>
                                            <div class="content">
                                                <h6><?php echo e($rtitle); ?></h6>
                                                <p class="recent-post-sm-meta text-muted"><i
                                                        class="dripicons-calendar mr-5"></i><?php echo e($repost->date); ?></p>
                                            </div>
                                        </a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>

                            </div>

                        </div>


                    </aside>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->







<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>