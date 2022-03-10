<!DOCTYPE html>
<html lang="nl">
<head>
    <title>De website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="overflow-x: hidden;">

<nav class="navbar navbar" style="margin-bottom: 0.5vw;">
    <div class="container-fluid" style="justify-content: flex-end;">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" style="position: absolute;
float: left;
left: 1vw;
top: 0.3vw;"><img src="assetsTestCase/logo-clr.svg"></a>
        </div>
        <ul class="nav navbar-nav" style="flex-direction: row;
font-size: 15px;
margin-top: 0.5vw;justify-content: center;
align-items: center;">
            <li class="dropdown"><a class="dropdown-toggle topNavText" data-toggle="dropdown" href="#">DIENSTEN</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle topNavText" data-toggle="dropdown" href="#">CASE STUDIES</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle topNavText" data-toggle="dropdown" href="#">MARKTEN</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                </ul>
            </li>
            <li><a href="#" class="topNavText">OVER RBK</a></li>
            <a href="#" class="myButton" style="justify-content: center;
align-items: center;
display: flex;margin-left: 0.5vw;">CONTACT</a>
            <img src="assetsTestCase/nederland.png" style="width: 25px;
height: 20px;margin-left: 1vw">
        </ul>
    </div>
</nav>

{{--<div style="background-image: url(/assetsTestCase/header-img.jpg);width: 100vw;height: 90vh;">    IK had eerst dit geprobeerd--}}
<div>
    <img src="assetsTestCase/header-img.jpg" style="width: 100vw;height: 90vh; position: relative">
    <div style="width: 67vw;
position: absolute;
z-index: 2;
top: 11vw;">
        <p style="background: white;
padding: 2vw;
font-size: 2.8vw;
padding-left: 4vw; margin: 0">Het Logo is dé partner op het gebied van <b>bouw</b> en <b>verbouwing,
                milieuvraagstukken</b> en <b>automatisering</b> voor <b>foodindustrie.</b></p>

        {{--Ik weet ook even niet wat hier gebeurdt--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <div class="container" style="padding: 0.8vw;">
            <a href="#" data-toggle="popover" data-content="Ik ga nergens heen ( ͡❛ ͜ʖ ͡❛)" style="color: white;
font-weight: bold;
font-size: 1vw;
background: #f0761d;
padding: 1vw; text-decoration: none">Belafspraak inplannen ›</a>
        </div>

        <script>
            $(document).ready(function () {
                $('[data-toggle="popover"]').popover();
            });
        </script>
    </div>
    {{--        Hier moeten die blauwe dingen en groenen dingen nog--}}
</div>

<div>
    <div style="width: 71.5vw;
display: flex;
align-content: center;
margin: auto;
  margin-top: auto;
margin-top: 2.5vw;">
        <h2><b>Actueel</b></h2>
    </div>
    <div style="display: flex;justify-content: center;">
        <div class="wrapperPicture">
            <img src="assetsTestCase/beyond-meat.jpg" style="width: 34vw;
">
            <div class="textPictureDiv">
                <p><b>Het Logo neemt Adviesburo Bureay over</b></p>
                <p>19-01-2021</p>
            </div>
            <div style="background: #f0761d;
width: 3vw;
position: relative;
top: -10.5vw;
left: 2vw;">
                <p style="color: white;
font-size: 1.3vw;
padding: 1vw;
background: #f0761d;
display: flex;
justify-content: center;
align-items: center;
width: 3vw;
height: 6vh;">›</p>
            </div>
        </div>
{{--        het andere plaatje--}}
        <div class="wrapperPicture">
            <img src="assetsTestCase/zandbergen.jpg" style="width: 34vw;
">
            <div class="textPictureDiv">
                <p><b>Het Logo neemt Adviesburo Bureay over</b></p>
                <p>19-01-2021</p>
            </div>
            <div style="background: #f0761d;
width: 3vw;
position: relative;
top: -10.5vw;
left: 2vw;">
                <p style="color: white;
font-size: 1.3vw;
padding: 1vw;
background: #f0761d;
display: flex;
justify-content: center;
align-items: center;
width: 3vw;
height: 6vh;">›</p>
            </div>
        </div>
    </div>

</div>

</body>
</html>
