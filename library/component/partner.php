<?php

$logo = get_sub_field( 'logo' );
$content = get_sub_field( 'content' );

?>
<div class="partner">
    <div class="logo">
        <img src="<?php print $logo ?>" />
    </div>
    <div class="content">
        <?php print $content ?>
    </div>
</div>