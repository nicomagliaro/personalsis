<!DOCTYPE html>
<html lang="es">

{block name=head}{/block}

<body>

{block name=menu}{/block}

<div class="container-fluid">

    <div class="row">

        {block name=sidebar}{/block}

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <noscript><p>Para el correcto funcionamiento debe tener el soporte para javascript habilitado</p></noscript>

            {if isset($_error)}
                <div id="_errl" class="alert alert-error">
                    <a class="close" data-dismiss="alert">x</a>
                    {$_error}
                </div>
            {/if}

            {if isset($_mensaje)}
                <div id="_msgl" class="alert alert-success">
                    <a class="close" data-dismiss="alert">x</a>
                    {$_mensaje}
                </div>
            {/if}

            {include file=$_contenido}


        </div>

    </div>

</div>

{block name=footer}{/block}

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{$_layoutParams.ruta_js}jquery.min.js"></script>
<script src="{$_layoutParams.ruta_js}bootstrap.min.js"></script>
<script src="{$_layoutParams.ruta_js}docs.min.js"></script>

<script type="text/javascript">
  var _root_ = '{$_layoutParams.root}';
</script>

 <!-- Custom javascript -->

{if isset($_layoutParams.js_plugin) && count($_layoutParams.js_plugin)}
    {foreach item=plg from=$_layoutParams.js_plugin}
<script src="{$plg}" type="text/javascript"></script>
    {/foreach}
{/if}

{if isset($_layoutParams.js) && count($_layoutParams.js)}
    {foreach item=js from=$_layoutParams.js}
<script src="{$js}" type="text/javascript"></script>
    {/foreach}
{/if}

</body>
</html>
