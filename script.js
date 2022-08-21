
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



    // get value from clicked button when form is submitted
    $('#form_motor button.status').click(function() {
        
        // get button text
        var button_text = $(this).text();

        $('#form_motor input[name="status"]').val(button_text);

        // submit form
        $('#form_motor').submit();
    });

    // get value from clicked button when form is submitted
    $('#form_motor button.speed').click(function() {
        
        // get button text
        var button_text = $(this).text();

        $('#form_motor input[name="speed"]').val(button_text);

        // submit form
        $('#form_motor').submit();
    });

    // get value from clicked button when form is submitted
    $('#form_motor button.direction').click(function() {
        
        // get button text
        var button_text = $(this).text();

        $('#form_motor input[name="direction"]').val(button_text);

        // submit form
        $('#form_motor').submit();
    });

});
