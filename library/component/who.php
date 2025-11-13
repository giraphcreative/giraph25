<?php



?>
<div class="who" id="who">
    <div class="title"><h2>Who we are</h2></div>
    <div class="who-people">
        <div class="primary">
            <?php if ( have_rows( 'primary' ) ) :
                while ( have_rows( 'primary' ) ) : the_row(); ?>
            <div class="person" style="background-image: url(<?php print the_sub_field( 'photo' ) ?>);">
                <div class="abbrev"><?php the_sub_field( 'abbrev' ); ?></div>
                <div class="person-content">
                    <h3><?php the_sub_field( 'name' ); ?>, <span><?php the_sub_field( 'title' ) ?></span></h3>
                    <?php the_sub_field( 'bio' ); ?>
                    <div class="hobbies"><p><strong>Hobbies/Interests:</strong><br><?php the_sub_field( 'hobbies' ); ?></p></div>
                    <?php if ( have_rows( 'programs' ) ) : ?>
                        <div class="programs"><p><strong>Favorite Programs:</strong><br>
                        <?php while ( have_rows( 'programs' ) ) : the_row();
                            print '<img src="' . get_sub_field( 'icon' ) . '" title="' . get_sub_field( 'name' ) . '" alt="' . get_sub_field( 'name' ) . '" class="no-lazyload" />';
                        endwhile; ?>
                        </p></div>
                    <?php endif; ?>
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
                    <h3><?php the_sub_field( 'name' ); ?>, <span><?php the_sub_field( 'title' ) ?></span></h3>
                    <?php the_sub_field( 'bio' ); ?>
                    <div class="hobbies"><p><strong>Hobbies/Interests:</strong><br><?php the_sub_field( 'hobbies' ); ?></p></div>
                    <?php if ( have_rows( 'programs' ) ) : ?>
                        <div class="programs"><p><strong>Favorite Programs:</strong><br>
                        <?php while ( have_rows( 'programs' ) ) : the_row();
                            print '<img src="' . get_sub_field( 'icon' ) . '" title="' . get_sub_field( 'name' ) . '" alt="' . get_sub_field( 'name' ) . '" class="no-lazyload" />';
                        endwhile; ?>
                        </p></div>
                    <?php endif; ?>
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
                    <h3><?php the_sub_field( 'name' ); ?>, <span><?php the_sub_field( 'title' ) ?></span></h3>
                    <?php the_sub_field( 'bio' ); ?>
                    <div class="hobbies"><p><strong>Hobbies/Interests:</strong><br><?php the_sub_field( 'hobbies' ); ?></p></div>
                    <?php if ( have_rows( 'programs' ) ) : ?>
                        <div class="programs"><p><strong>Favorite Programs:</strong><br>
                        <?php while ( have_rows( 'programs' ) ) : the_row();
                            print '<img src="' . get_sub_field( 'icon' ) . '" title="' . get_sub_field( 'name' ) . '" alt="' . get_sub_field( 'name' ) . '" class="no-lazyload" />';
                        endwhile; ?>
                        </p></div>
                    <?php endif; ?>
                </div>
            </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>