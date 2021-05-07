<?php get_header(); ?>

<div class="container">
    <div class="row">

        <div class="col">
            <div class="row">
	            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <!-- post -->

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                            </div>
                            <div class="card-body">
					            <?php if (has_post_thumbnail()): ?>
						            <?php the_post_thumbnail('thumbnail', array(
							            'class' => 'float-left mr-3'
						            )); ?>
					            <?php else: ?>
                                    <img class="float-left mr-3" src="http://picsum.photos/150/150" width="150"
                                         height="150" alt="">
					            <?php endif; ?>
                                <p class="card-text"><?php the_excerpt();  //the_content(''); ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Читать далее', 'test'); ?></a>
                            </div>
                        </div>
                    </div>

	            <?php endwhile; ?>
                    <!-- post navigation -->
		            <?php the_posts_pagination( array(
			            'show_all'     => false, // показаны все страницы участвующие в пагинации
			            'end_size'     => 1,     // количество страниц на концах
			            'mid_size'     => 1,     // количество страниц вокруг текущей
			            'type'         => 'list',
		            )); ?>
	            <?php else: ?>
                    <!-- no post found -->
                    <p><?php _e('Постов нет...', 'test'); ?></p>
	            <?php endif; ?>
            </div>

        </div>

        <?php //get_sidebar(); ?>
    </div>
</div>

<?php
//$query =  new WP_Query('cat=31,21&posts_per_page=-1')
$query =  new WP_Query(array(
        //'cat' => '21, 31',
        'category_name' => 'edge-case-2, markup',
        'posts_per_page' => '-1',
        'orderby' => 'title',
        'order' => 'ASC',
))
 ?>
<?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
    <!-- post -->
    <h3><?php the_title(); ?></h3>
<?php endwhile; ?>

<?php else: ?>
    <!-- no post found -->
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>