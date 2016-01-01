<?php /* Smarty version Smarty-3.1.8, created on 2014-10-23 17:11:06
         compiled from "/var/www/portalicm/views/layout/icm/sidebar_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65642723554495953ce2792-20793798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72b3cd58d47bda2411935b6c872441a59ad21983' => 
    array (
      0 => '/var/www/portalicm/views/layout/icm/sidebar_menu.tpl',
      1 => 1414094925,
      2 => 'file',
    ),
    '55aeda5f81758294cf42111048ebd4c607119032' => 
    array (
      0 => '/var/www/portalicm/views/layout/icm/template.tpl',
      1 => 1414094564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65642723554495953ce2792-20793798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54495953d002b5_46682262',
  'variables' => 
  array (
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    '_layoutParams' => 0,
    'plg' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54495953d002b5_46682262')) {function content_54495953d002b5_46682262($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">



<body>

<div class="container-fluid">
    <div class="row">

        
<div class="col-sm-3 col-md-2 sidebar" id="prueba">
          <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Inicio       <span class="glyphicon glyphicon-home pull-right"></span></a></li>
              <li class="menu-item dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Seguridad  <span class="glyphicon glyphicon-chevron-left pull-right"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu">
                      <li>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios">Usuarios <span class="glyphicon glyphicon-expand pull-right"></span></a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl">Permisos   <span class="glyphicon glyphicon-expand pull-right"></span></a>
                      </li>
                  </ul>
              </li>
          </ul>
          <ul class="nav nav-pills nav-stacked" role="tablist">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Administración  <span class="glyphicon glyphicon-chevron-left pull-right"></span></a>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lotes/producto">Productos<span class="glyphicon glyphicon-expand pull-right"></a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lotes/catalogo">Catálogos<span class="glyphicon glyphicon-expand pull-right"></a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lotes/sede">Centros<span class="glyphicon glyphicon-expand pull-right"></a></li>
                </ul>
            </li>
          </ul>

  </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <noscript><p>Para el correcto funcionamiento debe tener el soporte para javascript habilitado</p></noscript>

            <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?>
                <div id="_errl" class="alert alert-error">
                    <a class="close" data-dismiss="alert">x</a>
                    <?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

                </div>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?>
                <div id="_msgl" class="alert alert-success">
                    <a class="close" data-dismiss="alert">x</a>
                    <?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>

                </div>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
docs.min.js"></script>

<script type="text/javascript">
  var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
</script>

 <!-- Custom javascript -->

<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])){?>
    <?php  $_smarty_tpl->tpl_vars['plg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plg']->key => $_smarty_tpl->tpl_vars['plg']->value){
$_smarty_tpl->tpl_vars['plg']->_loop = true;
?>
<script src="<?php echo $_smarty_tpl->tpl_vars['plg']->value;?>
" type="text/javascript"></script>
    <?php } ?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
    <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
    <?php } ?>
<?php }?>

</body>
</html>
<?php }} ?>