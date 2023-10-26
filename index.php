<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Ajax</title>
</head>

<body>
    <h1>CRUD AJAX</h1>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Genero</th>
        </thead>
        <tbody id="data-empleado">
        </tbody>

    </table>

</body>
<script>
    let tabla = document.getElementById('data-empleado')
    $.ajax({

        type: "post",
        url: 'empleado.php',
        data: {
            tabla: 'employees',
            operacion: 'get'
        },

    }).done(function(data) {
            console.log(data);
            data= JSON.parse (data);
            console.log(data);
            data.forEach((item) => {
                item.gender =
                item.gender == 'M' ?
                'MASCULINO':
                'FEMENINO';
                tabla.innerHTML +=
              `<tr>
              <td>${item.first_name}</td>
              <td>${item.last_name}</td>
              <td>${item.gender}</td>
              `

            });
        })
</script>

</html>