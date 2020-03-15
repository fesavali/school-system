$(document).ready(function(){
  // when user clicks on the upload profile image button ...
  $(document).on('click', '#profile_img', function(){
    // ...use Jquery to click on the hidden file input field
    $('#profile_input').click();
    // a 'change' event occurs when user selects image from the system.
    // when that happens, grab the image and display it
    $(document).on('change', '#profile_input', function(){
      // grab the file
      var file = $('#profile_input')[0].files[0];
      if (file) {
          var reader = new FileReader();
          reader.onload = function (e) {
              // set the value of the input for profile picture
              $('#profile_input').attr('value', file.name);
              // display the image
              $('#profile_img').attr('src', e.target.result);
          };
          reader.readAsDataURL(file);
      }
    });
  });
});

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
        if (timer != 0) {
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

 //    Page.ClientScript.RegisterStartupScript(this.GetType(),"cle","windows.history.clear",true);


//This is to check whether the user has filled all the frecquired fields
     function validateField() {
    var x, text;
        x = document.getElementById("receiver_id").value;

    if (x == "" || x == null) {
        text = "Please fill in this field.";
    }
    document.getElementById("demo").innerHTML = text;
   
    }

    //Checkboxes checking whether atleast one is checked

    function checkCheckBoxes() {
        var c = document.getElementsByTagName('input');
        for (var i = 0; i < c.length; i++) {
            if (c[i].type == 'checkbox' && c[i].checked == true) {
                return true;
            }
        }
        // Nothing has been checked
        alert("Please select atleast one Message:");
        return false;
    }
    function checkAll(bx) {
        var cbs = document.getElementsByTagName('input');
        for (var i = 0; i < cbs.length; i++) {
            if (cbs[i].type == 'checkbox') {
                cbs[i].checked = bx.checked;
            }
        }
    }


    $('#ddlacyear').change(function () {
        $('#ddlterms').empty();
            $.ajax({
                type: "POST",
                url: "/Student/Gettermsbyacy",
                datatype: "Json",
                data: { acyId: $('#ddlacyear').val() },
                success: function (data) {
                    var ddterms = $('#ddlterms');
                    ddterms.append("<option SELECTED DISABLED>--SELECT SESSION--</option>");
                    $.each(data, function (index, value) {
                       ddterms.append('<option value="' + value.names + '">' + value.names + '</option>');
                    });
                }
            });
    });
    $(document).ready(function () {
        $("#ddlterms").change(function () {
            $("#log").ajaxError(function (event, jqxhr, settings, exception) {
                alert(exception);
            });
            var yearSelected = $('#ddlacyear').val();
            var termSelected = $('#ddlterms').val();
            $.get('/Student/Resultsbyterm',
                { id: termSelected, ac: yearSelected}, function (data) {
                    $("#target").html(data);
                });
             });
        });

