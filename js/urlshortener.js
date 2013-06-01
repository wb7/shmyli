$(document).ready(function()
{
    $("#form").submit(function() {
        $.ajax({
            type: "POST",
            url: "url.php",
            data: "check=" + $("#url").val(),
            success: function(msg)
            {
				$("#form").hide();
                $("#container").hide().load("url.php?url=" + escape($("#url").val())).fadeIn(500);
            }
        });
        return false;
    });
});