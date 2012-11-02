// This is a manifest file that'll be compiled into application.js, which will include all the files
// listed below.
//
// Any JavaScript/Coffee file within this directory, lib/assets/javascripts, vendor/assets/javascripts,
// or vendor/assets/javascripts of plugins, if any, can be referenced here using a relative path.
//
// It's not advisable to add code directly here, but if you do, it'll appear at the bottom of the
// the compiled file.
//
// WARNING: THE FIRST BLANK LINE MARKS THE END OF WHAT'S TO BE PROCESSED, ANY BLANK LINE SHOULD
// GO AFTER THE REQUIRES BELOW.
//
//= require jquery
//= require jquery_ujs
//= require_tree .
//= require fancybox

$(document).ready(function() {
    $("a.fancybox").fancybox();
});

$(document).ready(function() {
    $(".video").fancybox({
        width: 600,
        height: 425,
        type: 'iframe',
        fitToView : false
    });
});

$('.box').each(function() {
    $(this).before($('<span>').text("■"));
});






function setActive()
{
    aObj2 =   document.getElementById('navSidebar').getElementsByTagName('a');
    for(i=0;i<aObj2.length;i++)
    {
        if(document.location.href.indexOf(aObj2[i].href)>=0)
        {
            aObj2[i].className='active';
        }
    }
}
window.onload = setActive;


