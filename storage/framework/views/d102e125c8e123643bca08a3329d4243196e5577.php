<?php $__env->startSection('post'); ?>
<div class="main-container container mt-40" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-30">

            <!-- Hot News -->
            <section class="section tab-post mb-10">

                <!-- Latest News -->
                <section class="section">
                    <article class="entry">

                        <div class="single-post__entry-header entry__header">
                            <h1 class="single-post__entry-title">
                                <?php echo e($news -> name); ?>

                            </h1>
                        </div>

                        <div class="entry__img-holder">
                            <img src="../images/news/<?php echo e($news->image); ?>" alt="" class="entry__img">
                        </div>

                        <div class="entry__article">
                            <p><?php echo e($news -> description); ?></p>
                        </div> <!-- end entry article -->

                        <?php if(isset($news->video)): ?>
                        <div class="vide--frame">
                            <blockquote>
                                <iframe width="100%" height="315" src="<?php echo e($news->video); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </blockquote>
                        </div>
                            <?php endif; ?>
                    </article>

                </section> <!-- end latest news -->
            </section>
        </div> <!-- end posts -->

       <?php echo $__env->make('popular', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div> <!-- end content -->
</div> <!-- end main container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>