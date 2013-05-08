$(document).ready(function()
{
    $("#form").submit(function() {
        $.ajax({
            type: "POST",
            url: "url.php",
            data: "url=" + $("#url").val(),
            success: function(msg)
            {
                $("#container").hide().load("url.php?url=" + escape($("#url").val())).fadeIn(2000);
            }
        });
        return false;
    });
});

