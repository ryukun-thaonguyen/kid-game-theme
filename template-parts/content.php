<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class= "game-conten">
		<div id="off" onclick="showScript()"> 
			<?php if(has_post_thumbnail()){
				 the_post_thumbnail('thumbnail');
			}else{
				 ?>
				 <img src="<?php echo get_template_directory_uri()?>./assets/uploads/image-post/chellange.png" alt="">
				 <?php
			}
			?>
		</div>
	</div>
	<div class= "game-header">
		<div class="show" id="show">
		<div class="note">
			<?php the_excerpt(); ?> 
		</div>
		</div>
		<div class ="name-game">
			<p> <?php the_title(); ?> </p>
		</div>
	</div>
</article>

<script>
function showScript(){
	var b=document.getElementById('off');
	if(b){
		document.getElementById("show").style.display = "block";
        b.id="on";
	}else{
		b=document.getElementById('on');
		document.getElementById("show").style.display = "none";
        b.id="off";
	} 
}
</script>