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
    <form method="POST" action="save">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Ingrese Pasta">
            </div>
            </div>
                <select class="custom-select" id="inputGroupSelect01">
                {foreach from=$tablaPastas item=pasta}
                    {* <option selected>Harina...</option> *}
                    <option value={$pasta->fk_harina}>{if $pasta->fk_harina==1}
                            Integral
                        {elseif $pasta->fk_harina==2}
                            Blanca
                        {else}
                            Mandioca
                        {/if}
                    </option>
                    {/foreach}
                </select>
            </div>
             <button type="submit">Enviar Cambios</button>
        </div>
    </form>




{include file="footer.tpl"}
