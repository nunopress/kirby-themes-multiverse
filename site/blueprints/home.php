<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  items:
    label: Thumbs
    type: structure
    entry: >
      {{item_title}}<br />{{item_thumb}} - {{item_image}}<br />{{item_text}}
    fields:
      item_title:
        label: Title
        type: text
      item_thumb:
        label: Thumb
        type: text
      item_image:
        label: Image
        type: text
      item_text:
        label: Text
        type: textarea