jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() > 56) {
        document.getElementById('navPrim').style.position = 'fixed';
        document.getElementById('navPrim').style.top = '0px';
    } else {
        document.getElementById('navPrim').style.position = 'absolute';
        document.getElementById('navPrim').style.top = '56px';
    }
    if (jQuery(window).scrollTop() > 400) {
        document.getElementById('topPage').style.display = 'block';
    } else {
        document.getElementById('topPage').style.display = 'none';
    }
});
