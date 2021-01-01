<?php $__env->startSection('main-content'); ?>




		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
<div class="page-title-02 bg-image overlay-relative"
            style="background-image:url('<?php echo e(asset('frontend/images/image-bg/01.jpg')); ?>');">
            <div class="overlay-holder opacity-5"></div>
            <div class="container">
                <h2><?php echo e(trans('frontend.our_tours')); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(URL('/')); ?>"><?php echo e(trans('frontend.home')); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('frontend.tours')); ?></li>
                    </ol>
                </nav>
            </div>
        </div>

			<section class="page-wrapper bg-light-primary">

				<div class="container">

					<div class="row gap-20 gap-md-30 gap-xl-40">



						<div class="col-12 col-lg-12">

							<div class="content-wrapper">



								<div class="row equal-height cols-1 cols-md-2 cols-lg-3 gap-10 gap-lg-20">













<?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php

$title = "";


if (trans('frontend.code') =="en") {
$title= $tour->title_en;


}elseif (trans('frontend.code') == "tr") {
$title= $tour->title_tr;

}else {
$title= $tour->title_ar;

}
?>





<div class="col">

    <div class="product-grid-item">

        <a href="<?php echo e(URL("/tours/tour/".$tour->slug)); ?>">

            <div class="image">
                <img src="<?php echo e(URL::to('uploads/tour',$tour->f_image)); ?>" alt="<?php echo e($title); ?>">
            </div>

            <div class="content clearfix">

                <div class="rating-item rating-sm rating-inline clearfix">

                </div>

                <div class="short-info">

                <h6><?php echo e($title); ?></h6>

                </div>
                <div class="price">
                    <div class="float-right">
                        <span class="text-secondary"><?php echo e($tour->price); ?></span>
                    </div>
                </div>


            </div>

        </a>

    </div>

</div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




								</div>

								<div class="pager-wrappper mt-40">

									<div class="pager-innner">

										<div class="row align-items-center text-center text-md-left">



											<div class="col-12 col-md-7">
												
											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</section>

		</div>
		<!-- end Main Wrapper -->










<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>