<?php

$title = get_sub_field( 'title' );
$form = get_sub_field( 'form' );
$content = get_sub_field( 'content' );

?>
<div class="form-container" id="connect">
    <h2><?php print $title; ?></h2>
    <div class="form-inner">
        <div class="form">
            <?php print do_shortcode( '[gravityform id="' . $form . '" title="false" description="false" /]' ); ?>
        </div>
        <div class="content">
            <?php print $content; ?>
        </div>
    </div>
</div>