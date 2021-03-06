<?php get_header(); ?>

    <div id="page">

        <div id="content-wrapper">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                
                <div class="post-heading">
                    <time class="date-published"><?php the_time('M j Y') ?></time>
                    
                    <!-- conditionally displays h1 if is not the frontpage of the site -->
                    <?php if (is_front_page()) : ?>
                        <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <?php else: ?>
                        <h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    <?php endif; ?>
                    
                    <p class="post-author">by <?php the_author_posts_link() ?></p>
                </div><!-- /.post-heading -->

                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                </article><!-- /post_class(); -->

                <?php endwhile; endif; ?>
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

        </div><!-- /#content-wrapper -->

        <!-- includes sidebar -->
        <?php include_once('assets/includes/sidebar.php'); ?>

    </div><!-- /#page -->

<?php get_footer(); ?>