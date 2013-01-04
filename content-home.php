<div class="alert">
	
</div>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
		<div class="stroy-content>">
			<?php the_content()?>
		</div>
	<?php endwhile?>
<?php endif ?>
