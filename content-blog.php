<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
		<div class="meta">
			<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
				<div class="meta">
					<span class="author">by <?php the_author()?></span>
					<span class="span4">Publsihed on <?php the_time(get_option('data_format')) ?></span>
					<span class="num-comments"><?php comments_number('no comments')?></span>
				</div>
			<div class="sotry-content">
			<?php the_content()?>
			</div>
		</div>
	<?php endwhile?>
<?php endif ?>


