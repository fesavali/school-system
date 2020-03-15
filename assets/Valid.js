//Script added to improve functionality and securuty. It is not part of display image upto line 132

    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        //QuickSidebar.init(); // init quick sidebar
        //Demo.init(); // init demo features
        ComponentsPickers.init();
        ComponentsDropdowns.init();
    });
    var timer = 0;
    function set_interval() {
        timer = setInterval("auto_logout()", 9000000000);
        // the figure '10000' above indicates how many milliseconds the timer be set to.
        // Eg: to set it to 5 mins, calculate 5min = 5x60 = 300 sec = 300,000 millisec.
        // So set it to 300000
    }

    function reset_interval() {
        if (timer !== 0) {
            clearInterval(timer);
            timer = 0;
            timer = setInterval("auto_logout()", 900000);
        }
    }

    function auto_logout() {
        document.getElementById('logoutForm').submit();
    }

//Prevent the user from going back especially after logout. It is good for security

     function preventBack() {
         window.history.forward();
     }
        setTimeout("preventBack()", 0);

     window.onunload=function() {
         null
     };


    function checkAll(bx) {
        var cbs = document.getElementsByTagName('input');
        for (var i = 0; i < cbs.length; i++) {
            if (cbs[i].type == 'checkbox') {
                cbs[i].checked = bx.checked;
            }
        }
    }
