<?php $__env->startSection('home'); ?>
    <!-- Featured Posts Grid -->
    <section class="featured-posts-grid bg-dark">
        <div class="container clearfix">

            <!-- Large post slider -->
            <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">

                    <?php if($events -> count() > 0): ?>
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <article class="entry featured-posts-grid__entry">
                                <div class="thumb-bg-holder owl-lazy" data-src="../<?php echo e($event->image); ?>">
                                    <img src="../<?php echo e($event->image); ?>" alt="" class="d-none">
                                    <a href="<?php echo e(url('news/'.$event->id)); ?>" class="thumb-url"></a>
                                    <div class="bottom-gradient"></div>
                                </div>

                                <div class="thumb-text-holder">
                                    <h2 class="thumb-entry-title">
                                        <a href="<?php echo e(url('news/'.$event->id)); ?>"><?php echo e($event->name); ?></a>
                                    </h2>
                                </div>
                            </article>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>

                        <article class="entry featured-posts-grid__entry">
                            <div class="thumb-bg-holder owl-lazy" data-src="../images/dasha.jpg">
                                <img src="../images/dasha.jpg" alt="" class="d-none">
                                <a href="" class="thumb-url"></a>
                                <div class="bottom-gradient"></div>
                            </div>

                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="">Мероприятия будут</a>
                                </h2>
                            </div>
                        </article>

                    <?php endif; ?>


                </div> <!-- end owl slider -->
            </div> <!-- end large post slider -->


            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder" style="background-image: url(img/blog/featured_grid_2.jpg);">
                        <a href="post.html" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title thumb-entry-title--sm">
                            <a href="post.html">Общефизическая <br /> подготовка</a>
                        </h2>
                    </div>
                </article>
            </div>

            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder" style="background-image: url(img/blog/featured_grid_3.jpg);">
                        <a href="post.html" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title thumb-entry-title--sm">
                            <a href="post.html">Огневая <br />подготовка</a>
                        </h2>
                    </div>
                </article>
            </div>


            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder" style="background-image: url(img/blog/featured_grid_2.jpg);">
                        <a href="post.html" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title thumb-entry-title--sm">
                            <a href="post.html">Единоборство</a>
                        </h2>
                    </div>
                </article>
            </div>

        </div>
    </section> <!-- end featured posts grid -->

    <div class="main-container container mt-40" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-30">

                <!-- Hot News -->
                <section class="section tab-post mb-10">

                    <!-- Latest News -->
                    <section class="section">
                        <div class="title-wrap">
                            <h3 class="section-title">Новости</h3>
                        </div>


                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <article class="entry post-list">
                                <div class="entry__img-holder post-list__img-holder">
                                    <a href="<?php echo e(url('news/'.$new->id)); ?>">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="../<?php echo e($new->image); ?>" src="<?php echo e(url('../'.$new->image)); ?>" class="entry__img lazyload" alt="">
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body post-list__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title">
                                            <a href="<?php echo e(url('news/'.$new->id)); ?>"><?php echo e($new -> name); ?></a>
                                        </h2>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p><?php echo e(mb_strimwidth($new->description, 0, 125, "...")); ?></p>
                                    </div>
                                </div>

                                <a class="read--more" href="<?php echo e(url('news/'.$new->id)); ?>">Подробнее</a>
                            </article>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </section> <!-- end latest news -->


                        <?php echo e($news -> links()); ?>


                </section>
            </div> <!-- end posts -->

            <?php echo $__env->make('popular', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div> <!-- end content -->
    </div> <!-- end main container -->

    <?php $__env->stopSection(); ?>


<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>