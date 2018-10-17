{include file="header.tpl"}
<div class="row">
        <div class="col-md-6 col-center">
            
            <h1>Vista de administrador</h1>
            <p>{$harina->tipo}</p>
        </div>
    </div>
  
    <div class="row">    
        <div class="col-md-6 col-center">  
          <form method="POST" action="editHarina">
                <div class="row">
                    <div class="col">
                        <input type='hidden' name='id_harina' value={$harina->id_harina}>
                        <input type="text" name='tipo' class="form-control" placeholder="Escriba Aquí los cambios" required>
                        <button type="submit">Enviar cambios</button>
                    </div>
                </div>
          </form>
          <a href="admin/">Atrás</a> 
        </div>          
    </div>

{include file="footer.tpl"}