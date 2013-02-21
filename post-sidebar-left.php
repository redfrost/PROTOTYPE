<?php
/*
Template Name Posts: Sidebar Left
*/
?>

<style type="text/css">

@media (min-width: 980px) {
.main.span8, .main.span9 {
    border-left: 1px dotted #CCCCCC !important;
    border-right: 0 none;
    padding-left: 19px !important;
    float: left; 
    }    
    .post-template-post-sidebar-left-php .sidebar section { padding-right: 24px; }
}

@media (min-width: 768px){
.main.span8, .main.span9 { border-left: 0px; }

.post-template-post-sidebar-left-php .sidebar,
.float-left  { 
    float: left; 
    margin-left: 0px; 
    padding-left: 0px; 
}

.post-template-post-sidebar-left-php .sidebar section { padding-left: 0px; }
.post-template-post-sidebar-left-php .main, .float-right { float:right; }
}

</style>

<?php get_template_part('templates/content', 'single'); ?>

