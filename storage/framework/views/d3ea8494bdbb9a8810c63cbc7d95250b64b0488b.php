<?php $__env->startSection('callback'); ?>
<div class="main-container container mt-40" style="margin-bottom: 40px;">
    <div class="row justify-content-md-center">
        <div class="col-lg-12">
            <div class="contact-form col-md-6" style="float: left">
                <h2>Свяжитесь с нами</h2>

                <div class="contacts--info">
                    <p><i class="fas fa-phone"></i> +38 093 555 5555</p>
                    <p><i class="far fa-envelope"></i> example@body.com</p>
                    <p><i class="fas fa-location-arrow"></i> где-то на планете</p>
                </div>
            </div>

            <!-- Contact Form -->
            <form id="contact-form" class="contact-form col-md-6" style="float: right" method="post" action="<?php echo e(url('callback')); ?>">
                <?php echo e(csrf_field()); ?>

                <h2>Или оставьте сообщение</h2>
                <div class="contact-name">
                    <label for="name">ФИО <abbr title="required" class="required">*</abbr></label>
                    <input name="name" id="name" type="text">
                </div>
                <div class="contact-subject">
                    <label for="email">Телефон</label>
                    <input name="phone" id="phone" type="number">
                </div>
                <div class="contact-email">
                    <label for="email">Почта <abbr title="required" class="required">*</abbr></label>
                    <input name="email" id="email" type="email">
                </div>
                <div class="contact-message">
                    <label for="message">Сообщение <abbr title="required" class="required">*</abbr></label>
                    <textarea id="text" name="text" rows="7" required="required"></textarea>
                </div>

                <input type="submit" class="btn btn-lg btn-color btn-button" value="Отправить" id="submit-message">
                <div id="msg" class="message"></div>
            </form>

        </div>
    </div>
</div> <!-- end main container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>