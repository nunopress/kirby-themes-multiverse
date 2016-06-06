<section>
    <h2>Get in touch</h2>

    <form id="contactForm" method="post" action="">
        <div class="field half first">
            <input type="text" name="contact[name]" id="name" placeholder="Name" required />
        </div>
        <div class="field half">
            <input type="text" name="contact[email]" id="email" placeholder="Email" required />
        </div>
        <div class="field">
            <textarea name="contact[message]" id="message" rows="4" placeholder="Message" required></textarea>
        </div>

        <?php if ($site->recaptcha_api()->isNotEmpty()): ?>
            <div class="field">
                <div class="g-recaptcha" data-theme="dark" data-sitekey="<?php echo $site->recaptcha_api() ?>"></div>
                <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
            </div>
        <?php endif; ?>

        <ul class="actions">
            <li><input name="contact[submit]" type="submit" value="Send" class="special" /></li>
            <li><input type="reset" value="Reset" /></li>
        </ul>
    </form>
</section>