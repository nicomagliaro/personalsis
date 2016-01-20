{extends file='template.tpl'}

{block name=menu}
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{$_layoutParams.root}">Project name</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        {if Session::get('autenticado')}
        <li>
          <a id="tip1" href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown tooltip" data-placement="bottom" title="{Session::get('user')|default:'User'}"></a>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li>
              <a href="{$_layoutParams.root}usuarios/login/cerrar" >Cerrar <span class="glyphicon glyphicon-expand pull-right"></span></a>
            </li>
          </ul>
        </li>
        <li>
            <a href="#" class="glyphicon glyphicon-cog"></a>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li>
              <a href="{$_layoutParams.root}settings/">Menus <span class="glyphicon glyphicon-expand pull-right"></span></a>
            </li>
          </ul>
        </li>
        {else}
        <li>
          <a id="tip1" href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown tooltip" data-placement="bottom" title="{Session::get('user')|default:'User'}"></a>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li>
              <a href="{$_layoutParams.root}usuarios/login">Entrar<span class="glyphicon glyphicon-expand pull-right"></span></a>
            </li>
          </ul>
        </li>
        {/if}
      </ul>
      <form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Buscar...">
      </form>
    </div>
  </div>
</div>
{/block}
