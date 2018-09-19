{include file="header.tpl"}
<table>
    {foreach from=$tablaPastas item=pasta}
     <tr>
        <td>{$pasta->nombre}</td>
        <td></td>
        
     </tr>

    {/foreach}
</table>


{include file="footer.tpl"}
