jQuery(document).ready(function(jQuery) {
    var cardHeight = -1;
    jQuery('.card' ).each(function() {
        cardHeight = cardHeight > jQuery('.card').height() ? cardHeight : jQuery('.card').height();
    });
    alert(cardHeight);
});

var cardHeight = jQuery('.row.spotlight').height;
alert(cardHeight);


jQuery(document).ready(function() {
    var elementHeights = jQuery('.card').map(function() {
        return jQuery(this).height();
    }).get();
    var minHeight = Math.max.apply(null, elementHeights);
    var height = minHeight + 'px';
    var targetDiv = jQuery('.carousel','#spotCar');
    jQuery(targetDiv).css('height', height);
});