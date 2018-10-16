{include file="header.tpl"}
  <div class="row">
    <div class="col-md-6 col-center">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Harina</th>
            {* <th scope="col"></th> *}
          </tr>
        </thead>
        {foreach from=$tablaHarinas item=harina}
          <tbody>
            <tr>
              <td>{$harina->tipo}</td>
              {* <td> </td>  *}
            </tr>
          </tbody>
        {/foreach}
    </table>
    </div>
  </div>
</div>
{include file="footer.tpl"}
