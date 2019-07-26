<div class="m-container-full-banner">
    <div class="row"></div>
    <div class="row m-banner">
        <div class="row">
            <p class="m-banner-p">Dar de Alta Venta</p>
        </div>
    </div>
</div>
<div class="container-full">
    <div class="container">
        <!-- Button trigger modal -->
        <div class="row">
            <button type="button" class="btn btn-primary m-btn-venta" data-toggle="modal" data-target="#Modal">
				Nueva Venta
			</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title h4" id="ModalLabel">Nueva Venta</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
                </div>
                <div class="modal-body text-center">
                <form action="<?php echo base_url()?>?/cAltaVenta/RegAltaVenta" method="post">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Producto</label><br>
                                <select name="opc_nombre_prod" id="opc_nombre_prod" required>
                                <option value="" selected>::Seleccione::</option>
                                </select>
                                <input type="hidden" name="txt_Nombre" id="txt_Nombre" />
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>Cantidad</label>
                                <input type="number" class="form-control" min="1" step="1" name="txt_Cant" id="txt_Cant" required/>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Marca</label>
                                <input type="text" class="form-control" name="txt_Marca"  id="txt_Marca" required readonly="readonly"/>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Modelo</label>
                                <input type="text" class="form-control" name="txt_Modelo" id="txt_Modelo" required readonly="readonly"/>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Precio</label>
                                <input type="number" class="form-control" name="txt_Precio" id="txt_Precio" required readonly="readonly"/>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <!-- checkbox -->
                        <div class="form-group">
                            <p><b>Detalles</b></p>
                            <?php $count = 0;
                            foreach($deta as $key => $val):
                                echo 
                                '<label>'.$val['nombre']
                                .'&nbsp;<input type="checkbox" 
                                        name="ck_deta[]" 
                                        value="'.$val['nombre'].'"x/>'
                                .'</label>&emsp;';
                                if($count % 2 != 0){
                                    echo "<br/>";
                                }
                                $count++;
                                endforeach;?>
                            
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                    <div class="col-xs-12 text-right">
                    <input type="text" class="form-control" name="txt_Total" id="txt_Total" required readonly="readonly"/>
                    </div>
                    </div>
                    <!-- /.row -->
                    
                </div>
                <!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn_cancelar">
						Cancelar
					</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
var base_url = '<?php echo base_url();?>';
</script>
