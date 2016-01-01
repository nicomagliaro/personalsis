<?php /* Smarty version Smarty-3.1.8, created on 2014-10-23 17:11:06
         compiled from "/var/www/portalicm/views/layout/icm/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120361283954325647a846b9-10988092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55aeda5f81758294cf42111048ebd4c607119032' => 
    array (
      0 => '/var/www/portalicm/views/layout/icm/template.tpl',
      1 => 1414094564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120361283954325647a846b9-10988092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54325647d76ec4_19972818',
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
<?php if ($_valid && !is_callable('content_54325647d76ec4_19972818')) {function content_54325647d76ec4_19972818($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">



<body>

<div class="container-fluid">
    <div class="row">

        

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