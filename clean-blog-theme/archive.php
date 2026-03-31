<?php get_header(); ?>

<div class="container">

<h1><?php the_archive_title(); ?></h1>

<?php if ( have_posts() ) : ?>

<div class="product-archive">

<?php while ( have_posts() ) : the_post(); ?>

<div class="product-item">

<h2>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h2>

<?php the_post_thumbnail(); ?>

</div>

<?php endwhile; ?>

</div>

<?php else : ?>

<p>No products found.</p>

<?php endif; ?>

</div>

<?php get_footer(); ?>