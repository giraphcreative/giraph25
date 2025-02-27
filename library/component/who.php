<?php



?>
<div class="who">
    <div class="title"><h2>Who we are</h2></div>
    <div class="who-people">
        <div class="primary">
            <?php if ( have_rows( 'primary' ) ) :
                while ( have_rows( 'primary' ) ) : the_row(); ?>
            <div class="person" style="background-image: url(<?php print the_sub_field( 'photo' ) ?>);">
                <div class="abbrev"><?php the_sub_field( 'abbrev' ); ?></div>
                <div class="person-content">
                    <?php the_sub_field( 'bio' ); ?>
                </div>
            </div>
                <?php endwhile;
            endif; ?>
        </div>
        <div class="secondary">
            <?php if ( have_rows( 'secondary' ) ) :
                while ( have_rows( 'secondary' ) ) : the_row(); ?>
            <div class="person" style="background-image: url(<?php print the_sub_field( 'photo' ) ?>);">
                <div class="abbrev"><?php the_sub_field( 'abbrev' ); ?></div>
                <div class="person-content">
                    <?php the_sub_field( 'bio' ); ?>
                </div>
            </div>
                <?php endwhile;
            endif; ?>
        </div>
        <div class="collaborators">
            <?php if ( have_rows( 'collabs' ) ) :
                while ( have_rows( 'collabs' ) ) : the_row(); ?>
            <div class="person" style="background-image: url(<?php print the_sub_field( 'photo' ) ?>);">
                <div class="abbrev"><?php the_sub_field( 'abbrev' ); ?></div>
                <div class="person-content">
                    <?php the_sub_field( 'bio' ); ?>
                </div>
            </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>