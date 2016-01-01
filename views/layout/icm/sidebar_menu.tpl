{extends file='template.tpl'}
{block name=sidebar}
<div class="col-sm-3 col-md-2 sidebar" id="prueba">
  <ul class="nav nav-pills nav-stacked">
      <li class="active"><a href="{$_layoutParams.root}">Inicio<span class="glyphicon glyphicon-home pull-right"></span></a></li>
      {if Session::get('autenticado')}
      <li class="menu-item dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Seguridad <span class="glyphicon glyphicon-chevron-left pull-right"></span></a>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
              <li>
                  <a href="{$_layoutParams.root}usuarios">Usuarios<span class="glyphicon glyphicon-expand pull-right"></span></a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="{$_layoutParams.root}acl">Permisos<span class="glyphicon glyphicon-expand pull-right"></span></a>
              </li>
          </ul>
      </li>
  </ul>
  <ul class="nav nav-pills nav-stacked" role="tablist">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Administración<span class="glyphicon glyphicon-chevron-left pull-right"></span></a>
        <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li><a href="{$_layoutParams.root}lotes/producto">Productos<span class="glyphicon glyphicon-expand pull-right"></a></li>
            <li><a href="{$_layoutParams.root}lotes/catalogo">Catálogos<span class="glyphicon glyphicon-expand pull-right"></a></li>
            <li class="divider"></li>
            <li><a href="{$_layoutParams.root}lotes/sede">Centros<span class="glyphicon glyphicon-expand pull-right"></a></li>
        </ul>
    </li>
    {/if}
  </ul>

  </div>

{/block}
