<!DOCTYPE html>
<html lang="nl">
<head>
    <title>De website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar navigationBar">
    <div class="container-fluid navigationBar__container">
        <div class="navbar-header">
            <a class="navbar-brand navigationBar__aLogo" href="#"><img src="assetsTestCase/logo-clr.svg"></a>
        </div>
        <ul class="nav navbar-nav navigationBar__ul">
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

            <div class="navigationBar__buttonAndFlagPosition">
                <a href="#" class="myButton">CONTACT</a>
                <img src="assetsTestCase/nederland.png" class="navigationBar__flag" id="myImg" onclick="changeImg()">
            </div>
        </ul>
    </div>
</nav>
{{--end navigation section/ einde navigatie gedeelte----------------------------------------------------------------------}}
{{------------------------------------------------------------------------------------------------------------------------}}
{{--start cover/ eerste gedeelte------------------------------------------------------------------------------------------}}
<div class="cover">
    <img src="assetsTestCase/header-img.jpg" class="cover__img">
    <div class="cover__wrapper">
        <p class="cover__pText">
            Het Logo is dé partner op het gebied van <b>bouw</b> en <b>verbouwing,
            milieuvraagstukken</b> en <b>automatisering</b> voor <b>foodindustrie.</b>
        </p>
        {{--Ik weet niet precies hoe dit werkt maar ja het werkt dankzij w3--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <div class="container cover__toggel">
            <a href="#" data-toggle="popover" data-content="Ik ga nergens heen ( ͡❛ ͜ʖ ͡❛)" class="cover__toggel--aStyle" style="position: absolute;">Belafspraak inplannen ›</a>
        </div>

        <script>
            $(document).ready(function () {
                $('[data-toggle="popover"]').popover();
            });
        </script>
    </div>
{{--Here the blue and green boxes start/de groene en blauwe blocken starten hier--}}
    <div class="container-fluid boxPosition">
        <div class="row boxPosition__row">
            <div class="col iconBoxes iconBoxes--first ">
                <img src="assetsTestCase/tactic.svg" class="iconBockes__image">
                <p class="iconBockes__description" >pijltje 1</p>
            </div>
            <div class="col iconBoxes iconBoxes--first">
                <img src="assetsTestCase/factory.svg" class="iconBockes__image">
                <p class="iconBockes__description" >pijltje 2</p>
            </div>
            <div class="col iconBoxes iconBoxes--first">
                <img src="assetsTestCase/tactic.svg" class="iconBockes__image">
                <p class="iconBockes__description" >Masterplanning & Logistiek</p>
            </div>
            <div class="col iconBoxes iconBoxes--first">
                <img src="assetsTestCase/factory.svg" class="iconBockes__image">
                <p class="iconBockes__description" >pijltje 4</p>
            </div>
            <div class="col iconBoxes iconBoxes--second">
                <img src="assetsTestCase/tactic2.svg" class="iconBockes__image">
                <p class="iconBockes__description" >pijltje 5</p>
            </div>
            <div class="col iconBoxes iconBoxes--second">
                <img src="assetsTestCase/factory2.svg" class="iconBockes__image">
                <p class="iconBockes__description" >pijltje 6</p>
            </div>
            <div class="col iconBoxes iconBoxes--second">
                <img src="assetsTestCase/tactic2.svg" class="iconBockes__image">
                <p class="iconBockes__description" >pijltje 7</p>
            </div>
            <div class="col iconBoxes iconBoxes--second">
                <img src="assetsTestCase/factory2.svg" class="iconBockes__image">
                <p class="iconBockes__description" >pijltje acht</p>
            </div>
        </div>
    </div>

</div>
{{---end cover/ einden eerste plaatje, gedeelte-----------------------------------------------------------------------}}
{{--------------------------------------------------------------------------------------------------------------------}}
{{--start mainPart of site/ belangrijkste gedeelte van de site--------------------------------------------------------}}
<div class="mainWidth">
        <div class="mainWidth__wrapperText">
            <h2><b>Actueel</b></h2>
        </div>
        <div class="mainWidth__wrapperTwoPictures">
            <div class="mainWidth__wrapPicture">
                <img src="assetsTestCase/beyond-meat.jpg" class="mainWidth__img">
                <div class="mainWidth__textPictureDiv">
                    <p><b>Het Logo neemt Adviesburo Bureay over</b></p>
                    <p>19-01-2021</p>
                </div>
                <div class="main__arrow">
                    <p>›</p>
                </div>
            </div>
            {{--different picture/ het andere plaatje--}}
            <div class="mainWidth__wrapPicture">
                <img src="assetsTestCase/zandbergen.jpg" class="mainWidth__img">
                <div class="mainWidth__textPictureDiv">
                    <p><b>Het Logo neemt Adviesburo Bureay over</b></p>
                    <p>19-01-2021</p>
                </div>
                <div class="main__arrow">
                    <p>›</p>
                </div>
            </div>
    </div>
{{---end part 1/ einde deel 1-----------------------------------------------------------------------------------------}}
{{--------------------------------------------------------------------------------------------------------------------}}
{{---start part 2 robot/ start deel 2 robot---------------------------------------------------------------------------}}
    <div class="robot">
        <div class="robot__textPositionTotal">
            <div class="robot__textPosition">
                <p class="robot__textPositionTitle">
                    <b>
                        Het Logo is al 40 jaar de specialist in de voedingsmiddelenindustrie
                    </b>
                </p>
                <p class="robot__textPositionTextp">
                    Het Logo levert oplossingen op het gebied van automatisering,
                    milieu advies, masterplanning en logistieke inrichtingen. Dit maakt
                    Het Logo één van de meest complete, innovatieve en
                    vooraanstaande organisaties op het gebied van
                    rendementsverhogende oplossingen binnen de foodsector.
                </p>
            </div>
            <div class="robot__buttonPosition">
                <p>Meer over Het Logo <b class="robot__buttonPositionBold">   ›</b></p>
            </div>
        </div>
        <img src="assetsTestCase/robot.jpg" class="robot__img">
    </div>
{{---end part 2 robot/ einde deel 2 robot-----------------------------------------------------------------------------}}
{{--------------------------------------------------------------------------------------------------------------------}}
{{--Opdrachtgevers----------------------------------------------------------------------------------------------------}}
    <div class="client">
        <h2><b>Trots op onze opdrachtgevers</b></h2>
    </div>
    <div class="container client__container">
        <div class="row justify-content-md-center client__row" >
            <div class="client__opdrachtGeverCOL col">
                <div class="client__opdrachtGevers">
                    <img src="assetsTestCase/hoogvliet.png" class="client__hoogvliet">
                </div>
            </div>
            <div class="client__opdrachtGeverCOL col">
                <div class="client__opdrachtGevers">
                    <img src="assetsTestCase/vitelco.png" class="client__vitelco">
                </div>
            </div>
            <div class="col client__opdrachtGeverCOL">
                <div class="client__opdrachtGevers">
                    <img src="assetsTestCase/encko.png" class="client__encko">
                </div>
            </div>
            <div class="col client__opdrachtGeverCOL">
                <div class="client__opdrachtGevers">
                    <img src="assetsTestCase/hoogvliet.png" class="client__hoogvliet">
                </div>
            </div>
            <div class="col client__opdrachtGeverCOL">
                <div class="client__opdrachtGevers">
                    <img src="assetsTestCase/vitelco.png" class="client__vitelco">
                </div>
            </div>
            <div class="col client__opdrachtGeverCOL">
                <div class="client__opdrachtGevers">
                    <img src="assetsTestCase/encko.png" class="client__encko">
                </div>
            </div>
            <div class="col client__opdrachtGeverCOL">
                <div class="client__opdrachtGevers">
                    <img src="assetsTestCase/hoogvliet.png" class="client__hoogvliet">
                </div>
            </div>
        </div>
    </div>
    <div>
        <p class="client__text">
            <b>Bekijk de case studies   ›</b>
        </p>
    </div>
</div>
{{--end main----------------------------------------------------------------------------------------------------------}}
{{--de footer---------------------------------------------------------------------------------------------------------}}
<footer>
    <div class="container footer__container">
        <div class="row">
            <div class="col">
                <img src="assetsTestCase/logo-white.svg">
                <p>
                    <br>
                    <br>
                    Keulenstraat 12
                    <br>
                    7418 ET Deventer
                    <br>
                    <br>
                    T. +31(0)570 820 210
                    <br>
                    M.info@hoogdesign.nl
                    <br>
                    <br>
                    <br>
                    <br>
                </p>

                <div class="row footer__containerSocials" >
                    <div class="col">
                        <img src="assetsTestCase/linkedin-2-24.png">
                    </div>
                    <div class="col">
                        <img src="assetsTestCase/twitter-24.png">
                    </div>
                    <div class="col">
                        <img src="assetsTestCase/facebook-7-24.png">
                    </div>
                    <div class="col">
                        {{--needs to stay empty for better layout/deze moet leeg blijven voor een betere verdeling--}}
                    </div>
                </div>
            </div>
            <div class="col">
                <p>
                    <b>Project diensten</b>
                    <br><br>
                    Submenu item
                    <br><br>
                    Submenu item
                    <br><br>
                    Submenu item
                    <br><br>
                    Submenu item
                    <br><br>
                    Submenu item
                    <br><br>
                </p>
            </div>
            <div class="col">
                <p>
                    <b>Project automatisering</b>
                    <br><br>
                    Submenu item
                    <br><br>
                    Submenu item
                    <br><br>
                    Submenu item
                    <br><br>
                    Submenu item
                    <br>
                </p>
            </div>
            <div class="col">
                {{----needs to stay empty/ deze moet leeg blijven--}}
            </div>
            <div class="col">
                <p>
                    <b>Service desk (24/7)</b>
                    <br><br>
                    +31(0)0570 820 210
                    <br><br>
                    servicedesk@hoogdesign.nl
                    <br><br>
                    TeamViewer
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
