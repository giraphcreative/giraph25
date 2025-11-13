<?php

if ( have_rows( 'stats' ) ) :
    ?>
<div class="statistics" id="stats">
    <?php
    while ( have_rows( 'stats' ) ) : the_row();
        $number = get_sub_field( 'number' );
        $label = get_sub_field( 'label' );
        $color = get_sub_field( 'color' );
        ?>
    <div class="stat <?php print $color ?>">
        <div class="stat-inner">
            <span><?php print $number ?></span>
            <?php print $label ?>
        </div>
    </div>
        <?php
    endwhile;
    ?>
</div>
    <?php
endif;


