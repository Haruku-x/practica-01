<div class="m-container-full-banner">
    <div class="row"></div>
    <div class="row m-banner">
        <div class="row">
            <p class="m-banner-p">Ventas</p>
        </div>
    </div>
</div>
<div class="container">

<div class="table">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pedidos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Vendedor</th>
                  <th>Detalles</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($all as $key => $val):
                echo '<tr>'
                    .'<td>'.$val['fecha'].'</td>'
                    .'<td>'.$val['emp'].'</td>'
                    .'<td>'.$val['detalles'].'</td>'
                    .'<td>'.$val['total'].'</td>'
                    .'</tr>';
                endforeach;?>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
</div>