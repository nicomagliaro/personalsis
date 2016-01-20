
<h2>Nuevo Role</h2>

<div class="col-md-6">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    <div>
        <label for="inputText">Role: </label>
        <input type="text" class="form-control" name="role" id="inputText" placeholder="Ingresar Role" value="{$datos.role|default:''}">
    </div><br>
    <div class="btn-group" role="group">       
        <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white">Guardar</i></button>
        <button class="btn btn-primary" href="{$_layoutParams.root}acl"><i class="glyphicon glyphicon-backward icon-white"> </i> Volver</button>
    </div>
</form>
</div>