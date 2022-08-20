
// jquery start
$(document).ready(function() {

    // get value from clicked button when form is submitted
    $('#form_control .btn').click(function() {
        
        // get button text
        var button_text = $(this).text();

        $('#form_control input[name="gpio"]').val(button_text);

        // submit form
        $('#form_control').submit();
    });

});
