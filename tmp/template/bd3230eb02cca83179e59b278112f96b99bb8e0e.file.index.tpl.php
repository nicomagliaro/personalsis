<?php /* Smarty version Smarty-3.1.8, created on 2014-10-23 19:38:14
         compiled from "/var/www/portalicm/modules/usuarios/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:536687655544983561ec555-30328535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd3230eb02cca83179e59b278112f96b99bb8e0e' => 
    array (
      0 => '/var/www/portalicm/modules/usuarios/views/login/index.tpl',
      1 => 1352207466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '536687655544983561ec555-30328535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5449835624bec4_73949599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5449835624bec4_73949599')) {function content_5449835624bec4_73949599($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Iniciar Sesi&oacute;n</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Usuario: </td>
            <td><input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>

        <tr>
            <td style="text-align: right;">Password: </td>
            <td><input type="password" name="pass" /></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Entrar</button></p>
</form><?php }} ?>