{include file="header.tpl"}


  <div class="row">
      <div class="col-md-6 col-center">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Pasta</th>
                {* <th scope="col"></th> *}
              </tr>
            </thead>
          {foreach from=$tablaPastas item=pasta}
            <tbody>
              <tr>
                <td>{$pasta->nombre}</td>
                {* <td>{$pasta->tipo}</td> *}
              </tr>
            </tbody>
          {/foreach}
      </table>
      </div>
  </div>

{include file="footer.tpl"}