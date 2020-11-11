<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
        $the_query = new WP_Query('p='.$id);
        if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part('template-parts/content');
                }   
        } else {
                get_template_part('template-parts/content-none');
        }
        wp_reset_postdata();
?> 

<style>
.game-header{
    width: 110%;
    text-align: center;
    align-items: center;
    padding-left: 2%;
    padding-right: 2%;
    margin-bottom: -10%;
    margin-top: 10%;

}
.game-header .name-game{
    margin-top: 23%;
    width: 100%;
    margin-bottom: 77px;
    margin-left: -5%;
}
.game-header .name-game p{
    font-size: 35px;
    text-decoration: underline;
    font-family: cursive;
    color:#f74545;
    text-transform: capitalize;
}

.game-header .name-game p:hover{
    font-size: 45px;
}

.game-conten{
    height: 25%;
    width: 98%;
    padding-left: 1%;
    padding-right: 1%;
    margin-top: 6%;
}

.game-conten img {
    width: 45%;
    border-radius: 10px;
    max-height: 260px;
    margin-top: 19%;
    margin-left: 27%;
}

.note{
    padding-left: 3%;
    padding-right: 3%;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    position: absolute;
    border: 1px solid;
    border-radius: 35px;
    background-color: white;
    text-align: center;
    border: 3px dashed #63a755;
    width: 89%;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    background: #8de8b2;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
}
.note:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: #e1e1e1;
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  -webkit-transform-origin: 50%;
  transform-origin: 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.note:hover, .note:focus, .note:active {
  color: black;
}
.note:hover:before, .note:focus:before, .note:active:before {
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
}
.show{
    display: none;
}

</style>