{include file="header.tpl"}
  <h1>Vista de administrador</h1>
    
  <div class="row">
    <div class="col-md-6 col-center">
      <table class="table">
        <thead class="thead-dark">
          <tr>

            <th scope="col">Pasta</th>
            <th scope="col">Acción</th>
            <th scope="col">Acción</th>
            
          </tr>
        </thead>

        {foreach from=$db_pastas item=pastas}
          <tbody>
            <tr>
              <td>{$pastas->nombre}</td>
              <td><a href="delete/{$pastas->id_pasta}/">Borrar</a></td>
              <td><a href="adminPasta/{$pastas->id_pasta}/">Editar</a></td>
              
            </tr>
          </tbody>
        {/foreach}

      </table>
    </div>
  

    <div class="col-md-6 col-center ">  
      <div class="row "> 

        <div class="col-12 ">  
          <form method="POST" action="savePasta">
            <div class="row">
              <div class="col">
                <input type="text" name='pasta' class="form-control" placeholder="Ingrese Pasta">
                <select class="custom-select" name="harinas" id="inputGroupSelect01">
                  {foreach from=$db_harinas item=harinas}
                    <option value={$harinas->id_harina}>{$harinas->tipo}</option>
                  {/foreach}
                </select>
                <button type="submit">Agregar</button>
              </div>
            </div>
          </form>
        </div>
        

        <div class="col-12"> </div>
          
        <div class="col-12">
          <form method="POST" action="saveHarina">
            <input type="text" name='harina' class="form-control" placeholder="Agregar Harina">
            <button type="submit">Agregar Harina</button>
          </form>
        </div>
        
      </div>
    </div>


  </div>
{include file="footer.tpl"}