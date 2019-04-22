<div id = "loginFields"  style = "display: none">
    <div id = "loginContainer">
        <form action="/myaccesscontent/myaccess.php">
            <input type = "text" name = "username" placeholder="username"><br />
            <input type = "text" name = "password" placeholder="password"><br />
            <br /><input type = "submit" value = "login">
        </form>
    </div>

    <script>
        $(function() {
            $(".main-nav #login a").click(function() {
                $("#loginFields").toggle("login");
                $("#blackout").fadeToggle(300);
            });
        });

        $("#blackout").click(function(event) {
            $("#blackout").fadeOut(300, function() {
                $("#loginFields").toggle("login");
            });
        });
    </script>
</div>
