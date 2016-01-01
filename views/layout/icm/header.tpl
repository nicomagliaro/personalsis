{extends file='template.tpl'}
{block name=head}

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{$_layoutParams.root}public/img/icon.png">

<title>{$titulo|default:"Sin t&iacute;tulo"}</title>

<!-- Bootstrap core CSS -->
<link href="{$_layoutParams.ruta_css}bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{$_layoutParams.ruta_css}dashboard.css" rel="stylesheet">
<link href="{$_layoutParams.ruta_css}dropdown.css" rel="stylesheet">

<!-- Custom styles view template -->

{if isset($_layoutParams.css_plugin) && count($_layoutParams.css_plugin)}
    {foreach item=slg from=$_layoutParams.css_plugin}
<link href="{$slg}" rel="stylesheet">
    {/foreach}
{/if}

{if isset($_layoutParams.css) && count($_layoutParams.css)}
    {foreach item=css from=$_layoutParams.css}
<link rel="stylesheet" type="text/css" href="{$css}" media="screen" />
    {/foreach}
{/if}
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
{/block}
