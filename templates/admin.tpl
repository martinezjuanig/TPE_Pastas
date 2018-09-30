{include file="header.tpl"}
  <h1></h1>
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Pasta</th>
                  <th scope="col">Harina</th>
                  <th scope="col">Acción</th>
                  <th scope="col">Acción</th>
                </tr>
              </thead>
              {foreach from=$db_pastas item=pastas}
                <tbody>
                  <tr>
                    <td>{$pastas->nombre}</td>
                    <td>{$pastas->tipo}</td>
                    <td><a href="delete/{$pastas->fk_harina}/">Borrar</a></td>
                    
                  </tr>
                </tbody>
              {/foreach}
            </table>
          </div>
      </div>
    
    <form method="POST" action="save">
        <div class="row">
            <div class="col">
                <input type="text" name='pasta' class="form-control" placeholder="Ingrese Pasta">
            </div>
            </div>
                <select class="custom-select" name="harina" id="inputGroupSelect01">
                {foreach from=$db_pastas item=pastas}
                    {* <option selected>Harina...</option> *}
                    <option value={$pastas->id_harina}>{$pastas->id_harina}</option>
                {/foreach}
                </select>
            </div>
             <button type="submit">Enviar Cambios</button>
        </div>
    </form>
  </div>

      {* <form method="POST" action="save">
          <input type="text" name="pasta" id="" placeholder="Tipo de Pasta">
          <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          <button type="submit">Guardar</button>
      </form>     *}

{include file="footer.tpl"}