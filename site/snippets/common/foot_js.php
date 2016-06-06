<?php echo js('assets/js/jquery.min.js') ?>
<?php echo js('assets/js/jquery.poptrox.min.js') ?>
<?php echo js('assets/js/skel.min.js') ?>
<?php echo js('assets/js/util.js') ?>
<!--[if lte IE 8]><?php echo js('assets/js/ie/respond.min.js') ?><![endif]-->
<?php echo js('assets/js/main.js') ?>

<?php echo js('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js') ?>

<script>
    $('#contactForm').validate({
        ignore: ".ignore",

        rules: {
            <?php if ($site->recaptcha_api()->isNotEmpty()): ?>
                hiddenRecaptcha: {
                    required: function() {
                        if (grecaptcha.getResponse() == '') {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            <?php endif; ?>
        }
    });
</script>

<?php if ($site->recaptcha_api()->isNotEmpty()): ?>
    <?php $language_code = ($site->languages()) ? '?hl=' . $site->language()->name() : ''; ?>
    <script src="https://www.google.com/recaptcha/api.js<?php echo $language_code ?>" async defer></script>
<?php endif; ?>
