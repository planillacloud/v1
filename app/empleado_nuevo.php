<?php
include_once("../includes/empleado.php");

// $empleado = Empleado::buscar_por_id(1);
// var_dump($empleado);
?>
<?php include_once '../includes/template/header.php'; ?>
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Nuevo Empleado
                                <small>registro de empleado</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.php">Inicio</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Nuevo empleado</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                     <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet light portlet-fit portlet-form bordered">
                                <div class="portlet-title">
                                <div id="respuesta"></div>
                                    <div class="caption">
                                        <i class="font-blue"></i>
                                        <span class="caption-subject font-blue sbold uppercase">Registro de nuevo empleado</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form action="insertar.php" method="post" id="empleado_form" class="form-horizontal">
                                        <div class="form-body">
                                            <div id="respuestas"></div>
                                            <!-- INICIO FIELDSET - DATOS PERSONALES   -->
                                            <div class="portlet light portlet-fit portlet-form bordered">
                                                <div class="portlet-title">
				                                    <div class="caption">
				                                        <i class="font-green"></i>
				                                        <span class="caption-subject font-green sbold uppercase">Datos personales</span>
				                                    </div>
                          					  	</div>          
	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Nombre(s)
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-4">
	                                                    <input type="text" name="nombre" data-required="1" class="form-control" /> </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Apellido(s)
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-4">
	                                                    <input type="text" name="apellido" data-required="1" class="form-control" /> </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Cedula
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-4">
	                                                    <input type="text" name="cedula" data-required="1" class="form-control" /> </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Fecha de Nacimiento
                                                        <span class="required"> * </span>
                                                    </label>
	                                                <div class="col-md-4">
	                                                    <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
	                                                        <input type="text" class="form-control" readonly data-required="1" name="fecha_nacimiento">
	                                                        <span class="input-group-btn">
	                                                            <button class="btn default" type="button">
	                                                                <i class="fa fa-calendar"></i>
	                                                            </button>
	                                                        </span>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Nacionalidad
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-4">
	                                                    <input type="text" name="nacionalidad" data-required="1" class="form-control" /> </div>
	                                            </div>
                                            <!-- INICIO FIELDSET - CONTACTO   -->
                                                <div class="portlet-title">
				                                    <div class="caption">
				                                        <i class="font-green"></i>
				                                        <span class="caption-subject font-green sbold uppercase">Contacto</span>
				                                    </div>
                          					  	</div>                                          
	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Correo
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-4">
	                                                    <input name="correo" type="email" class="form-control" /> </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Telefono Local
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-4">
	                                                    <input name="tel_local" type="text" class="form-control" /> </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Telefono Personal
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-4">
	                                                    <input name="tel_personal" type="text" class="form-control" /> </div>
	                                            </div>
                                                <div class="portlet-title">
				                                    <div class="caption">
				                                        <i class="font-green"></i>
				                                        <span class="caption-subject font-green sbold uppercase">Perfil en la empresa</span>
				                                    </div>
                          					  	</div> 
	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Cargo
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-4">
	                                                    <input name="cargo" type="text" class="form-control" /> </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Salario
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-4">
	                                                    <input name="salario" type="text" class="form-control" />
	                                                    <!-- <span class="help-block"> e.g: 5500 0000 0000 0004 </span> -->
	                                                </div>
	                                            </div>
	                                        <div class="form-actions">
	                                            <div class="row">
	                                                <div class="col-md-offset-3 col-md-9">
	                                                    <button id="registrar" type="submit" class="btn green">Registrar</button>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div>
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>

<?php include_once '../includes/template/footer.php'; ?>

<!-- JS -->
<!-- <script src="includes/javascript/jquery.js"></script> -->