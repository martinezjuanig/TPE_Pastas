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
              {foreach from=$db_pastas item=pastas}
                <tbody>
                  <tr>
                    <td>{$pastas->nombre}</td>
                    <td>{$pastas->tipo}</td>
                  </tr>
                </tbody>
              {/foreach}
            </table>
          </div>
      </div>
    



{include file="footer.tpl"}