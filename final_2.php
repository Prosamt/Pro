<html>
    <head>
        <title>PRO PRODUCT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="packeges/bootstrap.min.css">
        <link rel="stylesheet" href="packeges/jquery.js" >
        <link rel="stylesheet" type="text/css" href="packeges/waiting.css" >
        <link rel="Icon" type="image/x-icon" href="images/logo.png">
    </head>
    <body>
        <div class="navigation">
        <img src="images/logo.png" class="logo" />
            <div>
        
            </div>
        </div>
        
        <div class="container-fluid topSpase" >
            <div class="row justify-content-around flex-xl-nowrap d-flex justify-content-center">
                <div class="col-8">
                    <p class="tt"><b>DATE </b><?php
                        $DMY = date('d/m/Y');
                        $H = date('h');
                        $M = date('i');
                        $S = date('s');
                        echo " ".$DMY. "  ". $H.':'.$M.":".$S;
                        ?></p>
                    <p class="tt">Your order will be delivered within 5 or 7 days</p>
                    <p class="tt">You will be transferred to the page of instagram shortly</p>
                    <div class="FLOATRegiht">
                    
                    </div>
                    
                    
                    <img class="IMGWait" src="packeges/ok.gif" />
                </div>
                </div>
            </div>
        </div>
        
        <script src="packeges/jquery.js"></script>
        <script src="packeges/bootstrap.min.js"></script>
        <script>
            var delay = 20000; // time in milliseconds
            setTimeout(function(){
                window.location = "https://www.instagram.com/p/C7FZNCuNxdM/?igsh=MTU4eTVvMjh1dXZoMg==";
            },delay);

        </script>
    </body>
</html>