{include file="header.tpl"}
<div class="row">
  <div class="col-md-12 col-md-offset-3">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Pasta</th>
          <th scope="col">Harina</th>
        </tr>
      </thead>
        <tbody>
          <tr>
            <td>{$pasta->nombre}</td>
            <td>{$pasta->tipo}</td>
          </tr>
        </tbody>
    </table>
     <h1>Estamos acá</h1>
      <picture>
        <img src="{$pasta->imagen}" class="img-fluid img-thumbnail">
      </picture>
  </div>

</div>
    
{include file="footer.tpl"}