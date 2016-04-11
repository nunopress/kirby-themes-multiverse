<div id="main">
    <?php foreach ($page->items()->toStructure() as $item): ?>
        <article class="thumb">
            <a href="<?php echo $page->image($item->item_image())->url() ?>" class="image"><img src="<?php echo $page->image($item->item_thumb())->url() ?>" alt="" /></a>
            <h2><?php echo $item->item_title()->html() ?></h2>
            <?php echo $item->item_text()->kirbytext() ?>
        </article>
    <?php endforeach; ?>
</div>