<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class= "game-header">
		<div class ="name-game">
			<p> <?php the_title(); ?> </p>
		</div>
	</div>
	<div class= "game-conten">
		<div> <?php the_post_thumbnail('thumbnail');?></div>
		<p> <?php the_excerpt(); ?> </p>
	</div>
	
</article>
