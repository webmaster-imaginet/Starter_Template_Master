<?php get_header(); ?>
<?php //Template Name: Accessiblity  ?>
<div class="page-wrap" id="page-wrap">
    <div class="container main-container">
        <h1>
           <?php the_field('title'); ?>
        </h1>
        <div class="content">
            <?php the_field('content'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
