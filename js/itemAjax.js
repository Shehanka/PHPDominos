//fetch data
$(document).ready(function () {
    function fetch_data() {
        $.ajax({
            url : 'php-item.php',
            method : 'POST',
            success : function (data) {
                $('').html(data);
            }
        });
    }
});