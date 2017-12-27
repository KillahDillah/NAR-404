<?php
/**
* NAR Customized theme template for taxonomy-category display
*/
?>

<?php include 'hkb-header.php'; ?>

<h2 class="hkb-category__title"><?php echo single_cat_title(); ?></h2>
 
<?php hkb_get_template_part('hkb-compat', 'taxonomy'); ?>

<?php include 'hkb-footer.php'; ?>