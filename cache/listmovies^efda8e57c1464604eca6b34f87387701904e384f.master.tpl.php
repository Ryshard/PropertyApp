<?php /*%%SmartyHeaderCode:16694526816749c20e3-23911287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efda8e57c1464604eca6b34f87387701904e384f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movieapp\\application\\views\\smarty\\templates\\master.tpl',
      1 => 1381352020,
      2 => 'file',
    ),
    'd37fafd8d18c4cd1d559e92caa5d1469e385be98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movieapp\\application\\views\\smarty\\templates\\header.tpl',
      1 => 1381348764,
      2 => 'file',
    ),
    '8b4a850d910ed034147b4672b536bd50fbf460b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movieapp\\application\\views\\smarty\\templates\\navbar.tpl',
      1 => 1381955223,
      2 => 'file',
    ),
    '89d6f6aeaeca40c23c29265dd6245ed4569bb2c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movieapp\\application\\views\\smarty\\templates\\listmovies.tpl',
      1 => 1382553272,
      2 => 'file',
    ),
    'f9ccd0421e760422eafa89c69267ab7f34a86195' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movieapp\\application\\views\\smarty\\templates\\footer.tpl',
      1 => 1381347865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16694526816749c20e3-23911287',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526816bc29f667_10298245',
  'variables' => 
  array (
    'showJumboTron' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526816bc29f667_10298245')) {function content_526816bc29f667_10298245($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>DSA Movie Listings</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/bootstrap/js/html5shiv.js"></script>
      <script src="assets/bootstrap/js/respond.min.js"></script>
    <![endif]-->
    
   
  </head>
  <body>

 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://localhost:81/movieapp/index.php?action=createmovies">Create Movies</a></li>
                <li><a href="http://localhost:81/movieapp/index.php?action=listmovies">List Movies</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

 <div class="container">
     
<div class='row'>
    <div class='col-md-2'>Left</div>
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          
    <tr>
        <td>1</td>
        <td>Jaws</td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=edit&id=1">Edit</a><td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=delete&id=1">Delete</a><td>
    </tr>
    <tr>
        <td>2</td>
        <td>Superman</td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=edit&id=2">Edit</a><td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=delete&id=2">Delete</a><td>
    </tr>
    <tr>
        <td>3</td>
        <td>Rush</td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=edit&id=3">Edit</a><td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=delete&id=3">Delete</a><td>
    </tr>
    <tr>
        <td>4</td>
        <td>Elysium</td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=edit&id=4">Edit</a><td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=delete&id=4">Delete</a><td>
    </tr>
    <tr>
        <td>5</td>
        <td>JAWS</td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=edit&id=5">Edit</a><td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=delete&id=5">Delete</a><td>
    </tr>
    <tr>
        <td>6</td>
        <td>The Racing Car</td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=edit&id=6">Edit</a><td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=delete&id=6">Delete</a><td>
    </tr>
    <tr>
        <td>7</td>
        <td>Demo Movie</td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=edit&id=7">Edit</a><td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=delete&id=7">Delete</a><td>
    </tr>
    <tr>
        <td>8</td>
        <td>Demo Movie</td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=edit&id=8">Edit</a><td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=delete&id=8">Delete</a><td>
    </tr>
    <tr>
        <td>9</td>
        <td>Demo Movie 678</td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=edit&id=9">Edit</a><td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=delete&id=9">Delete</a><td>
    </tr>
    <tr>
        <td>10</td>
        <td>Demo Movie 678</td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=edit&id=10">Edit</a><td>
        <td><a class="btn btn-default" href="http://localhost:81/movieapp/index.php?action=delete&id=10">Delete</a><td>
    </tr>
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->


  <hr>

      <footer>
        <p>&copy; DSA Movies</p>
      </footer>
    </div> <!-- /container -->  

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/bootstrap/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

<?php }} ?>
