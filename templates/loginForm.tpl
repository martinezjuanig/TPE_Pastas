{include file="header.tpl"}

 <div class="container">
    <div class="col-12">
      <div class="row-center">
        <div class="col-md-6 col-md-offset-3">

          <form action="logIn" method="post">

            <div class="form-group">
              <label for="user">Name</label>
              <input type="text" class="form-control" name="username"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" required>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            {if !empty($error) }
              <div class="alert alert-danger" role="alert">{$error}</div>
            {/if}

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>

        </div>
      </div>
    </div>
  </div> 
{include file="footer.tpl"}




