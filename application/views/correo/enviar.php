<form class="form-orizontal container" method="POST" action="<?= base_url()?>correo/enviar" autocomplete="off">
<div class="form-group col-xs-4">
<label for="txtcorreo" class="control-label">Ingrese su correo gmail</label>
<input type="text" class="form-control"  name="txtcorreo" id="txtcorreo"><label class="col-xs-2 ">@gmail.com</label>
</div>

<div class="form-group col-xs-4">
<label for="txtpassword">Contraseña</label>
<input type="password" class="form-control"  placeholder="Contraseña" name="txtpassword" id="txtpassword" value="">	
</div>
<div class="form-group col-xs-8">
<label for="txttitulo">Titulo del correo</label>
<input type="text" class="form-control" placeholder="Titulo del correo" name="txttitulo" id="txttitulo" value="">
</div>
<div class="form-group">
<div class="form-group col-xs-12">
<label for="txtcorreodestino">Destinatario</label>
<input type="email" class="form-control" placeholder="ingrese correo de destino" name="txtcorreodestino" id="txtcorreodestino" value="">	
</div>
<div class="form-group col-xs-12">
<textarea placeholder="mensaje" name="txtmensaje" id="txtmensaje"rows="5" cols="40"></textarea>
</div>
<div class="form-group col-xs-12">
<input type="submit" class="btn btn-primary btn-lg" name="btnenviar" id="btnenviar">
</div>
</form>