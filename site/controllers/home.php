<?php

return function ($site, $pages, $page, $args) {
    $query = get('contact');

    if (! $query) {
        return;
    }

    $email = email([
        'to' => $site->email(),
        'from' => $query['email'],
        'subject' => sprintf("Contact form site by %s <%s>", $query['name'], $query['email']),
        'body' => $query['message']
    ]);

    return $email->send();
};