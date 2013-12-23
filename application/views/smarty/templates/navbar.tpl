 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Property App</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"">Home</a></li>
            <li><a href="{$urlAction}=about">About</a></li>
  
            {if $loggedIn==true} 
            <li><a href="logout.php">Logout</a></li>
          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{$urlAction}=addProperty">Add New Property</a></li>
                <li><a href="{$urlAction}=proplist_admin">List Properties</a></li>
               
              </ul>
            </li>
          </ul>
          {/if}
          {if $loggedIn==false}   
          <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
              <input type="text" name="username" placeholder="username" class="form-control" value="admin">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control" value="letmein">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          {/if}
        </div><!--/.navbar-collapse -->
      </div>
    </div>