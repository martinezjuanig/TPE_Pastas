{include file="header.tpl"}
<table>
    <thead>
        <tr>
            <th>Pasta</th>
        </tr>
    </thead>
    {foreach from=$tablaPastas item=pasta}
    <tbody>
        <tr>
            <td>{$pasta->nombre}</td>
        </tr>
    </tbody>

    {/foreach}
</table>


{include file="footer.tpl"}
