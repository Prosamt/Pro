
<html>
    <head>
        <title>PRO PRODUCT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="packeges/bootstrap.min.css">
        <link rel="stylesheet" href="packeges/jquery.js" >
        <link rel="stylesheet" type="text/css" href="packeges/index4.css" >
        <link rel="Icon" type="image/x-icon" href="images/logo.png">
   


    </head>

         
    <body>
       
   
        <div class="navigation">
        <img src="images/logo.png" class="logo" />
            <div style="display: flex;">
                <!-- <span class="spanNAV d-none d-sm-block"><a class="decoA" href="#">Rechercher</a><img src ="images/search.svg" class="icon-nav" /></span>
                <span class="spanNAV d-none d-sm-block"><a class="decoA" href="#">Connexion</a><img src ="images/user.svg" class="icon-nav" /></span>
                    <span><a class="decoA" href="#">Plus</a><img src ="images/menu.svg" class="icon-nav" /></span> -->
            </div>
        </div>
        <div class="container-fluid topSpase" >
            <div class="row justify-content-around flex-xl-nowrap d-flex justify-content-center">
                <!-- <div class="col-8"> -->
                 
                <!-- <h1 class="toto">LUCKY SPINNER</h1> -->
                <IMg src="https://t4.ftcdn.net/jpg/06/19/88/93/360_F_619889320_FF8bJJ1BvvQKYJGuOjQaP9IreJvyGrPk.jpg" class="toto"></IMg>
 
   
    <div class="wrapper">
        <div class="tombola">
            <div class="panel p1"></div>
            <div class="panel p2"></div>
            <div class="panel p3"> </div>
            <div class="panel p4"></div>
            <div class="panel p5"></div>
            <div class="panel p6"></div>
            <div class="panel p7"></div>
            <div class="panel p8"></div>
        </div>
        <button class="start-button">CLICK TO SPIN</button>
    </div>
    <!-- <p>The main sticking point was realizing that translateZ() happens <em>after</em> the rotation of the panels. Also getting the tombola to rotate around the 'center' point using the 'Z' attribute of the transform-origin property</p>
    <p><b>To-do:</b> Some sort of 'lighting' effect.</p> --> 

    <div class="overlay" id="alertOverlay">
        <div class="alert-box">
            <img src='packeges/iphw.png' alt='iphone 15'>
            <p>Congratulations! You won an iPhone 15!</p>
            <!-- <button onclick="closeAlert()">Close</button> -->
            <BUtton onclick="window.location.href='iphone15.php'" > NEXT </BUtton>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>
        $(document).ready(function() {
            $(".start-button").click(function () {
                var fixedRotation = 1530; // Fixed rotation value
                $(".tombola").css({
                    transform: "rotateX(" + fixedRotation + "deg) translateZ(-480px)"
                });

                setTimeout(function() {
                    showAlert();
                }, 4000); // Show alert after 4 seconds
            });
        });

        function showAlert() {
            document.getElementById('alertOverlay').style.display = 'flex';
        }

        function closeAlert() {
            document.getElementById('alertOverlay').style.display = 'none';
        }
    </script>
</body>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                <div class="col">
                <p class="Foo">www.proproduct.com</p>
                <p class="Foo">instagram : pro_product_12</p>
                <p class="Foo">Verified by Visa</p>
                <p class="Foo">Mastercard SecureCode®</p>
                <p class="Foo">Apple Premium Reseller</p>
            </div>
        
            </div>
            <div class="col GRIDDIV">
                <a class="BTNFoo" href="https://www.instagram.com/p/C7FZNCuNxdM/?igsh=MTU4eTVvMjh1dXZoMg==">instagram </a>
                <a class="BTNFoo" href="https://www.apple.com/in/buy/apr/">Apple Premium Reseller</a>
            </div>
                    <div style="margin-top:10px;" class="col-12">
                        <img src="images/logo.png" width="120px" />
                    </div>
            </div>
            </div>
            
        </footer>
        
        <script src="packeges/jquery.js"></script>
        <script src="packeges/bootstrap.min.js"></script>
    </body>
</html>