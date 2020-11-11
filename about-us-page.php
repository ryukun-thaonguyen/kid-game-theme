<?php
/*
Template Name: About Us
*/

get_header()
?>
<div class="header"></div>
<div class="container2">
    <div class="about">
        <div class="left">
            <h1>About us</h1>
            <hr>
            <p>The purpose of Bee Play is to provide a resource helping involve
                children in mission education and mobilization. Involvement in missions begins with
                living one’s faith, daily. This resource will assist leaders to bridge games and activities
                into helping children discover the needs of people around the world and in responding to
                those needs.</p>
        </div>
        <div class="right">
            <img src="https://www.commbank.com.au/content/dam/commbank/assets/commbank-cards/images/2-clm-gdnc/Man-son-laptop-computer-child-parent-home_cbguid2.jpg">
        </div>
    </div>
    <div class="mission">
        <div class="left">
            <img src="https://miro.medium.com/max/1000/1*RPhktRPrxNFGKG_wTXbljA.jpeg">
        </div>
        <div class="right">
            <h1>Mission Statement</h1>
            <hr>
            <p>The purpose of Bee Play is to provide a resource helping involve
                children in mission education and mobilization. Involvement in missions begins with
                living one’s faith, daily. This resource will assist leaders to bridge games and activities
                into helping children discover the needs of people around the world and in responding to
                those needs.</p>
        </div>
    </div>
</div>
</div>
<?php get_footer();
?>
</body>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    body {
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
        position: relative;
    }

    .header {
        margin-top: 50px;
        width: 100%;
        height: 900px;
        background-color: rgb(30, 173, 255);
        background-image: url('<?php echo get_stylesheet_directory_uri().'/assets/uploads/kids-touch-the-screen.png'; ?>');
        background-size: cover;
        background-position: bottom;
    }

    .container2 {
        width: 100%;
    }

    .container2 h1 {
        font-size: 50px
    }

    .about {
        padding: 5% 0;
        width: 100%;
        height: auto;
        background-color: #1aaae8;
    }

    .about .left {
        padding: 2% 0;
        float: left;
        width: 50%;
        display: inline-block;
        color: white;
    }

    .about .right {
        width: 50%;
        display: inline-block;
    }

    .about .right img {
        width: 100%;
    }

    .about .left h1 {
        text-align: center;
        color: white;
        margin: 0 0 10px 0;
    }

    .about .left hr {
        width: 20%;
        border-top: 2px solid #000;
        border-bottom: none;
    }

    .about .left p {
        font-size: 1rem;
        margin: 40px auto;
        width: 80%
    }

    .mission {
        padding: 5% 0;
        width: 100%;
        height: auto;
        background-color: #1aaae8;
    }

    .mission .right {
        padding: 2% 0;
        width: 50%;
        color: white;
        display: inline-block;
    }

    .mission .left {
        float: left;
        width: 50%;
        display: inline-block;
    }

    .mission .left img {
        width: 100%;
    }

    .mission .right h1 {
        text-align: center;
        color: white;
        margin: 0 0 20px 0;
    }

    .mission .right hr {
        width: 35%;
        border-top: 2px solid #000;
        border-bottom: none;
    }

    .mission .right p {
        font-size: 1rem;
        margin: 40px auto;
        width: 80%
    }
</style>
</html>