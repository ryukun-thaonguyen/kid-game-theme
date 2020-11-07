
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="article-content-single">
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

			<div class="entryModal">
				<div class="modalModifier">
					<button class="btn btn-modal" id="btn-modal--open">Nhấn để mở modal</button>

					<div id="modalNextGame" class="modalNextGame">
						<div class="modal__content">
							<button class="btn btn-close"><i class="fa far fa-times-circle"></i></button>
							<h5 class="modal__title">Bạn đã thắng</h5>

							<div class="modal__action">
								<button class="btn btn-back">Quay lai</button>
								<button class="btn btn-next">Tiep tuc</button>
							</div>
						</div>
					</div>
				</div>
				
			</div>
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

	var modal = document.getElementById("modalNextGame");
	var btn_modalOpen = document.getElementById("btn-modal--open");
	var btn_modalClose = document.getElementsByClassName("btn-close")[0];

	// When the user clicks the button, open the modal 
	btn_modalOpen.onclick = function() {
		modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	btn_modalClose.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>