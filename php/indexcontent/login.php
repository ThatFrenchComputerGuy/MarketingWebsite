<?php include "php/myaccesscontent/userfieldsvalidate.php" ;?>

<div id = "loginFields"  style = "display: none">
    <div id = "loginContainer">
        <form>
            <input type = "text" name = "username" placeholder="username"><br />
            <input type = "password" name = "password" placeholder="password"><br />
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
                    if (result == null) { alert("Invalid Login Details"); }
                    else {
                        var token = $.parseJSON(result)["token"];
                        $.ajax({
                            url:"php/myaccesscontent/tokenhandler.php",
                            type: "POST",
                            data: {token: token},
                            success: function(jsonObject, status) {
                                path = window.location.pathname.split("/");
                                if (path[path.length - 1] == "index.php") { path.pop(); }
                                path = path.join("/");
                                window.location.replace(path + "/myaccess.php");
                            }
                        });
                    }
                }
            });

            return false;
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
