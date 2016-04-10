<h2><small>Crear Nuevo Menu</small></h2>

<div class="row">
<div class="well col-md-8">
    <form name="form1" method="post" action="">
        <input type="hidden" value="1" name="enviar" />
        <div class="form-group">
            <label for="inputText">Menu Id</label>
            <input type="text" class="form-control" id="inputText" placeholder="Ingrese Menu Id" name="id" value="{$datos.id|default:''}" required>
        </div>
         <div class="form-group">
            <label for="inputText">Menú</label>
            <input type="text" class="form-control" id="inputText" placeholder="Ingrese nombre" name="nombre" value="{$datos.menu|default:''}" required>
        </div>
        <div class="form-group">
            <label for="inputText">Enlace</label>
            <input type="text" class="form-control" id="inputText" placeholder="Ingresar ruta de modulo" name="enlace" value="{$datos.enlace|default:''}" required>
        </div>
        <div class="form-group">
            <label for="inputEmail">Icono</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Ingrese glyphicon" name="icono" value="{$datos.icono|default:''}" required>
        </div>
        <div class="form-group">
            <label>Tipo de Menu</label>
            <div class="selectContainer">
                <select name="mtipo" class="form-control">
            {if count($mtipo)}
                {foreach item=t from=$mtipo}
                    <option value="{$t.idmenu_type}">{$t.name|default:'Tipo de menu'}</option>
                {/foreach}
            {else}
                    <option>No existe registro</option>
            {/if}                 
                </select>
            </div>
        </div>
        <div class="checkbox form-group">
            <label>
              <input type="checkbox" name="enable_menu" value="Yes" id="enable_menu">Habilitar Menú 
            </label>
            <label>
              <input type="checkbox" name="auth" value="Yes" id="auth">Requiere autenticación 
            </label>
        </div>
        <div class="form-group" id="acceso">
            <label>Nivel de acceso</label>
            <div class="selectContainer">
                <select name="acceso" class="form-control">
                    <option value="0">[-]</option>
            {if count($acceso)}
                {foreach item=a from=$acceso}
                    <option value="{$a.id_role}">{$a.role|default:'Acceso'}</option>
                {/foreach}
            {else}
                    <option>No existe registro</option>
            {/if}                 
                </select>
            </div>
        </div>

        <div class="btn-group" role="group">
            <button class="btn btn-primary" href="{$_layoutParams.root}"><i class="glyphicon glyphicon-backward icon-white"> </i> Volver
            </button>
            <button type="submit" class="btn btn-primary" href="{$_layoutParams.root}settings/menus/crear"><i class="glyphicon glyphicon-forward icon-white"> </i> Crear</a></button>
            
        </div>
    </form>
</div>