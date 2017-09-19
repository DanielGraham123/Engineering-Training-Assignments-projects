var currentPos = 0;
var intervalHandle;

function beginAnimate() {
  document.getElementById("content").style.paddingBottom = "700px";
	document.getElementById("sidebar").style.visibility = "visible";
	document.getElementById("sidebar").style.position = "absolute";
	document.getElementById("sidebar").style.left = "0px";
  document.getElementById("sidebar").style.top = "700px";

    // cause the animateBox function to be called
    intervalHandle = setInterval(animateBox,50);
}

function animateBox() {
    // set new position
    currentPos+=10;
    document.getElementById("sidebar").style.left = currentPos + "px";

    //
    if ( currentPos > 950) {
        // clear interval
        clearInterval(intervalHandle);
        // reset custom inline styles
        // document.getElementById("sidebar").style.position = "";
        // document.getElementById("sidebar").style.left = "";
        // document.getElementById("sidebar").style.top = "";
    }
}

window.onload =  function() {
	setTimeout(beginAnimate,5000);
};
