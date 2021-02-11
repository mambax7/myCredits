function toggle(id)
{
    if (document.getElementById) { obj = document.getElementById(id); }
    if (document.all) { obj = document.all[id]; }
    if (document.layers) { obj = document.layers[id]; }
    if (obj) {
        if (obj.style.display == "none") {
            obj.style.display = "";
        } else {
            obj.style.display = "none";
        }
    }
    return false;
}

var iconClose = new Image();
iconClose.src = 'images/icon/close12.gif';
var iconOpen = new Image();
iconOpen.src = 'images/icon/open12.gif';

function toggleIcon ( iconName )
{
    if ( document.images[iconName].src == window.iconOpen.src ) {
        document.images[iconName].src = window.iconClose.src;
    } else if ( document.images[iconName].src == window.iconClose.src ) {
        document.images[iconName].src = window.iconOpen.src;
    }
    return;
}
