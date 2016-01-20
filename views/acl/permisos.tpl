<h2>Administración de permisos</h2>

{if isset($permisos) && count($permisos)}
<table class="table table-bordered table-condensed table-striped" style="width:500px;">
    <tr>
        <th>ID</th>
        <th>Permiso</th>
        <th>Llave</th>
        <th></th>
    </tr>
    
    {foreach item=rl from=$permisos}
    
        <tr>
            <td>{$rl.id_permiso}</td>
            <td>{$rl.permiso}</td>
            <td>{$rl.key}</td>
            <td>Editar</td>
        </tr>
        
    {/foreach}
    
</table>
{/if}
<div class="btn-group" role="group">       
    <a href="{$_layoutParams.root}acl/nuevo_permiso"><button type="submit" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i>Agregar Permiso</button>
    <button class="btn btn-primary" href="{$_layoutParams.root}acl"><i class="glyphicon glyphicon-backward icon-white"> </i> Volver</button>
</div>