<form  class="form-group" role="form" method="POST" action="<?= base_url()?>correo/enviar" autocomplete="off">

<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
<label for="txtcorreo" class="control-label">Ingrese su usuario gmail</label>
<input type="text" class="form-control"  name="txtcorreo" id="txtcorreo">
</div>

<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
<label for="txtpassword">Contraseña</label>
<input type="password" class="form-control"  placeholder="Contraseña" name="txtpassword" id="txtpassword" value="">	
</div>
<div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-8">
<label for="txttitulo">Titulo del correo</label>
<input type="text" class="form-control" placeholder="Titulo del correo" name="txttitulo" id="txttitulo" value="">
</div>
<div class="form-group">
<div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-8">
<label for="txtcorreodestino">Destinatario</label>
<input type="email" class="form-control" placeholder="ingrese correo de destino" name="txtcorreodestino" id="txtcorreodestino" value="">	
</div>
<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
<textarea placeholder="mensaje" name="txtmensaje" id="txtmensaje"rows="5" cols="40"></textarea>
</div>
<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
<input type="submit" class="btn btn-primary btn-lg" name="btnenviar" id="btnenviar">
</div>
</form>