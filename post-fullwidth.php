<?php
/*
Template Name Posts: Full-width
*/
?>

<style type="text/css">
    .single-post .main {   width: 100% !important; border: 0px !important; margin-bottom: 60px; }
    .single-post .sidebar { width: 100% !important; border-top: 1px solid #eee !important; }
    .single-post.responsive .sidebar section { padding-left: 0 !important; }
</style>

<?php get_template_part('templates/content', 'single'); ?>