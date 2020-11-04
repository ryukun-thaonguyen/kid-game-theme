<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class= "game-header">
		<div class ="name-game">
			<a href="<?php the_permalink(); ?>" > 
				<p> <?php the_title(); ?> </p>
			</a>
		</div>
	</div>
	<div class= "game-conten">
		<div> <?php the_post_thumbnail('thumbnail');?></div>
		<p> <?php the_excerpt(); ?> </p>
	</div>
	<div class= "game-function">
		<a href="<?php the_permalink(); ?>" > 
			<button> Lest Go </button>
		</a>
	</div>
</article>

