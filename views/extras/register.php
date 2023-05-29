<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Widget</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary-proyecto">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>TDS</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Formulario de registro</h4>

                            <p>Este formulario simplemente va a hacer para las personas</p>
                            <form action="../../controller/registrarUserE.php" method="POST">
                                <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Tipo de documento</label>
                                    <select name="tipoDoc" class="form-control" id="">
                                        <option >Seleccione</option>
                                        <option value="CC">CC</option>
                                        <option value="CE">CE</option>
                                        <option value="PASAPORTE">PASAPORTE</option>
                                    </select>
                                    <!-- <input type="email" class="form-control"  required> -->
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Numero de documento</label>
                                    <input type="number" name="numeroID" class="form-control" placeholder="User Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nombres</label>
                                    <input type="text" name="nombres" class="form-control" placeholder="User Name" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Apellidos</label>
                                    <input type="text" name="apellidos" class="form-control" placeholder="User Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Telefono</label>
                                    <input type="number" name="telefono" class="form-control" placeholder="User Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Contraseña</label>
                                    <input type="password" name="contrasena" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Confirmar contraseña</label>
                                    <input type="password" name="contrasenaB" class="form-control" placeholder="Password">
                                </div>
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Aceptar terminos y condiciones
									</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrarse</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Register with facebook</button>
                                        <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Register with twitter</button>
                                    </div>
                                </div> -->
                                <div class="register-link m-t-15 text-center">
                                    <p>¿Ya tienes una cuenta? <a href="login.php"> Iniciar sesión</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>