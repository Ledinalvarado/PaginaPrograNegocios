<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../login/login.css">

    <script>
        $(document).ready(function()
        {
            $("#mostrarmodal").modal("show");
        });
    </script>

<body>

<div class="madal-content animate" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <a href="../GestiondeFranquicias/principal_gestion_franquicias.php">aqui</a>
    <form class="modal-content animate" action="/action_page.php">
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit">Login</button>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" style="" class="cancelbtn">Volver</button>
        </div>
    </form>
</div>
</body>
</html>
