jQuery(document).ready(function () {
    var submitIcon = jQuery('.searchbox-icon');
    var inputBox = jQuery('.searchbox-input');
    var searchBox = jQuery('.searchbox');
    var isOpen = false;
    var negative = '-';
    var pixels = 'px';
    submitIcon.click(function () {
        var moveLeft = jQuery( window ).width() - jQuery('#audIDnav').width();
        if (isOpen == false) {
            searchBox.addClass('searchbox-open');
            inputBox.focus();
            isOpen = true;
            document.getElementById('searchAdj').style.zIndex = 999;
            document.getElementById('searchAdj').style.width = moveLeft + pixels;
            document.getElementById('searchFoot').style.zIndex = 999;
            document.getElementById('searchFoot').style.width = moveLeft + pixels;
            document.getElementById('audIDnav').style.position = 'absolute';
            document.getElementById('audIDnav').style.left = negative + moveLeft + pixels;
        }
        else {
            searchBox.removeClass('searchbox-open');
            document.getElementById('searchAdj').style.zIndex = 1;
            document.getElementById('searchAdj').style.width = '56px';
            document.getElementById('searchFoot').style.zIndex = 1;
            document.getElementById('searchFoot').style.width = '56px';
            document.getElementById('audIDnav').style.position = 'inherit';
            inputBox.focusout();
            isOpen = false;
        }
    });
    submitIcon.mouseup(function () {
        return false;
    });
    searchBox.mouseup(function () {
        return false;
    });
    jQuery(document).mouseup(function () {
        if (isOpen == true) {
            jQuery('.searchbox-icon').css('display', 'block');
            submitIcon.click();
        }
    });
    google.charts.setOnLoadCallback(drawChart);
    jQuery('.collapsible').collapsible();
    jQuery('.collapsible').collapsible('open', 0);
});
function buttonUp(){
    var inputVal = jQuery('.searchbox-input').val();
    inputVal = jQuery.trim(inputVal).length;
    if( inputVal !== 0){
        jQuery('.searchbox-icon').css('display','none');
    } else {
        jQuery('.searchbox-input').val('');
        jQuery('.searchbox-icon').css('display','block');}
};