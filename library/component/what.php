<?php

$title = get_sub_field( 'title' );
$intro = get_sub_field( 'intro' );

?>
<div class="what" id="what">
<?php

if ( !empty( $title ) && !empty( $intro ) ) :
    ?>
    <h2><?php print $title ?></h2>
    <div class="intro">
        <?php print $intro ?>
    </div>
    <div class="icons">
    <?php
endif;

if ( have_rows( 'icons' ) ) :
    while ( have_rows( 'icons' ) ) : the_row();
        $icon_image = get_sub_field( 'icon' );
        $icon_color = get_sub_field( 'color' );
        $icon_title = get_sub_field( 'title' );
        $icon_content = get_sub_field( 'content' );
        ?>
        <div class="icon">
            <div class="icon-image <?php print $icon_color; ?>"><div class="icon-image-inner"><img src="<?php print $icon_image ?>" /></div></div>
            <div class="icon-content">
                <h3><?php print $icon_title; ?></h3>
                <?php print $icon_content; ?>
            </div>
        </div>
        <?php
    endwhile;
endif;

?>
    </div>
</div>
