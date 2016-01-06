<h2><small>Panel de Menus</small></h2>

<div class="row">
    <div class="col-md-8">
        <div class="list-group">
        {*{print_r($menu_dbg)}*}
        {{print_r($_acl->getPermisosRole())}}
            <ul class="list-inline">
            	<li class="col-md-7"><a href="{$_layoutParams.root}acl/roles" class="list-group-item">Roles</a></li>
            	<li><button type="button" class="btn btn btn-info btn-sm">Ver Menu</button></li>
            	<li><button type="button" class="btn btn btn-warning btn-sm">Editar Menu</button></li>
            </ul>
            <ul class="list-inline">
            	<li class="col-md-7"><a href="{$_layoutParams.root}acl/permisos" class="list-group-item">Permisos</a></li>
				<li><button type="button" class="btn btn btn-info btn-sm">Ver Menu</button></li>
            	<li><button type="button" class="btn btn btn-warning btn-sm">Editar Menu</button></li>
            </ul>
			
			<br>
            <p><button type="button" class="btn btn-primary">Crear Menu</button></p>
        
        </div>
    </div>
</div>