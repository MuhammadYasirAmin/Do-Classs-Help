    function Validate_email(event) {
        var regex = new RegExp("^[a-z0-9.@_-]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
    function Validate_name(event) {
        var regex = new RegExp("^[a-z ]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
    function Validate_number(event) {
        var regex = new RegExp("^[0-9]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
    function Validate_message(event) {
        var regex = new RegExp("^[a-zA-Z0-9 ]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
    $(document).ready(function(){
       $('input').on("cut copy paste",function(e) {
          e.preventDefault();
       });
       $('textarea').on("cut copy paste",function(e) {
          e.preventDefault();
       });
    });
