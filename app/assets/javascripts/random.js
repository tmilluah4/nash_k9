
//////////////////////////////random image script/////////////
var theImages = new Array()

theImages[0] = '/assets/random/1.jpg'
theImages[1] = '/assets/random/2.jpg'
theImages[2] = '/assets/random/3.jpg'
theImages[3] = '/assets/random/4.jpg'

var j = 0
var p = theImages.length;
var preBuffer = new Array()
for (i = 0; i < p; i++){
    preBuffer[i] = new Image()
    preBuffer[i].src = theImages[i]
}
var whichImage = Math.round(Math.random()*(p-1));
function showImage(){
    document.write('<img src="'+theImages[whichImage]+'">');
}
///////////////////////////////////////////////////////////////
