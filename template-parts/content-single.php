
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="blog-post-wrap full-width" >

		<div class="entry-title">
			<div class="game-title">
				<li>
					<?php the_title(); ?> 
				</li>
			</div>
			<div class="game-action">
				<button class="btn-game-action btn-add-favorite"><i class="fa far fa-star"></i><span>Add favorite</span></button>
				<button class="btn-game-action btn-full-screen" onclick="openFullscreen();"><i class="fa fas fa-expand"></i><span>Full Screen</span></button>
			</div>
		</div>

		<!-- insert iframe game -->
		<div class="frame">
		
			<?php
				the_content();
			?>
		</div><!-- .entry-content -->

	</div><!-- .blog-post-wrap -->


</article><!-- #post-## -->

<!-- Code for full screen. -->
<script>
// Cai id nay la do viet thang trong cai iframe trong bai post
var btn= document.getElementsByTagName("iframe")[0];
btn.setAttribute('id','id-iframe');


//var elem = document.getElementById("id-iframe");
function openFullscreen() {
  if (btn.requestFullscreen) {
    btn.requestFullscreen();
  } else if (btn.webkitRequestFullscreen) { /* Safari */
    btn.webkitRequestFullscreen();
  } else if (btn.msRequestFullscreen) { /* IE11 */
    btn.msRequestFullscreen();
  }
}
</script>