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
    width: 98%;
    padding-left: 1%;
    padding-right: 1%;
    display: flex;
    margin-top: 6%;
}

.game-conten img {
    width: 100%;
    border-radius: 10px;
    max-height: 260px;
    margin-left: 32%;
    margin-bottom: 59%;
}

.game-conten p{
    margin-left: 6%;
    display: -webkit-box;
    max-width: 53%;
    font-size: 18px;
    max-height: 281px;
    line-height: 1;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

</style>