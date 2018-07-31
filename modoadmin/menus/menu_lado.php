<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            margin: 0px;
            margin-left: 180px;
        }
        /* The sidebar menu */
        .sidenav {
            height: 100%; /* Full-height: remove this if you want "auto" height */
            width: 190px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1; /* Stay on top */
            top: 0; /* Stay at the top */
            left: 0;
            background-color: #005a88; /* Black */
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 10px;


        }

        /* The navigation menu links */
        .sidenav a {
            padding: 5px 30px 5px 10px;
            text-decoration: none;
            font-size: 18px;
            color: #656565;
            display: block;
            width: 100%;
            margin: 5px 20px 5px 5px;


        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            color: #f1f1f1;
            background: #005a88;
        }

        /* Style page content */
        .main {
            margin-left: 160px; /* Same as the width of the sidebar */
            padding: 0px 10px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        .accordion {
            background-color: #005a88;
            color: white;
            font-family: "Roboto", Arial, sans-serif, Helvetica;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
            font-size: 22px;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .active, .accordion:hover {
            background-color: #006d9c;

        }


        /* Style the accordion panel. Note: hidden by default */
        .panel {
            padding: 10px 20px 10px 15px;
            background-color: #e1e1e1;
            display: none;
            overflow: hidden;
            font-family: "Roboto", Arial, sans-serif, Helvetica;
        }
        /*.panel div:hover{*/
            /*background:#005a88;*/
            /*color: white;*/
        /*}*/
    </style>
</head>
<body>

<div id="mySidenav" class="sidenav">

    <button class="accordion">*Franquicias</button>
    <div class="panel">
        <a href="../GestiondeFranquicias/principal_gestion_franquicias.php">Franquicias</a>
        <a href="../GestiondeFranquicias/nuevaCiudad.php">Nueva Ciudad</a>
        <a href="../GestiondeFranquicias/newFranquicia.php">Nueva Franquicia</a>
    </div>
    <button class="accordion">*Peliculas</button>
    <div class="panel">
        <a href="../GestiondePeliculas/principal_peliculas.php">Peliculas</a>
        <a href="#">Generos</a>
        <a href="#">Clasificados</a>
        <a href="#">Audios</a>
        <a href="#">Nueva Pelicula</a>
        <a href="#"></a>

    </div>
    <button class="accordion">*Reportes</button>
    <div class="panel">
        <a href="../Reportes/principal_reportes.php">Reportes</a>
    </div>
    <button class="accordion">*Usuarios</button>
    <div class="panel">
        <a href="../menus/menu_franquicias.php">Usuarios</a>
    </div>
    <div class="main">

    </div>

<script>

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

</body>
</html>
