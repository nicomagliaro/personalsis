<?php /* Smarty version Smarty-3.1.8, created on 2015-07-12 17:59:17
         compiled from "/Users/nicom/Sites/portalicm/modules/usuarios/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130279640155a28ed57f1786-29529389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec0d41972b39704b9d45a8635f7ff71a0094a1e5' => 
    array (
      0 => '/Users/nicom/Sites/portalicm/modules/usuarios/views/login/index.tpl',
      1 => 1428523749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130279640155a28ed57f1786-29529389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55a28ed5852f69_18489504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a28ed5852f69_18489504')) {function content_55a28ed5852f69_18489504($_smarty_tpl) {?><style type="text/css">
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