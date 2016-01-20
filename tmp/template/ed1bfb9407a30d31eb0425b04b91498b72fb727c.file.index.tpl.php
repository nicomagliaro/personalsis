<?php /* Smarty version Smarty-3.1.8, created on 2016-01-06 22:49:48
         compiled from "/Users/nicom/Sites/portalicm/views/acl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4641176165685351b8904c9-81583688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed1bfb9407a30d31eb0425b04b91498b72fb727c' => 
    array (
      0 => '/Users/nicom/Sites/portalicm/views/acl/index.tpl',
      1 => 1452116984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4641176165685351b8904c9-81583688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5685351b8ec946_82111788',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5685351b8ec946_82111788')) {function content_5685351b8ec946_82111788($_smarty_tpl) {?><h2><small>Panel de control de acceso</small></h2>

<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles"><button type="button" class="list-group-item">Roles</button></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos"><button type="button" class="list-group-item">Permisos</button></a>
        </div>
    </div>
</div><?php }} ?>