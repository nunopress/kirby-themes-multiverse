<section>
    <h2>Get in touch</h2>

    <?php if (isset($contact_form_success) and true === $contact_form_success): ?>
        <h3>Message sended successfully!</h3>
    <?php endif; ?>

    <form method="post" action="">
        <div class="field half first">
            <input type="text" name="contact[name]" id="name" placeholder="Name" />
        </div>
        <div class="field half">
            <input type="text" name="contact[email]" id="email" placeholder="Email" />
        </div>
        <div class="field">
            <textarea name="contact[message]" id="message" rows="4" placeholder="Message"></textarea>
        </div>
        <ul class="actions">
            <li><input name="contact[submit]" type="submit" value="Send" class="special" /></li>
            <li><input type="reset" value="Reset" /></li>
        </ul>

        <input type="text" name="contact[antibot]" style="display:none" />
    </form>
</section>