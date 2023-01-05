
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funiber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="http://lab.iamrohit.in/js/location.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        
</head>

<body>
    <!-- Contenedor Imagen -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4">
                <img class="img-fluid" src="LogoFUNIBER.jpg" id="imagen">
            </div>
        </div>
    </div>

    <!-- Contenedor Informacion -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="text-primary">Request information</h4>
            </div>
        </div>
    </div>

<div class="container">
        <!-- Formulario -->
        <form class="row g-3 needs-validation" novalidate method="post" >

            <div class="col-12 col-sm-6">
                <label for="validationCustom01" class="form-label fw-bold">Knowledge areas</label>
                <select class="form-select" name="area" id="validationCustom01" required>
                <option selected disabled value="">Select a Program</option>
                    <option >...</option>
                
                </select>
                <div class="invalid-feedback">
                    Please select a valid Knowledge areas.
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <label for="inputState" class="form-label fw-bold">Program</label>
                <select class="form-select" name="program" id="validationCustom02" required>
                    <option selected disabled value="">Select a Program</option>
                    
                    <option > ...</option>
                    
                </select>
                <div class="invalid-feedback">
                    Please select a valid Program.
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <label for="validationCustom03" class="form-label fw-bold">Names</label>
                <input type="text" name="names" class="form-control" id="validationCustom03" required>
            </div>

            <div class="col-12 col-sm-6">
                <label for="validationCustom04" class="form-label fw-bold">Last Name</label>
                <input type="text" name="lastname" class="form-control" id="validationCustom04" required>
            </div>

            <div class="col-12 col-sm-6">
                <label for="inputEmail4" class="form-label fw-bold">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
                    required>
            </div>

            <div class="col-12 col-sm-6">
                <label ffor="validationCustom05" class="form-label fw-bold">Phone</label>
                <input type="number" name="phone" class="form-control" id="validationCustom05" required>
            </div>


            <div class="col-12 col-sm-6">
                <label for="validationCustom06" class="form-label fw-bold">Country of residence</label>
                <select class="form-select" name="country" id="listapais" required>
                <option selected disabled value="">Select Country of residence</option>
                
                    <option > ...</option>
                    
                </select>
                


                <div class="invalid-feedback">
                    Please select a valid Country of residence.
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <label for="validationCustom07" class="form-label fw-bold">State</label>
                <select class="form-select" name="state" id="validationCustom07" required>
                    <option selected disabled value="">Select State</option>
                    
                    <option >...</option>
                   
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>


            <div class="col-12 col-sm-6">
                <label for="validationCustom08" class="form-label fw-bold">City</label>
                <select class="form-select" name="city" id="validationCustom08" required>
                    <option selected disabled value="">Select a City</option>
                    
                    <option > ... </option>
                    
                </select>
                <div class="invalid-feedback">
                    Please select a valid City.
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <label for="inputEmail4" class="form-label fw-bold">Comments</label>
                <textarea class="form-control" name="comentario" aria-label="With textarea"></textarea>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        I accept the privacy policy
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <button class="btn btn-primary" type="submit" name="Enviado">Submit form</button>
            </div>
  
        </form>

        <?php
        
        if (isset($_POST['Enviado']))
        {
            include("enviocorreo.php");
            include ("conexion.php");
                $area = $_POST['area'];
                $program = $_POST['program'];
                $names = $_POST['names'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $country = $_POST['country'];
                $statee = $_POST['state'];
                $city = $_POST['city'];
                $comentario = $_POST['comentario'];

            $conexion->query("INSERT INTO $tabla_db1 (area,programa,nombres,apellidos,correo,telefono,pais,provincia,ciudad,comentarios) values ('$area', '$program', '$names', '$lastname','$email', '$phone', '$country', '$statee', '$city', '$comentario')");

            include("cerrarconexion.php");
        
        }
        

        ?>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
        <script src="validacampos.js"></script>
        
</body>

</html>

