<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <livewire:styles />
</head>
<body>
    <div class='bg-success'>

        <!--descargar CDN de jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <livewire:students />

        <!-- colocar librería de bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <script>
            window.livewire.on('studentAdded', () => {
                $('#addStudentModal').modal('hide');
            });

        </script>
        <script>
            window.livewire.on('studentAdded', () => {
                $('#updateStudentMo').modal('hide');
            });

        </script>
          <script>
            window.livewire.on('studentAdded', () => {
                $('#deleteStudentModal').modal('hide');
            });

        </script>
    </div>
    <livewire:scripts />
</body>
</html>
