<footer id="footer" class="panel">
    <div class="inner split">
        <div>
            <?php snippet('common/about') ?>

            <?php snippet('common/social_icons') ?>

            <p class="copyright">
                <?php echo $site->copyright()->kirbytext() ?>
            </p>
        </div>

        <div>
            <?php snippet('common/contact_form') ?>
        </div>
    </div>
</footer>