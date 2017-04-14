jQuery(document).ready(function () {
    var submitIcon = jQuery('.searchbox-icon');
    var inputBox = jQuery('.searchbox-input');
    var searchBox = jQuery('.searchbox');
    var isOpen = false;
    var negative = '-';
    var pixels = 'px';
    submitIcon.click(function () {
        var moveLeft = jQuery(window).width() - jQuery('#audIDnav').width();
        var newSize = jQuery(window).width() + 112 - jQuery('#audIDnav').width();
        if (isOpen == false) {
            searchBox.addClass('searchbox-open');
            inputBox.focus();
            isOpen = true;
            document.getElementById('searchAdj').style.zIndex = 999;
            document.getElementById('searchAdj').style.width = newSize + pixels;
            document.getElementById('audIDnav').style.position = 'absolute';
            var pos = 0;
            var id = setInterval(frame, 4);

            function frame() {
                if (pos <= negative + moveLeft) {
                    clearInterval(id);
                } else {
                    pos = pos - 15;
                    if (pos < negative + moveLeft) {
                        pos = negative + moveLeft;
                    }
                    document.getElementById('audIDnav').style.left = pos + 'px';
                }
            }
        } else {
            searchBox.removeClass('searchbox-open');
            document.getElementById('searchAdj').style.zIndex = 1;
            document.getElementById('searchAdj').style.width = '56px';
            document.getElementById('audIDnav').style.position = 'inherit';
            document.getElementById('audIDnav').style.left = '0px';
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
});
function buttonUp() {
    var inputVal = jQuery('.searchbox-input').val();
    inputVal = jQuery.trim(inputVal).length;
    if (inputVal !== 0) {
        jQuery('.searchbox-icon').css('display', 'none');
    } else {
        jQuery('.searchbox-input').val('');
        jQuery('.searchbox-icon').css('display', 'block');
    }
};
jQuery(document).ready(function () {
    var submitButton = jQuery('.searchbox-icon-foot');
    var inputBox = jQuery('.searchbox-input-foot');
    var searchBox = jQuery('.searchbox-foot');
    var isFootOpen = false;
    var pixel = 'px';
    submitButton.click(function () {
        var searchSize = jQuery(window).width() / 2;
        if (isFootOpen == false) {
            searchBox.addClass('searchbox-open');
            inputBox.focus();
            isFootOpen = true;
            document.getElementById('searchFoot').style.zIndex = 999;
            document.getElementById('searchFoot').style.width = searchSize + pixel;
        }
        else {
            searchBox.removeClass('searchbox-open');
            document.getElementById('searchFoot').style.zIndex = 1;
            document.getElementById('searchFoot').style.width = '56px';
            inputBox.focusout();
            isFootOpen = false;
        }
    });
    submitButton.mouseup(function () {
        return false;
    });
    searchBox.mouseup(function () {
        return false;
    });
    jQuery(document).mouseup(function () {
        if (isFootOpen == true) {
            jQuery('.searchbox-icon-foot').css('display', 'block');
            submitButton.click();
        }
    });
});
function buttonUp() {
    var inputVal = jQuery('.searchbox-input').val();
    inputVal = jQuery.trim(inputVal).length;
    if (inputVal !== 0) {
        jQuery('.searchbox-icon-foot').css('display', 'none');
    } else {
        jQuery('.searchbox-input').val('');
        jQuery('.searchbox-icon').css('display', 'block');
    }
};