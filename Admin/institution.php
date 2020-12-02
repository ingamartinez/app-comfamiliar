<?php
session_start();
include ('./logica/validacion.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Institución</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                COLEGIO COMFAMILIAR
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="assets/img/comfa.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">BIBLIOTECA COMFAMILIAR</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="home.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="institution.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Datos institución</a></li>
                            <li><a href="provider.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo proveedor</a></li>
                            <li><a href="category.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva categoría</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                             <li><a href="admin.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>    
                            <li><a href="student.php"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Personal</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Libros y catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="book.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo libro</a></li>
                            <li><a href="catalog.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; Préstamos y reservaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="loan.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Todos los préstamos</a></li>
                            <li>
                                <a href="loanpending.php"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i>&nbsp;&nbsp; Devoluciones pendientes <span class="label label-danger pull-right label-mhover">7</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="report.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>
                     <li><a href="advancesettings.php"><i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Acerca De...</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles"><?php $usuario = $_SESSION['usuario']; $nombre=$usuario['NOMBRE_USU']; echo $nombre;?></span>
                </li>

                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>

        <div class="container">
            <div class="jumbotron">
            <div class="page-header">
              <center><h1 class="all-tittles">Administración de la Institución</h1></center>
            
        </div>

        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation" class="active"><a href="institution.php">Institución</a></li>
              <li role="presentation"><a href="provider.php">Proveedores</a></li>
              <li role="presentation"><a href="category.php">Categorías</a></li>
              
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/institution.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Guarda los datos de tu institución, una vez almacenados los datos no podrás hacer más registros.
                    Puedes actualizar la información actual, o eliminar el registro completamente y añadir uno nuevo, siempre
                    y cuando no hayas registrado libros.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Guardar datos de la institución</div>
                <?php 
                 include("./logica/db.php");
                 $resultados = mysqli_query($conexion,"SELECT * FROM configuracion");
                 $consulta = mysqli_fetch_array($resultados);

                 if (!$consulta) {


                 ?>
                <form class="form-padding" method="POST" action="./logica/insertarinsti.php" >
                    <div class="row">
                        <div class="col-xs-12">
                            <legend style="color:#fff"><i class="zmdi zmdi-balance"></i> &nbsp; Datos de la institución</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">NIT de la empresa</p>
                                <input type="text" class="form-control" name="nit" placeholder="NIT de la empresa" required="" pattern="[0-9]{1,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 10 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Nombre de la institución</p>
                                <input type="text" class="form-control"  name="nombin" placeholder="Nombre de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la institución">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Dirección de la institución</p>
                                <input type="text" class="form-control" name="direccion" placeholder="Direccion de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,20}" maxlength="20" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 20 caracteres" >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Telefono</p>
                                <input type="text" class="form-control" name="telefono" placeholder="Teléfono de la institución" required="" pattern="{10,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solo 10 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Correo</p>
                                <input type="email" class="form-control" name="correo" placeholder="Correo de la institución" required=""  maxlength="50" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 50 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Pais de la institución</p>
                                <input type="text" class="form-control" name="pais" placeholder="Pais de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el pais de la institución">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Ciudad de la institución</p>
                                <input type="text" class="form-control" name="ciudad" placeholder="Ciudad de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la ciudad de la institución">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Pagina Web</p>
                                <input type="text" class="form-control" name="pagina" placeholder="Pagina web" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ. ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la pagina web de la institución">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                       <div class="col-xs-12">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                   </div>
               </form>
            <?php } else{   ?> 


                            <form class="form-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend style="color:#fff"><i class="zmdi zmdi-balance"></i> &nbsp; Datos de la institución</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">NIT de la empresa</p>
                                <input type="text" class="form-control" readonly="" value="<?php echo $consulta['nit_empresa']?>"  placeholder="NIT de la empresa" required="" pattern="[0-9]{1,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 10 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Nombre de la institución</p>
                                <input type="text" class="form-control" readonly="" value="<?php echo $consulta['nombre_empresa']?>"  placeholder="Nombre de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la institución">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Dirección de la institución</p>
                                <input type="text" class="form-control" readonly="" value="<?php echo $consulta['direccion']?>" placeholder="Direccion de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,20}" maxlength="20" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 20 caracteres" >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Telefono</p>
                                <input type="text" class="form-control" readonly="" value="<?php echo $consulta['telefono']?>" placeholder="Teléfono de la institución" required="" pattern="{10,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solo 10 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Correo</p>
                                <input type="email" class="form-control" readonly="" value="<?php echo $consulta['correo']?>" placeholder="Correo de la institución" required=""  maxlength="50" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 50 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Pais de la institución</p>
                                <input type="text" class="form-control" readonly="" value="<?php echo $consulta['pais']?>" placeholder="Pais de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el pais de la institución">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Ciudad de la institución</p>
                                <input type="text" class="form-control" readonly="" value="<?php echo $consulta['ciudad']?>" placeholder="Ciudad de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la ciudad de la institución">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Pagina Web</p>
                                <input type="text" class="form-control" readonly="" value="<?php echo $consulta['paginaweb']?>" placeholder="Pagina web" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la pagina web de la institución">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                       <div class="col-xs-12">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Editar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                   </div>
               </form> 






             <?php }  ?>
            </div>
        </div>
       </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Software de gestion de inventario y prestamos hecho a la medida por la empresa Nova System S.A.S para la institucion educativa comfamiliar, el programa se encuentra en base beta hasta el 4 de diciembre donde se presenatara la version 1.0 del software.
                        </p>
                    </div>
                         <div class="col-xs-12 col-sm-6">
        
                        <center> <h4 class="all-tittles">Desarrollador</h4><img src="assets/img/logo_png.png" alt="Biblioteca" class="img-responsive center-box" style="width:50%;  ">
                    </div></center>
            </div>
            <div class="footer-copyright full-reset all-tittles">©NOVA SYSTEM 2020</div>
        </footer>
    </div>
</body>
</html>