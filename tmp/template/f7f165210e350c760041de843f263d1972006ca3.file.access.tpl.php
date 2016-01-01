<?php /* Smarty version Smarty-3.1.8, created on 2015-02-19 18:33:46
         compiled from "/var/www/portalicm/views/error/access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82433338654e656ba942a20-07344916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7f165210e350c760041de843f263d1972006ca3' => 
    array (
      0 => '/var/www/portalicm/views/error/access.tpl',
      1 => 1335208334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82433338654e656ba942a20-07344916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54e656bacd0df7_37652182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e656bacd0df7_37652182')) {function content_54e656bacd0df7_37652182($_smarty_tpl) {?><h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

<?php if ((!Session::get('autenticado'))){?>

| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesi&oacute;n</a>

<?php }?><?php }} ?>