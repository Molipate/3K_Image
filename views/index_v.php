<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=BASE_URL?>assets/css/index.css">
        <script src="<?=BASE_URL?>assets/js/jquery-1.12.0.min.js"></script>
        <script src="<?=BASE_URL?>assets/js/svg.min.js"></script>

        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    </head>
    <body>
        <div id="drawing">
            <svg  id="svggg"height="390" width="450" style="position: absolute;">

                <a href="<?=BASE_URL?>index.php/main/projet" >
                    <title>Nos projets ... </title>
                    <polygon  points="225,0,258,156,0,390" id="p_projet" fill="white"></polygon>
                    <text x="145" y="155" fill="black">Nos projets !</text>
                </a>

                <a href="<?=BASE_URL?>index.php/video/index">
                    <title>Visionnes nos vidéos !</title>
                    <polygon  points="258,156,298,341,118,283" id="p_video"></polygon>
                    <text x="148" y="280" fill="white" font-weight="bold" font-size="1.2em">Nos vidéos !</text>
                </a>

                <a href="<?=BASE_URL?>index.php/main/contact"  >
                    <title>Contactez nous !</title>
                    <polygon  points="225,0,298,341,450,390" id="p_contact" fill="white"></polygon>
                    <text x="310" y="320">Contacts</text>
                </a>

                <a href="" >
                    <title>Rejoignez nous !</title>
                    <polygon  points="0,390,310,390,298,341,118,283" id="p_rejoindre" fill="white"></polygon>
                    <text x="100" y="350">Nous rejoindre !</text>
                </a>
            </svg>
        </div>
        <svg height="110" width="450" >
            <a href="<?=BASE_URL?>index.php/main/association" id="link" >
                <title>Mieux nous connaître</title>
                <image xlink:href="<?=BASE_IMG?>name.png" x="0" y="60" height="37px" width="450px"></image>
            </a>
        </svg>
        <script>
            var svg = $('svg');
            var path_speed = 1000;
            svg.hide();
            $(document).ready(function(){
               svg.fadeIn(path_speed);
            });
            var draw = SVG('drawing').size(450, 390);

            var polygon2 = draw.polygon('225,0 258,156 298,341 450,390').fill("white").stroke({ width: 1 });
            var polygon1 = draw.polygon('225,0 258,156 118,283 0,390').fill("white").stroke({ width: 1 });
            var polygon3 = draw.polygon('0,390 310,390 298,341 118,283').fill("white").stroke({ width: 1 });

            $("a").click(function(){

            	$("svg:eq(0)").fadeOut()

                polygon2.animate(path_speed/2).plot([[225,0], [258,156] , [258,156], [0,390]]);
                setTimeout(function(){
                    polygon2.hide();
                    polygon1.animate(path_speed/2).plot([[225,0], [225,0], [118,283] , [0,390]]);

                },path_speed/2);
                setTimeout(function(){
                    polygon1.animate(path_speed/2).plot([[455,390], [455,390], [118,283] , [0,390]]);
                },path_speed);
                setTimeout(function(){
                    polygon1.animate(path_speed/2).plot([[455,390], [455,390], [0,390] , [0,390]]);
                    polygon3.animate(path_speed/2).plot([[0,390], [450,390], [450,390] , [0,390]]);

                    //$("svg").slideUp();
                    setTimeout(function(){
                        $('svg:eq(1)').slideUp(path_speed);
                        setTimeout(function(){
                            $("svg").eq(2).slideUp(path_speed);
                        },path_speed);
                	},path_speed/2);

                },1.5*path_speed);
                
                var href = $(this).attr('href');

                // Delay setting the location for one second
                setTimeout(function() {window.location = href}, 3.5*path_speed);
                return false;
            });

        </script>
    </body>
</html>
