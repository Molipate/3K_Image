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

            <a href="<?=BASE_URL?>index.php/main/videos" style="background:red;">
                <title>Visionnes nos vidéos !</title>
                <polygon  points="225,0,258,156,0,390" id="p_video" fill-opacity="0" ></polygon>
                <text x="150" y="150" fill="black">Nos vidéos</text>
            </a>

            <a href="<?=BASE_URL?>index.php/main/contact"  >
                <title>Contactez nous !</title>
                <polygon  points="225,0,298,341,450,390" id="p_contact" fill-opacity="0"></polygon>
                <text x="310" y="320">Contacts</text>
            </a>


            <a href="" >
                <title>Rejoignez nous !</title>
                <polygon  points="0,390,310,390,298,341,118,283" id="p_rejoindre" fill-opacity="0"></polygon>
                <text x="100" y="350">Nous rejoindre !</text>
            </a>
        </svg>
        </div>
        <svg height="110" width="450" >
            <a href="<?=BASE_URL?>index.php/main/association" id="link" >
                <title>Mieux nous connaître</title>
                <image xlink:href="<?=BASE_IMG?>name.png" x="0" y="60" height="37px" width="400px"></image>
            </a>

        </svg>
        <script>
            var svg = $('svg');
            var path_speed = 500;
            svg.hide();
            $(document).ready(function(){
               svg.fadeIn(1500);
            });
            var draw = SVG('drawing').size(450, 390);
            var polygon2 = draw.polygon('225,0 298,341 450,390').fill('white').stroke({ width: 1 });
            var polygon1 = draw.polygon('225,0 258,156 0,390').fill('white').stroke({ width: 1 });

            var polygon3 = draw.polygon('0,390 310,390 298,341 118,283').fill('white').stroke({ width: 1 });

            var html1 = "<title>Rejoignez nous !</title>";
            $("a").click(function(){

            	$("svg:eq(0)").fadeOut();

                polygon2.animate(path_speed).plot([[225,0], [118,283], [0,390]]);
                setTimeout(function(){
                    polygon2.hide();
                    polygon1.animate(path_speed).plot([[450,390], [298,341], [0,390]]);
                },path_speed);

                setTimeout(function(){

                    $('svg:eq(1)').slideUp(path_speed);
                    //$("svg").slideUp();
                    setTimeout(function(){
                    
                    $("svg").eq(1).fadeOut(path_speed);
                    //$("svg").slideUp();

                	},path_speed);
                },3*path_speed);
                
                var href = $(this).attr('href');

                // Delay setting the location for one second
                setTimeout(function() {window.location = href}, 4*path_speed);
                return false;
            });

        </script>
    </body>
</html>
