{include file="header.tpl"}

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pasta</th>
      <th scope="col">Harina :</th>
    </tr>
  </thead>
   {foreach from=$tablaPastas item=pasta}
        <tbody>
            <tr>
              <td>{$pasta->nombre}</td>
              <td>{if $pasta->fk_harina==1}
                    Integral
                  {elseif $pasta->fk_harina==2}
                    Blanca
                  {else}
                    Mandioca
                  {/if}
              </td>
            </tr>
        </tbody>
  {/foreach}
</table>


{include file="footer.tpl"}

