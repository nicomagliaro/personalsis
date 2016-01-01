<?php /* Smarty version Smarty-3.1.8, created on 2014-11-22 12:15:20
         compiled from "/var/www/portalicm/views/layout/icm/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131113357754708c671eb4e0-40444415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69295abdd04de97708c8b8daf3da09f6d948251c' => 
    array (
      0 => '/var/www/portalicm/views/layout/icm/footer.tpl',
      1 => 1414094923,
      2 => 'file',
    ),
    'ec06ccdfba76fadf8e1ddd573ad80370d3a8f9cb' => 
    array (
      0 => '/var/www/portalicm/views/layout/icm/header.tpl',
      1 => 1414094930,
      2 => 'file',
    ),
    '55aeda5f81758294cf42111048ebd4c607119032' => 
    array (
      0 => '/var/www/portalicm/views/layout/icm/template.tpl',
      1 => 1416669309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131113357754708c671eb4e0-40444415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54708c67561b57_21981364',
  'variables' => 
  array (
    'widgets' => 0,
    'tp' => 0,
    'wd' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    '_layoutParams' => 0,
    'plg' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54708c67561b57_21981364')) {function content_54708c67561b57_21981364($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">



<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/icon.png">

<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin t&iacute;tulo" : $tmp);?>
</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
dashboard.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
dropdown.css" rel="stylesheet">

<!-- Custom styles view template -->

<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['css_plugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['css_plugin'])){?>
    <?php  $_smarty_tpl->tpl_vars['slg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['css_plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slg']->key => $_smarty_tpl->tpl_vars['slg']->value){
$_smarty_tpl->tpl_vars['slg']->_loop = true;
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['slg']->value;?>
" rel="stylesheet">
    <?php } ?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['css'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['css'])){?>
    <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" media="screen" />
    <?php } ?>
<?php }?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body>

<!-- Menu Top Principal-->

<?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['top'])){?>
    <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['tp']->value;?>

    <?php } ?>
<?php }?>

<!-- Fin Menu Top Principal-->

<div class="container-fluid">

<!-- Menu Sidebar -->

    <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['sidebar'])){?>
        <?php  $_smarty_tpl->tpl_vars['wd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wd']->key => $_smarty_tpl->tpl_vars['wd']->value){
$_smarty_tpl->tpl_vars['wd']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['wd']->value;?>

        <?php } ?>
    <?php }?>

<!-- Fin Menu Sidebar-->

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


 <!-- Footer -->
    <!-- <div class="navbar navbar-fixed-bottom">
        <div class="navbar-inner">
            <div class="container">
                <div style="margin-top: 10px; text-align: left">Version: 1.0 <a href="#" target="_blank">Desarrollado por #### &COPY;<?php echo date('Y');?>
</a></div>
            </div>
        </div>
    </div>-->


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