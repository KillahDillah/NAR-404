<?php
/**
* NAR Customized theme template for single article display
*/
?>

<?php include 'hkb-header.php'; ?>

<h2 class="hkb-category__title"><?php the_title(); ?></h2>

<?php hkb_get_template_part('hkb-compat', 'single'); ?>

<?php include 'hkb-footer.php'; ?>