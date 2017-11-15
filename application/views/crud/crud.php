<form class="form-inline" role="form" method="POST">
<div class="panel panel-default">
	<div class="panel-body">
    
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <label for="txtcodigo" class="control-label">Codigo</label>
                <input type="text" class="form-control"  name="txtcodigo" id="txtcodigo">
            </div>

            <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <label for="txtnombre" class="control-label">Nombre</label>
                <input type="text" class="form-control"  name="txtnombre" id="txtnombre">
            </div>

            <label for="cbofamilia" class="col-xs-12 col-sm-4 col-md-4 col-lg-4  control-label">Familia</label>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4  selectContainer">
                <select class="form-control" name="cbofamilia" id="cbofamilia">
                    <?php foreach ($familia->result() as $row) {?>
                        <option value="<?= $row->id; ?>"><?= $row->nombre;?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <label for="txtprecio" class="control-label">Precio</label>
                <input type="text" class="form-control"  name="txtprecio" id="txtprecio">
            </div>

            <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <br>
                 <button class="btn btn-default" id="btn_guardar"  type="submit" formaction="<?= base_url()?>crud/insertar_producto">Guardar nuevo</button>
                 <button class="btn btn-danger"  id="btn_modificar" style="display: none;"> type="submit" formaction="<?= base_url()?>crud/insertar_producto">Modificar</button>
            </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-striped">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Familia</th>
                <th>Precio</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($productos->result() as $row) {?>
                <tr>
                    <td><?= $row->codigo; ?></td>
                    <td><?= $row->nombre; ?></td>
                    <td><?= $row->familia; ?></td>
                    <td><?= $row->precio; ?></td>
                    <td><button class="btn btn-warning btn_modificar_t" id="<?= $row->id; ?>" >Modificar</button></td>
                    <td><button class="btn btn-danger" formaction="<?= base_url()?>crud/eliminar_producto/<?= $row->id; ?>" >Eliminar</button></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

</form>

<script type="text/javascript">
    $(document).ready(function(){
       $('.btn_modificar_t').click(function(e) {
           alert(this.id);
       });
    });
</script>