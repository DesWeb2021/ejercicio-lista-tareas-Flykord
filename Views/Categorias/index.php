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
        <h2 class="text-primary border-bottom border-primary pb-1">Categorías</h2>
    
        <div class="text-right mb-3">
            <button class="btn btn-info" onclick="newCategory()">
                Agregar <i class="fas fa-plus"></i>
            </button>
        </div>

        <div id="form_section" class="d-none">
            <form class="w-md-50 mx-auto row mb-3" id="category_form">
                <div class="col-12">
                    <h3 class="text-center m-0 text-info" id="form_title">Agregar categoría</h3>
                </div>
                <div class="col-12 col-md-auto">
                    <label>Nombre</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="category_name">
                </div>
                <div class="col-12 col-md-auto text-center">
                    <button class="btn btn-primary" id="">
                        Guardar
                    </button>
                    <button type="button" class="btn btn-danger" onclick="hideForm()">
                        Cancelar
                    </button>
                </div>
            </form>
        </div>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Categoría 1</td>
                    <td class="text-right">
                        <button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt" onclick="editCategory(1)"></i></button>
                        <button type="button" class="btn btn-danger" onclick="deleteConfirm(1)"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Categoría 2</td>
                    <td class="text-right">
                        <button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Categoría 3</td>
                    <td class="text-right">
                        <button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include('../Layout/footer.php') ?>

    <script>
        const div_form = document.getElementById("form_section");
        const form = document.getElementById("category_form");

        form.addEventListener("submit", saveCategory);

        getCategoryList();

        function newCategory() {
            div_form.className = "d-block";
        }

        function hideForm() {
            //Limpiar formulario

            div_form.className = "d-none";
        }

        function getCategoryList() {
            //Obtener categorías
        }

        function saveCategory(e) {
            e.preventDefault();
            e.stopPropagation();
            //Guardar categoría

            hideForm();
        }

        function editCategory(id) {
            //Traer información de la categoría

            div_form.className = "d-block";
        }

        function deleteConfirm(id) {
            //Eliminar categoría
        }
    </script>
</body>
</html>