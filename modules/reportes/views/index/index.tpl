<form id="reportes" class="form-inline" method="POST">
    <fieldset>
      <legend>Reportes</legend>

      <label>Seleccione un reporte</label>

      <select name="id">
          {foreach item=repo from=$report_list}
              {if $repo.status}
      <option id="{$repo.reports}" value="{$repo.idreports}">{$repo.idreports} - {$repo.reports}</option>
              {/if}
          {/foreach}
      </select><br><br>
      <div id="data">
          <div id="num">
              <input class="form-control input-medium" type="text" name="num" placeholder="Núm Interno"><HR>
          </div>        
          <div id="estado">
              <input class="form-control input-medium" type="text" name="estado" placeholder="Estado" onkeyup="javascript:this.value=this.value.toUpperCase()" ><HR>
          </div>        
          <div id="fecha">
              <input type="text" class="form-control input-medium" id="datepicker" name="fecha" size="30" placeholder="Fecha"><HR>
          </div>        
          <div id="fecha-form" class="fecha-form">            
              <input class="form-control input-small" type="text" id="from" name="from" placeholder="Fecha desde...">&nbsp;&nbsp;
              <input class="form-control input-small" type="text" id="to" name="to" placeholder="Fecha hasta...">                 
          </div>  
      </div>
      <br><br><br>
      <button id="enviarRepo" class="btn btn-medium btn-primary"><i class="icon-search"> </i> Enviar</button>
    </fieldset>
</form>

