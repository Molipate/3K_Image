<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=BASE_URL?>assets/css/index.css">
        <script src="<?=BASE_URL?>assets/js/jquery-1.12.0.min.js"></script>
        <script src="<?=BASE_URL?>assets/js/jQueryRotate.js"></script>
    </head>
    <body>

        <svg height="500" width="450">

            <a href="<?=BASE_URL?>index.php/main/videos" >
                <title>Visionnes nos vidéos !</title>
                <polygon  points="225,0,258,156,0,390" id="p_video"></polygon>
                <text x="150" y="150" fill="black">Nos vidéos</text>
            </a>

            <a href="<?=BASE_URL?>index.php/main/contact"  >
                <title>Contactez nous !</title>
                <polygon  points="225,0,298,341,450,390" id="p_contact"></polygon>
                <text x="310" y="320">Contacts</text>
            </a>

            <a href="" >
                <title>Rejoignez nous !</title>
                <polygon  points="0,390,310,390,298,341,118,283" id="p_rejoindre"></polygon>
                <text x="100" y="350">Nous rejoindre !</text>
            </a>

            <a href="<?=BASE_URL?>index.php/main/association" id="link" >
                <title>Mieux nous connaître</title>
                <image xlink:href="<?=BASE_IMG?>name.png" x="0" y="440" height="37px" width="450px"></image>
            </a>

        </svg>
        <script>
            var svg = $('svg');
            svg.hide();
            $(document).ready(function(){
               svg.fadeIn(1500);
            });



            $("a").click(function(){

                $("#p_video").rotate({
                    angle: 0,
                    center: ["0%", "100%"],
                    animateTo:60
                });
                $("#p_contact").rotate({
                    angle: 0,
                    center: ["100%", "100%"],
                    animateTo:-60
                });
                $("#p_rejoindre").rotate({
                    angle: 0,
                    animateTo:180
                });

                var href = $(this).attr('href');

                // Delay setting the location for one second
                setTimeout(function() {window.location = href}, 2000);
                return false;
            });

        </script>
    </body>
</html>
