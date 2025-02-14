<?php

if ( have_rows( 'stats' ) ) :
    ?>
<div class="statistics">
    <?php
    while ( have_rows( 'stats' ) ) : the_row();
        $number = get_sub_field( 'number' );
        $label = get_sub_field( 'label' );
        $color = get_sub_field( 'color' );
        ?>
    <div class="stat <?php print $color ?>">
        <span><?php print $number ?></span>
        <?php print $label ?>
    </div>
        <?php
    endwhile;
    ?>
</div>
    <?php
endif;


