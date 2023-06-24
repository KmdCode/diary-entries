<?php
    require "functions.php";
    check_login();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEED</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php require_once "navigation.php";?>
    <div class="hero" id="home">
        <div class="content">
            <h1>WORD OF THE DAY</h1>
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima aperiam quos veniam? Accusantium, quasi dolor.</h2>
        </div>
        <h1><span>POPULAR ENTRIES</span></h1>
        <div class="friends">
            <div class="list">
                    <div class="box">
                        <h2>BY: NAME <span>DATE: 1 JAN 2023</h2>
                        <div class="image">
                        <h3>Lorem ipsum dolor sit amet repudiandae sunt animi suscipit nobis possimus reprehenderit vitae provident modi quia doloremque distinctio, fugit impedit quis aperiam, labore quae eius commodi. Ullam impedit voluptate error voluptas voluptatibus excepturi at delectus reprehenderit sit nemo.</h3>
                        </div>
                        <button>More</button>
                    </div>
                </div>   
            </div>
    </div>

    <div class="feed" id="feed">

        <div class="name"><h1><span>FEED</span></h1></div>
        <div class="entries">
            <div class="main">
                <div class="info">
                    <h3>USERNAME</h3>
                    <img src="images/profile.jpg" alt="">  
                </div>
                <div class="cont">
                    <h3>DATE: 1 JAN 2023</h3>
                    <p>Lorem ipsum dol</p>
                </div>
            </div>
        </div>
        <div class="entries">
            <div class="main">
                <div class="info">
                    <h3>USERNAME</h3>
                    <img src="images/profile.jpg" alt="">  
                </div>
                <div class="cont">
                    <h3>DATE: 1 JAN 2023</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum facere Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum facere tempore esse dolore nisi quibusdam dicta ea sit iusto ad! Nisi dolor officiis quisquam assumenda. Incidunt cum laudantium aliquid assumenda optio vero harum aut, dicta magnam, delectus quasi? Laborum dolores aliquid praesentium eos eveniet mollitia? Dicta, aperiam repellendus? Assumenda, ducimus.</p>
                </div>
            </div>
        </div>
        <div class="entries">
            <div class="main">
                <div class="info">
                    <h3>USERNAME</h3>
                    <img src="images/profile.jpg" alt="">  
                </div>
                <div class="cont">
                    <h3>DATE: 1 JAN 2023</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum facere Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum facere tempore esse dolore nisi quibusdam dicta ea sit iusto ad! Nisi dolor officiis quisquam assumenda. Incidunt cum laudantium aliquid assumenda optio vero harum aut, dicta magnam, delectus quasi? Laborum dolores aliquid praesentium eos eveniet mollitia? Dicta, aperiam repellendus? Assumenda, ducimus.</p>
                </div>
            </div>
        </div>

    </div>
    

</body>
</html>