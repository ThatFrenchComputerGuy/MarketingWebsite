<?php include "/php/myaccesscontent/userfieldsvalidate.php" ;?>

<div id = "loginFields"  style = "display: none">
    <div id = "loginContainer">
        <form>
            <input type = "text" name = "username" placeholder="username"><br />
            <input type = "text" name = "password" placeholder="password"><br />
            <br /><input type = "submit" value = "login">
        </form>
    </div>

    <script>
        $("form").on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                url: "php/myaccesscontent/userfieldsvalidate.php",
                type: "POST",
                data: $("form").serialize(),
                success: function(result) {
                    document.location.href = result;
                }
            });
        });

        $(function() {
            $(".main-nav #login a").click(function() {
                $("#loginFields").toggle("login");
                $("#blackout").fadeToggle(300);
            });
        });

        $("#blackout").click(function(event) {
            $("#blackout").fadeOut(300, function() {
                $("#loginFields").toggle("login");
                $loginValid = "";
            });
        });
    </script>
</div>
