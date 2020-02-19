<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="estilos.css" />

    <title>FORMULARIO</title>
</head>

<body>
    <h2 class="titulo">Rellene el siguiente formulario </h2>
    <form class="formulario" name="fvalida" action="validar.php" method="post">
        <div>
            Año Nacimiento: <input class="form" type="number" name="anio" id="" min="1" max="2020">
        </div>
        <br>
        <div>
            Mes Nacimiento: <input class="form" type="number" name="mes" id="" min="1" max="12">
        </div>
        <br>
        <div>
            Dia Nacimiento: <input class="form" type="number" name="dia" id="" min="1" max="31">
        </div>
        <br>
        <input class="boton" type="submit" value="ENVIAR" onclick="valida_envia()">
    </form>

    <script>
        function valida_envia() {

            //Validar ano nacimiento
            if (document.fvalida.anio.value.length == 0) {
                alert("Tiene que escribir su año de nacimiento")
                document.fvalida.anio.focus()
                return 0;
            }
            //Validar mes nacimiento
            if (document.fvalida.mes.value.length == 0) {
                alert("Tiene que escribir su mes de nacimiento")
                document.fvalida.mes.focus()
                return 0;
            }

            //calidar dia nacimiento
            if (document.fvalida.dia.value.length == 0) {
                alert("Tiene que escribir su dia de nacimiento")
                document.fvalida.dia.focus()
                return 0;
            }

        }

    </script>

</body>

</html>