<?php

return function ($site, $pages, $page, $args) {
    $query = get('contact');

    if (! $query) {
        return;
    }

    if (! empty($query['antibot'])) {
        return;
    }

    mail($site->email(), sprintf("Contact form site by %s", $query['name']), $query['message'], sprintf("From: <%s> %s", $query['email'], $query['name']));

    return [
        'contact_form_success' => true
    ];
};