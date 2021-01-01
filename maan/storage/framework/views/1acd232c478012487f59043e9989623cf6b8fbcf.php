<?php $__env->startSection('main-content'); ?>

		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-action">

			<div class="page-title-02 bg-image overlay-relative" style="background-image:url('<?php echo e(asset('frontend/images/image-bg/01.jpg')); ?>');">
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

                        <div class="post-horizon-wrapper-02">

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php

                                $title = "";



                                if (trans('frontend.code') =="en") {
                                $title= $post->title_en;


                                }elseif (trans('frontend.code') == "tr") {
                                $title= $post->title_tr;


                                }else {
                                $title= $post->title_ar;


                                }
                                ?>






<article class="post-horizon-item">

            <div class="image">
                <img src="<?php echo e(URL("uploads/posts/".$post->f_image)); ?>" alt="<?php echo e($title); ?>" />
            </div>
            <div class="content">
               <h4><a href="<?php echo e(route('post',$post->slug)); ?>"><?php echo e($title); ?></a></h4>
                <div class="meta text-muted">
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
                <a href="#" class="text-dark"><?php echo e($cat); ?></a> | <span><?php echo e($post->date); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="blog-entry">



                    <a href="<?php echo e(route('post',$post->slug)); ?>" class="btn-read-more"><?php echo e(trans('frontend.read_more')); ?> <i class="dripicons-arrow-thin-right"></i></a>

                </div>

            </div>

        </article>





<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





								</div>
<?php if($posts->lastPage() > 1): ?>
<nav aria-label="Page navigation">
    <ul class="pagination">
        <?php if($posts->currentPage() != 1 && $posts->lastPage() >= 5): ?>
        <li>
            <a href="<?php echo e($posts->url($posts->url(1))); ?>" aria-label="Previous">
                <span aria-hidden="true">First</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if($posts->currentPage() != 1): ?>
        <li>
            <a href="<?php echo e($posts->url($posts->currentPage()-1)); ?>" aria-label="Previous">
                <span aria-hidden="true">&#x3C;</span>
            </a>
        </li>
        <?php endif; ?>
        <?php for($i = max($posts->currentPage()-2, 1); $i <= min(max($posts->currentPage()-2, 1)+4,$posts->lastPage());
            $i++): ?>
            <?php if($posts->currentPage() == $i): ?>
            <li class="active">
                <?php else: ?>
            <li>
                <?php endif; ?>
                <a href="<?php echo e($posts->url($i)); ?>"><?php echo e($i); ?></a>
            </li>
            <?php endfor; ?>
            <?php if($posts->currentPage() != $posts->lastPage()): ?>
            <li>
                <a href="<?php echo e($posts->url($posts->currentPage()+1)); ?>" aria-label="Next">
                    <span aria-hidden="true">&#x3E;</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if($posts->currentPage() != $posts->lastPage() && $posts->lastPage() >= 5): ?>
            <li>
                <a href="<?php echo e($posts->url($posts->lastPage())); ?>" aria-label="Next">
                    <span aria-hidden="true">Last</span>
                </a>
            </li>
            <?php endif; ?>
    </ul>
</nav>
<?php endif; ?>

							</div>

						</div>

						<div class="col-12 col-lg-3">

							<aside class="sidebar-wrapper style-02">



								<div class="sidebar-box">

									<div class="box-title"><h5><span><?php echo e(trans('frontend.categories')); ?></span></h5></div>

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

									<div class="box-title"><h5><span>  <?php echo e(trans('frontend.recent_posts')); ?></span></h5></div>

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
														<img src="<?php echo e(URL("uploads/posts/".$repost->f_image)); ?>" alt="<?php echo e($rtitle); ?>" />
													</div>
													<div class="content">
														<h6><?php echo e($rtitle); ?></h6>
                                                    <p class="recent-post-sm-meta text-muted"><i class="dripicons-calendar mr-5"></i><?php echo e($repost->date); ?></p>
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