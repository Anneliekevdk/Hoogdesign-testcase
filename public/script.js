function changeImg() {
    var image = document.getElementById('myImg');
    if (image.src.match("assetsTestCase/engels.png")) {
        image.src = "assetsTestCase/nederland.png";
    }
    else {
        image.src = "assetsTestCase/engels.png";
    }
}
