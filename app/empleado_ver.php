<?php
include_once("../includes/empleado.php");

$empleados = Empleado::buscar_todo();

?>
<?php include_once '../includes/template/header.php'; ?>
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Ver Empleados
                                <small>todos los empleados registrados</small>
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
                            <span class="active">Ver Empleados</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit portlet-datatable bordered" id="form_wizard_1">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-users font-green"></i>
                                        <span class="caption-subject font-green sbold uppercase">Empleados</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th> Nombre </th>
                                                <th> Cargo </th>
                                                <th> Salario </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        	foreach ($empleados as $empleado) {
                                        		echo "<tr>";
                                        		echo "<td>{$empleado->nombre} {$empleado->apellido}</td>";
                                        		echo "<td>{$empleado->cargo}</td>";
                                        		echo "<td>$ {$empleado->salario}</td>";
                                        		echo "</tr>";
                                        	}
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                </div>

<?php include_once '../includes/template/footer.php'; ?>