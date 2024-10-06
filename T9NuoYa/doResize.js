var resizeTimer = null;  
var screenWidth = null;
var screenHeight = null;
function doResize()
{
    var screenWidth = document.body.offsetWidth;
    var screenHeight = document.body.offsetHeight;
    if(screenWidth>1920){
        screenWidth = 1920;
    }
    document.getElementById('loading').width = screenWidth;
    if(screenHeight>1080){
        screenHeight = 1080;
    }
    document.getElementById('loading').height = screenHeight;
    resizeTimer=null ;
}   
window.onresize = function()
{   
    if(resizeTimer==null)
    {
        resizeTimer =
        setTimeout("doResize()",30);   
    }
}