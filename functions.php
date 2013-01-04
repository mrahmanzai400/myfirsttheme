<?php
// Register a single navingation menu, to be constructed in the admin panel, and displayed in nav.php
register_nav_menus(array(
	'primary' => 'Primary Navigation'		
));


function bowlgamewinner_comment_formal () {
	global $post;
	?>
	<form method="post" action="<?php bloginfo('url');?>/wp-comment">
	
		<input type="hidden" name="comment_post_ID" value="<?php echo$post->ID;?>"></input>
		<input type="hidden" name="comment_parent" id="comment_parent" value="0"></input>
		
		<label for="author">Name<input type="text" name="author" placeholder="required" class="span2"></input></label>
		<label for="email">Email<input type="text" name="email" placeholder="required" class="span2"></input></label>	
		
		<textarea rows="5" cols="20" name="comment"></textarea>
		<input type="submit" class="submit bt btn-primary" value="post Comment"></input>
	</form>
<?php }?>