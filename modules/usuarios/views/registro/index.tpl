<h2>Registro</h2>

<div class="well col-lg-8">
    <form name="form1" method="post" action="">
        <input type="hidden" value="1" name="enviar" />
        <div class="form-group">
            <label for="inputText">Nombre</label>
            <input type="text" class="form-control" id="inputText" placeholder="Ingrese nombre" name="nombre" value="{$datos.nombre|default:''}" >
        </div>
        <div class="form-group">
            <label for="inputText">Usuario</label>
            <input type="text" class="form-control" id="inputText" placeholder="Ingresar usuario" name="usuario" value="{$datos.usuario|default:''}" >
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Ingrese email" name="email" value="{$datos.email|default:''}">
        </div>
        <div class="form-group">
            <label>Rol del Usuario</label>
            <div class="selectContainer">
                <select name="role" class="form-control">
                    <option value="0">[-]</option>
            {if count($roles)}
                {foreach item=r from=$roles}
                    <option value="{$r.id_role}">{$r.role}</option>
                {/foreach}
            {else}
                    <option>No existe registro</option>
            {/if}                 
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="pass" placeholder="Ingrese password">
        </div>
        <div class="form-group">
            <label for="iinputPassword">Confirmar</label>
            <input type="password" class="form-control" id="inputPassword" name="confirmar" placeholder="Confirmar password">
        </div><br> 
        <div class="btn-group" role="group">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button class="btn btn-primary" href="{$_layoutParams.root}"><i class="glyphicon glyphicon-backward icon-white"> </i> Volver
            </button>
        </div>
    </form>
</div>