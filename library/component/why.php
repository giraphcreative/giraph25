<?php

$title = get_sub_field( 'title' );
$content_left = get_sub_field( 'content-left' );
$content_right = get_sub_field( 'content-right' );

?>
<div class="why" id="why">
    <h2><?php print $title; ?></h2>
    <div class="content">
        <div class="content-left">
            <?php print $content_left ?>
        </div>
        <div class="content-right">
            <div class="content-right-inner">
                <?php print $content_right ?>
            </div>
        </div>
    </div>
</div>

