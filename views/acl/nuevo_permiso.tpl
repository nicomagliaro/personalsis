
<h2>Nuevo Permiso</h2>
<div class="col-md-6">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1">
    <div>
        <label for="inputText">Permiso</label>
        <input type="text" class="form-control" name="permiso" id="inputText" placeholder="Ingresar Role" value="{$datos.permiso|default:""}">
    </div>
    <div>
        <label for="inputText">Key</label>
        <input type="text" class="form-control" name="key" id="inputText" placeholder="Ingresar Role" name="key" value="{$datos.key|default:""}">
    </div><br>
    <div class="btn-group" role="group">       
        <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white">Guardar</i></button>
        <button class="btn btn-primary" href="{$_layoutParams.root}acl"><i class="glyphicon glyphicon-backward icon-white"> </i> Volver</button>
    </div>
</form>
</div>