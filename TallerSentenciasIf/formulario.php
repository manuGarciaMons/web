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
    <form class="formulario" name="fvalida" action="validarFormulario.php" method="post">
        <div>
            Edad*: <input class="form" type="number" name="edad" id="" min="1" max="120" placeholder="Su edad" required>
        </div>
        <br>
        <div>
            Ingrese Hora del dia*: <input class="form" type="text" name="hora" id="" placeholder="Hora, formato militar 1-24" required>
        </div>
        <br>
        <div>
            Estudios*:
            <select id='estudios' name='estudios'>
                <option value=''>Seleccione</option>
                <option>Ningunos</option>
                <option>Primarios</option>
                <option>Bachiller</option>
                <option>Grado</option>
                <option>Master</option>
            </select>
        </div>


        <div>
       
        Deja un mensaje:<br>
        <textarea name="mensaje"></textarea>
        </div>
        <br>
        <input class="boton" type="submit" value="ENVIAR" onclick="valida_envia()">
    </form>

    <script>
        function valida_envia() {

            //Validar edad
            if (document.fvalida.edad.value.length == 0) {
                alert("El campo edad es requerido ")
                document.fvalida.edad.focus()
                return 0;
            }
            //Validar hora
            if (document.fvalida.hora.value.length == 0) {
                alert("El campo hora es requerido, recuerde que el formato establecido")
                document.fvalida.hora.focus()
                return 0;
            }

            //Validar el estudios
            if (document.fvalida.estudios.value.length == 0) {
                alert("El campo estudios es requerido")
                document.fvalida.estudios.focus()
                return 0;
            }

        }
    </script>

</body>

</html>