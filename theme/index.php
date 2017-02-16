

<?php get_header(); ?>

<?php get_template_part('loop'); ?>

<?php get_page($_GET['page_id'])?>

<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>
