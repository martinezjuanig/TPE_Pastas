{include file="header.tpl"}
  <h1>Vista de administrador</h1>
<div class="row ">
  <div class="col-md-9 col-center">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Pasta</th>
          <th scope="col">Harina</th>
          <th scope="col">Editar Pasta</th>
          <th scope="col">Editar Harina</th>
          <th scope="col">Borrar</th>
        </tr>
      </thead>

      {foreach from=$db_pastas item=pastas}
        <tbody>
          <tr>
            <td>{$pastas->nombre}</td>
            <td>{$pastas->tipo}</td>
            <td><a href="adminPasta/{$pastas->id_pasta}/">Editar</a></td>
            <td><a href="adminHarina/{$pastas->id_harina}/">Editar</a></td>
            <td><a href="delete/{$pastas->id_pasta}/">Borrar</a></td>
          </tr>
        </tbody>
      {/foreach}
    </table>
  </div>
</div>

<div class="row ">
  <div class="col-md-9 col-center ">  
    <form method="POST" action="savePasta" enctype="multipart/form-data">
      <div class="row">
        <div class="col">
          <input type="text" name='pasta' class="form-control" placeholder="Ingrese Pasta" required>
          <select class="custom-select" name="harina" id="inputGroupSelect01">
            {foreach from=$harinasTable item=harinas}
              <option value={$harinas->id_harina}>{$harinas->tipo}</option>
            {/foreach}
          </select>
          <input type="file" name='adjunto' class="form-control-file" id="adjunto" placeholder="Imagen" accept="image/jpeg">
          <button type="submit">Agregar</button>
        </div>
      </div>
    </form>
  </div>
      
  <div class="col-md-9 col-center"> </div>
      
  <div class="col-md-9 col-center">
    <form method="POST" action="saveHarina">
      <input type="text" name='harina' class="form-control" placeholder="Agregar Harina" required>
      <button type="submit">Agregar Harina</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}