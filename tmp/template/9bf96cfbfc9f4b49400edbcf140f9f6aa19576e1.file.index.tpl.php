<?php /* Smarty version Smarty-3.1.8, created on 2016-01-06 22:52:57
         compiled from "/Users/nicom/Sites/portalicm/modules/usuarios/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:384235741568688c07992f1-10306448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bf96cfbfc9f4b49400edbcf140f9f6aa19576e1' => 
    array (
      0 => '/Users/nicom/Sites/portalicm/modules/usuarios/views/index/index.tpl',
      1 => 1452117174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '384235741568688c07992f1-10306448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_568688c07c1a90_36546035',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568688c07c1a90_36546035')) {function content_568688c07c1a90_36546035($_smarty_tpl) {?><h2><small>Panel de Usuarios</small></h2>

<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/listar">
              	<button type="button" class="list-group-item">Usuarios</button>
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registro">
            	<button type="button" class="list-group-item">Registrar Usuario</button>
            </a>
        </div>
        
    	<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
"><i class="glyphicon glyphicon-backward icon-white"> </i> Volver
    	</a>
      
    </div>
</div><?php }} ?>