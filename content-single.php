<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
		<div class="post">
			<h2><?php the_title()?></h2>
			<div class="meta">
				<span class="author">by <?php the_author()?></span>
				<span class="span4">Publsihed on <?php the_time(get_option('data_format')) ?></span>
				<span class="num-comments"><?php comments_number('no comments')?></span>
			</div>
			<div class="story-content">
				<?php the_content()?>
			</div>
		</div>
		<?php 
		//if(comments_open()) :
			// Display list of comments
		//	$comments = get_comments(array('post_id'=>$post->ID));	
		comments_template();
		?>
		<?php //endif?>
	<?php endwhile?>
<?php endif ?>
