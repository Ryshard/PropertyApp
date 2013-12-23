<?php /*%%SmartyHeaderCode:134835255bf38906bf3-42986896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
    '15c79d138418de605a2a06f5dfb45b8b34a841e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movieapp\\application\\views\\smarty\\templates\\jumbotron.tpl',
      1 => 1381348262,
      2 => 'file',
    ),
    '6ac507b7950e6e5d221494f745092825225d1933' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movieapp\\application\\views\\smarty\\templates\\front.tpl',
      1 => 1381348299,
      2 => 'file',
    ),
    'f9ccd0421e760422eafa89c69267ab7f34a86195' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movieapp\\application\\views\\smarty\\templates\\footer.tpl',
      1 => 1381347865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134835255bf38906bf3-42986896',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52680f91999bf2_69926969',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52680f91999bf2_69926969')) {function content_52680f91999bf2_69926969($_smarty_tpl) {?><!DOCTYPE html>
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
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
      </div>

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
