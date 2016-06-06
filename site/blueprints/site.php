<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  site_title:
    label: Site Title
    type: text
  site_email:
    label: Site Email
    type: text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
  about_title:
    label: About Title
    type: text
  about_text:
    label: About Text
    type: textarea
  social_icons:
    label: Social Icons
    type: structure
    entry: >
      {{social_icon_class}} - {{social_icon_name}} - {{social_icon_link}}
    fields:
      social_icon_class:
        label: Class
        type: text
      social_icon_name:
        label: Name
        type: text
      social_icon_link:
        label: Link
        type: text
  recaptcha_api:
    label: reCaptcha API key
    type: text