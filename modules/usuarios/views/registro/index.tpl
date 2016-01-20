<h2>Registro</h2>

<div class="well col-lg-8">
    <form name="form1" method="post" action="">
        <input type="hidden" value="1" name="enviar" />
        <div class="form-group">
            <label for="inputText">Nombre</label>
            <input type="text" class="form-control" id="inputText" placeholder="Ingrese nombre" name="nombre" value="{$datos.nombre|default:""}" >
        </div>
        <div class="form-group">
            <label for="inputText">Usuario</label>
            <input type="text" class="form-control" id="inputText" placeholder="Ingrese usuario" value="{$datos.usuario|default:""}" >
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Ingrese email" name="email" value="{$datos.email|default:""}">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Ingrese password">
        </div>
        <div class="form-group">
            <label for="iinputPassword">Confirmar</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Confirmar password">
        </div><br> 
        <div class="btn-group" role="group">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button class="btn btn-primary" href="{$_layoutParams.root}"><i class="glyphicon glyphicon-backward icon-white"> </i> Volver
            </button>
        </div>
    </form>
</div>