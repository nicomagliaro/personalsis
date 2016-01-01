<?php /* Smarty version Smarty-3.1.8, created on 2014-10-05 10:52:57
         compiled from "/var/www/portalicm/views/post/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114945743254314d39209475-54028749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21ceb49632dbf3dbbfec7b3f43e029e7b15300d2' => 
    array (
      0 => '/var/www/portalicm/views/post/nuevo.tpl',
      1 => 1352150412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114945743254314d39209475-54028749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54314d3955ecd3_03201996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54314d3955ecd3_03201996')) {function content_54314d3955ecd3_03201996($_smarty_tpl) {?><form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo" enctype="multipart/form-data">
    <input type="hidden" name="guardar" value="1" />
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Titulo: </td>
            <td><input type="texto" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
    
        <tr>
            <td style="text-align: right;">Cuerpo: </td>
            <td><textarea name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea></td>
        </tr>

        <tr>
            <td colspan="4">
                Imagen: <input type="file" name="imagen" />
            </td>
        </tr>
    </table>
        
    <p><button class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
</form><?php }} ?>