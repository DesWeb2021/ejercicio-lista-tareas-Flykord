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

    <div class="container py-2 mb-5">
        <form class="row align-items-center">
            <div class="col-auto">
                <label for="category">Categoría</label>
            </div>
            <div class="col col-md-auto">
                <select name="category" id="category" class="form-control">
                    <option value="">-- TODAS --</option>
                    <option value="1">Categoría 1</option>
                    <option value="2">Categoría 2</option>
                </select>
            </div>
            <div class="col-12 col-md-auto p-0"></div>
            <div class="col-6 col-md-auto">
                <input type="checkbox" name="check" id="check">
                <label for="check">Ver todas</label>
            </div>
            <div class="col-6 text-right">
                <a href="/lista_tareas/Views/Tareas/nueva.php" class="btn btn-info">
                    Agregar <i class="fas fa-plus"></i>
                </a>
            </div>
        </form>

        <div id="lista_tareas" class="mt-2">
            <div class="row border-top">
                <div class="col-12 col-md-8">
                    <h3 class="m-0">Nombre de la tarea</h3>
                </div>
                <div class="col-12 col-md-4 text-right">
                    24/05/2021 18:00
                </div>
                <div class="col-12 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil alias ad id nam pariatur eos natus illo harum molestiae ex debitis deserunt maiores, corporis voluptates iusto perspiciatis, sequi mollitia ipsum.
                </div>
                <div class="col-12 text-center text-md-right">
                    <form>
                        <div class="form-group">
                            <input type="checkbox" name="" id="" onchange="completeTask(1)">
                            <label for="check">Completada</label>
                            <button type="button" class="btn btn-warning" onclick="goEdit(1)"><i class="fas fa-pencil-alt"></i></button>
                            <button type="button" class="btn btn-danger" onclick="deleteConfirm(1)"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row border-top">
                <div class="col-12 col-md-8">
                    <h3 class="m-0">Nombre de la tarea</h3>
                </div>
                <div class="col-12 col-md-4 text-right">
                    24/05/2021 18:00
                </div>
                <div class="col-12 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil alias ad id nam pariatur eos natus illo harum molestiae ex debitis deserunt maiores, corporis voluptates iusto perspiciatis, sequi mollitia ipsum.
                </div>
                <div class="col-12 text-center text-md-right">
                    <form>
                        <div class="form-group">
                            <input type="checkbox" name="" id="">
                            <label for="check">Completada</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row border-top">
                <div class="col-12 col-md-8">
                    <h3 class="m-0">Nombre de la tarea</h3>
                </div>
                <div class="col-12 col-md-4 text-right">
                    24/05/2021 18:00
                </div>
                <div class="col-12 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil alias ad id nam pariatur eos natus illo harum molestiae ex debitis deserunt maiores, corporis voluptates iusto perspiciatis, sequi mollitia ipsum.
                </div>
                <div class="col-12 text-center text-md-right">
                    <form>
                        <div class="form-group">
                            <input type="checkbox" name="" id="">
                            <label for="check">Completada</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row border-top">
                <div class="col-12 col-md-8">
                    <h3 class="m-0">Nombre de la tarea</h3>
                </div>
                <div class="col-12 col-md-4 text-right">
                    24/05/2021 18:00
                </div>
                <div class="col-12 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil alias ad id nam pariatur eos natus illo harum molestiae ex debitis deserunt maiores, corporis voluptates iusto perspiciatis, sequi mollitia ipsum.
                </div>
                <div class="col-12 text-center text-md-right">
                    <form>
                        <div class="form-group">
                            <input type="checkbox" name="" id="">
                            <label for="check">Completada</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('../Layout/footer.php') ?>

    <script>
        var boxCategory = document.getElementById("category");

        boxCategory.addEventListener("change", getTaskList);

        var checkAll = document.getElementById("check");

        checkAll.addEventListener("change", getTaskList);

        getTaskList();

        function getTaskList() {
            var xhttp = new XMLHttpRequest();

            xhttp.open("GET", "/lista_tareas/Controllers/tareasController.php", false);

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var json = JSON.parse(this.responseText);
                
                    console.log(json);
                }
            };

            xhttp.send();
        }

        function getCategoryList() {
            //Obtener categorías
        }

        function goEdit(id) {
            window.location.href = "/lista_tareas/Views/Tareas/edit.php";
        }

        function deleteConfirm(id) {
            //Eliminar tarea
        }

        function completeTask(id) {
            //Cambiar estatus de la tarea
        }
    </script>
</body>
</html>