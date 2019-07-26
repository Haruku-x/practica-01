<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pruebas</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

    <!-- Main Style-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/login.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo base_url()?>"><b>Automotriz</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">

            <form action="<?php echo base_url()?>?/cLogin/iniciarSesion" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" name="txt_nick_l" class="form-control" placeholder="Usuario" required="required" autocomplete="off"  maxlength="15">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="txt_pass_l" class="form-control" placeholder="Contraseña" required="required" autocomplete="off" maxlength="30">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row text-center">
                    <div class="col-xs-6">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#signinModal">
                        Registrarse
                      </button>
                    </div>
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </div>
                </div>
                <!-- ./row -->
            </form>
            <!-- /.form -->

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    



    <!-- Modal -->
    <div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="signinModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center h1" id="signinModalLabel">Registrarse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url()?>?/cLogin/registrarse" method="post">
                        <div class="form-group has-feedback">
                            <input type="text" name="txt_nick_s" class="form-control" placeholder="Nombre de Usuario" required="required" autocomplete="off"  maxlength="15">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" name="txt_pass_s" class="form-control" placeholder="Contraseña" required="required" autocomplete="off"  maxlength="40">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" name="txt_nombre_s" class="form-control" placeholder="Nombre" required="required" autocomplete="off"  maxlength="30">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback row">
                            <div class="col-xs-6">
                            <input type="text" name="txt_ape_pat_s" class="form-control" placeholder="Apellido Paterno" required="required" autocomplete="off"  maxlength="30">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="col-xs-6">
                            <input type="text" name="txt_ape_mat_s" class="form-control" placeholder="Apellido Materno" required="required" autocomplete="off"  maxlength="30">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                                <label>Tipo de usuario</label>
                                <select name="opc_tipo" id="opc_tipo" required>
                                <option value="" selected>::Tipo::</option>
                                <option value="1">emp</option>
                                <option value="99">admin</option>
                                </select>
                                <input type="hidden" name="txt_Nombre" id="txt_Nombre" />
                            <input type=hidden name="txt_tipo">
                        </div>
                        <!-- ./Modal body-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                    </form>
                    <!-- /.form -->
                </div>
                
            </div>
            <!-- ./Modal content-->
        </div>
    </div>
    <!-- ./Modal -->



    <!-- jQuery 2.2.0 -->
    <script src="<?php echo base_url();?>/assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>/assets/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    <!-- SweetAlert2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
</body>

</html>