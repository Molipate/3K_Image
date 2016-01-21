<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=BASE_URL?>assets/css/index.css">
        <script src="<?=BASE_URL?>assets/js/jquery-1.12.0.min.js"></script>
        <script src="<?=BASE_URL?>assets/js/jQueryRotate.js"></script>

        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    </head>
    <body>

        <svg height="390" width="500">

            <a href="<?=BASE_URL?>index.php/main/videos" >
                <title>Visionnes nos vidéos !</title>
                <polygon  points="275,0,308,156,50,390" id="p_video"></polygon>
                <text x="200" y="150" fill="black">Nos vidéos</text>
            </a>

            <a href="<?=BASE_URL?>index.php/main/contact"  >
                <title>Contactez nous !</title>
                <polygon  points="275,0,348,341,500,390" id="p_contact"></polygon>
                <text x="360" y="320">Contacts</text>
            </a>


            <a href="" >
                <title>Rejoignez nous !</title>
                <polygon  points="50,390,360,390,348,341,168,283" id="p_rejoindre"></polygon>
                <text x="150" y="350">Nous rejoindre !</text>
            </a>
        </svg>
        <svg height="110" width="500">
            <a href="<?=BASE_URL?>index.php/main/association" id="link" >
                <title>Mieux nous connaître</title>
                <image xlink:href="<?=BASE_IMG?>name.png" x="50" y="60" height="37px" width="450px"></image>
            </a>

        </svg>
        <script>
            var svg = $('svg');
            svg.hide();
            $(document).ready(function(){
               svg.fadeIn(1500);
            });



            $("a").click(function(){

            	$("svg:eq(0) text").fadeOut();

                $("#p_video").rotate({
                    angle: 0,
                    center: ["0%", "100%"],
                    animateTo:43
                });
                $("#p_contact").rotate({
                    angle: 0,
                    center: ["44%", "87%"],
                    animateTo:-60
                });
               
                
                $("#p_rejoindre").rotate({
                    angle: 0,
                    center: ["0%", "100%"],
                    animateTo:-17.3
                });
                
                setTimeout(function(){
                	
                    
                    $("svg").eq(0).slideUp(500);
                    //$("svg").slideUp();
                    setTimeout(function(){
                    
                    $("svg").eq(1).fadeOut(500);
                    //$("svg").slideUp();

                	},500);
                },1000);
                
                var href = $(this).attr('href');

                // Delay setting the location for one second
                setTimeout(function() {window.location = href}, 2500);
                return false;
            });

        </script>
    </body>
</html>
