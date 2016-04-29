<?php

return function ($site, $pages, $page, $args) {
    $query = get('contact');

    if (! $query) {
        return;
    }

    if (! empty($query['antibot'])) {
        return;
    }

    //mail($site->email(), sprintf("Contact form site by %s", $query['name']), $query['message'], sprintf("From: <%s> %s", $query['email'], $query['name']));

    $email = email([
        'to' => $site->email(),
        'from' => $query['email'],
        'subject' => sprintf("Contact form site by %s <%s>", $query['name'], $query['email']),
        'body' => $query['message']
    ]);

    return ($email->send()) ? [ 'contact_form_success' => true ] : [ 'contact_form_error' => $email->error() ];
};