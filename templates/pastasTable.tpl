{include file="header.tpl"}

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pasta</th>
      <th scope="col">Harina de :</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
   {foreach from=$tablaPastas item=pasta}
        <tbody>
            <tr>
            <td>{$pasta->nombre}</td>
            <td>{$pasta->tipo}</td>
            <td>@mdo</td>
            </tr>
        </tbody>
  {/foreach}
</table>


{include file="footer.tpl"}

