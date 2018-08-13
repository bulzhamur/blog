$(document).ready(function(){
    $('#contactform').on('submit', function(e){
        e.preventDefault();
 
        $.ajax({
            type: 'POST',
            url: '/sendmail',
            data: $('#contactform').serialize(),
            success: function(result){
                console.log(result);
            }
        });
    });
});