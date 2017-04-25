window.onload = function () {
    jQuery('a').each(function () {
        jQuery(this).attr('href', '#' + this.href);
    });
}
