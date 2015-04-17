var theImages = new Array()

theImages[0] = '/images/random/1.jpg'
theImages[1] = '/images/random/2.jpg'
theImages[2] = '/images/random/3.jpg'
theImages[3] = '/images/random/4.jpg'
theImages[4] = '/images/random/5.jpg'
theImages[5] = '/images/random/6.jpg'
theImages[6] = '/images/random/7.jpg'
theImages[7] = '/images/random/8.jpg'
theImages[8] = '/images/random/9.jpg'
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