<?php
session_start();
include ('./logica/validacion.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Estudiantes</title>
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
    <link rel="stylesheet" type="text/css" href="css/select2.css">
    <script src="js/select2.js"></script>
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
                            <li><a href="institution.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Datos institución</a></li>
                            <li><a href="provider.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo proveedor</a></li>
                            <li><a href="category.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva categoría</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                           
                            <li><a href="student.php"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo estudiante</a></li>
                            
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
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; Préstamos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="loan.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Todos los préstamos</a></li>
                            <li>
                                <a href="loanpending.php"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i>&nbsp;&nbsp; Devoluciones pendientes </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="report.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
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
                <li  class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
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
              <center><h1 class="all-tittles">Administración de Personal</h1></center> 
            
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation"><a href="admin.php">Administradores</a></li>
                
                <li role="presentation" class="active"><a href="student.php">Estudiantes</a></li>
                
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección donde se encuentra el listado de estudiantes de la institución, podrás buscar los estudiantes por sección o nombre. Puedes actualizar o eliminar los datos del estudiante.<br>
                    <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si eliminas el estudiante del sistema se borrarán todos los datos relacionados con él, incluyendo préstamos y registros en la bitácora.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="student.php">Nuevo estudiante</a></li>
                        <li class="active">Listado de estudiantes</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container-fluid">
          <?php
     
      include("./logica/db.php");
            $id= $_GET['id'];
          $resultados = mysqli_query($conexion,"SELECT * FROM personal WHERE ID='$id'");


           while($consulta = mysqli_fetch_array($resultados))
          {?>

  <div class='title-flat-form title-flat-blue'>Editar estudiante</div>
                <form class='form-padding' method='POST' action='actualizar2.php'>
                    <div class='row'>
                        <div class='col-xs-12'>
                            <legend style='color: #fff'><i class='zmdi zmdi-account-box'></i> &nbsp; Datos del Estudiante</legend><br>
                        </div>
                        <div class='col-xs-12'>
                            <div class='group-material'>
                                <p class='text-center' style='padding-top: 15px'>Usuario ID</p>
                                <input type='text' readonly="" class='form-control' name='numid'  value="<?php echo $consulta['ID']?>"required="" maxlength='20' data-toggle='tooltip' data-placement='top' title='ID de estudiante'>
                                <span class='highlight'></span>
                                <span class='bar'></span>
                                
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-6'>
                            <div class='group-material'>
                                <p style='padding-top: 15px'>Primer Nombre Estudiante</p>
                                <input type='text' class='form-control' name='pnombre'  value="<?php echo $consulta['PRIMER_NOMBRE']?>" required=""required="" pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}' maxlength='50' data-toggle='tooltip' data-placement='top' title='Nombre del estudiante'>
                                <span class='highlight'></span>
                                <span class='bar'></span>
                               
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-6'>
                            <div class='group-material'>
                                <p style='padding-top: 15px'>Segundo Nombre Estudiante</p>
                                <input type='text' class='form-control' name='snombre' value="<?php echo $consulta['SEGUNDO_NOMBRE']?>" pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}' maxlength='50' data-toggle='tooltip' data-placement='top' title='Nombre del estudiante'>
                                <span class='highlight'></span>
                                <span class='bar'></span>
                                
                            </div>
                        </div>
                                                <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Primer Apellido Estudiante</p>
                                <input type="text" class="form-control" name="papellido" value="<?php echo $consulta['PRIMER_APE']?>" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Apellido del estudiante">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                               
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Segundo Apellido Estudiante</p>
                                <input type="text" class="form-control" name="sapellido" value="<?php echo $consulta['SEGUNDO_APE']?>" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Apellido del estudiante">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12">
                           <div class="group-material">
                                <p class="text-center" style="padding-top: 15px">Categoría</p>
                                <select class="form-control" name="categoria" value="<?php echo $consulta['CATEGORIA']?>" data-toggle="tooltip" data-placement="top" title="Elige la sección a la que pertenece el alumno">
                                    <option value="" disabled="" selected="">Selecciona una categoría</option>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Correo</p>
                                <input type="email" class="form-control" name="correo" value="<?php echo $consulta['CORREO']?>"  required=""  maxlength="30" data-toggle="tooltip" data-placement="top" title="Parentesco">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <p style="padding-top: 15px">Teléfono</p>
                                <input type="text" class="form-control" name="tel" value="<?php echo $consulta['TELEFONO']?>"  pattern="[0-9]{8,8}" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente 8 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                        </div>
                             <div class="col-xs-12">
                             <div class="col-xs-12">
                           <div class="group-material">
                                <p class="text-center" style="padding-top: 15px">Curso</p>
                                <select class="form-control" name="curso" id="cursoo" data-toggle="tooltip" data-placement="top" title="Elige la sección a la que pertenece el alumno">
                                    <option value="" disabled="" selected="">Selecciona un Curso</option>
                                <?php
                                    include ("./logica/db.php");

                                    $consulta = "SELECT * FROM curso where curso != 'admin' ";
                                    $resultado = mysqli_query($conexion, $consulta);

                                    while ($row = mysqli_fetch_array($resultado))
                                    {
                                        
                                      $codigo = $row["COD_CURSO"];
                                      $curso = $row["CURSO"];



                                    ?>

                                    <option value ="<?php echo $codigo;?>"><?php echo $curso;?> </option>
                                     


                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        
                       <div class="col-xs-12">
                            <p class="text-center">
                                
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                    </div>
                </form>
            </div>
        </div>
         <?php } ?>  
          
  
        </tbody></table>

       

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>







<script src="./js/confirmacion.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
            $('#cursoo').select2();
    });
</script>