<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Listado</title>
</head>
<body>
    <?php include('../Layout/header.php') ?>

    <div class="w-100 w-md-50 mx-auto py-2 mb-5">
        <h2 class="text-center">Editar tarea</h2>

        <form>
            <div class="form-group row">
                <div class="col-12 col-md-4 pt-0">
                    <label for="category">Categoría</label>
                </div>
                <div class="col-12 col-md-8 pt-0">
                    <select name="category" id="category" class="form-control">
                        <option value="">-- TODAS --</option>
                        <option value="1">Categoría 1</option>
                        <option value="2">Categoría 2</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 col-md-4 pt-0">
                    <label for="name">Nombre</label>
                </div>
                <div class="col-12 col-md-8 pt-0">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 col-md-4 pt-0">
                    <label for="date">Fecha</label>
                </div>
                <div class="col-12 col-md-8 pt-0">
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 col-md-4 pt-0">
                    <label for="name">Descripción</label>
                </div>
                <div class="col-12 col-md-8 pt-0">
                    <textarea name="" class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 col-md-8 offset-0 offset-md-4 text-center text-md-left pt-0">
                    <button type="button" class="btn btn-primary" onclick="saveTask()">Guardar</button>
                    <button type="button" class="btn btn-danger" onclick="goList()">Cancelar</button>
                </div>
            </div>
        </form>
    </div>

    <?php include('../Layout/footer.php') ?>

    <script>
        getTask(1);

        function getTask(id) {
            var xhttp = new XMLHttpRequest();

            xhttp.open("GET", "/lista_tareas/Controllers/tareasController.php?id=" + id, false);

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var json = JSON.parse(this.responseText);
                
                    console.log(json);
                }
            };

            xhttp.send();
        }

        function saveTask() {
            //Guardar 

            goList();
        }

        function goList() {
            window.location.href = "/lista_tareas/Views/Tareas/";
        }
    </script>
</body>
</html>