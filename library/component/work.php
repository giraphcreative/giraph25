<?php

$title = get_sub_field( 'title' );
$category = get_sub_field( 'work_category' );

$args = array(
    'post_type' => 'work',
    'tax_query' => array(
        array(
            'taxonomy' => 'work-cat',
            'field' => 'slug',
            'terms' => $category->name,
        ),
    ),
);

$work_query = new WP_Query( $args );
if ( $work_query->have_posts() ) :
    ?>
<div class="work-container" id="work">
    <div class="work-title"><h2><?php print $title; ?></h2></div>
    <div class="work">
    <?php
    $row_id = 1;
    while ( $work_query->have_posts() ) : $work_query->the_post();
        ?>
        <div class="work-item" data-id="<?php print $row_id; ?>">
            <?php the_post_thumbnail(); ?>
            <div class="item-description">
                <h3><?php the_title(); ?></h3>
                <h4><?php the_field( 'client' ); ?></h4>
                <?php the_field( 'description' ) ?>
            </div>
        </div>
        <?php
        $row_id++;
    endwhile;
    ?>
    </div>
</div>
    <?php
endif;

wp_reset_postdata();

