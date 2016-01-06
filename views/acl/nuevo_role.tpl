<style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Nuevo Role</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Role: </td>
            <td><input type="text" name="role" value="{$datos.role|default:""}"></td>
        </tr>
    </table>
<ul class="list-inline">        
    <li><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Guardar</button></li>
    <li><a class="btn btn-primary" href="{$_layoutParams.root}acl"><i class="glyphicon glyphicon-backward icon-white"> </i> Volver</a></li>
</ul>

</form>