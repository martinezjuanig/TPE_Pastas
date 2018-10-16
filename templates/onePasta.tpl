{include file="header.tpl"}
<div class="row">
  <div class="col-md-12 col-md-offset-3">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Pastas</th>
          <th scope="col">Harina</th>
        </tr>
      </thead>
        <tbody>
          <tr>
            <td>{$pasta->nombre}</td>
            <td>{$pasta->tipo}</td>
            <td></td>
          </tr>
        </tbody>
    </table>
  </div>
</div>
    
{include file="footer.tpl"}