{include file="header.tpl"}
    <div class="row">
        <div class="col-md-6 col-center">
             
            <h1>Vista de administrador</h1>
            <p>{$pasta->nombre}</p>
        </div>
    </div>
  
    <div class="row">    
        <div class="col-md-6 col-center">  
          <form method="POST" action="editPasta">
                <div class="row">
                    <div class="col">
                        <input type='hidden' name='id_pasta' value={$pasta->id_pasta}>
                        <input type="text" name='nombre' class="form-control" placeholder="Escriba Aquí los cambios" required>
                        <button type="submit">Enviar cambios</button>
                    </div>
                </div>
          </form>
        <a href="admin/">Atrás</a>        
        </div>  
    </div>
    

{include file="footer.tpl"}