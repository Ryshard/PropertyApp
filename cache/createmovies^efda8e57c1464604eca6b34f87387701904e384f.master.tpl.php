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
    '38537e72735150951814bcf5451c7cb6e5025e41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movieapp\\application\\views\\smarty\\templates\\page_1.tpl',
      1 => 1381955062,
      2 => 'file',
    ),
    '1edf00170a003e4922312eacd03286b7978e898a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movieapp\\application\\views\\smarty\\templates\\form_movie.tpl',
      1 => 1381954796,
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
  'variables' => 
  array (
    'showJumboTron' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52681674bc41f8_59059228',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52681674bc41f8_59059228')) {function content_52681674bc41f8_59059228($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>DSA Move Home Page</title>

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
    <div class='col-md-2'>I am page one</div>
    <div class='col-md-4'> <form class="form-horizontal" role="form" action="processform.php" method="post">
  <div class="form-group">
    <label for="movietitle" class="col-lg-2 control-label">Movie Title</label>
    <div class="col-lg-10">
      <input type="text" name="movietitle" id="movietitle" class="form-control" id="inputEmail1" placeholder="movie">
    </div>
  </div>
  <div class="form-group">
    <label for="cinema" class="col-lg-2 control-label">Cinema</label>
    <div class="col-lg-10">
      <input type="text" name="cinema" class="form-control" id="cinema" placeholder="cinema">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Create Movie</button>
    </div>
  </div>
</form> </div>
     <div class='col-md-6'> </div>
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
