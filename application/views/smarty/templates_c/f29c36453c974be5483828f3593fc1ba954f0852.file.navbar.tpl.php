<?php /* Smarty version Smarty-3.1.15, created on 2013-12-23 17:12:32
         compiled from "C:\Dropbox\htdocs\PropertyApp\application\views\smarty\templates\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:974352b784e73b0ad3-13629878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29c36453c974be5483828f3593fc1ba954f0852' => 
    array (
      0 => 'C:\\Dropbox\\htdocs\\PropertyApp\\application\\views\\smarty\\templates\\navbar.tpl',
      1 => 1387814470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '974352b784e73b0ad3-13629878',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b784e73cc056_76899350',
  'variables' => 
  array (
    'urlAction' => 0,
    'loggedIn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b784e73cc056_76899350')) {function content_52b784e73cc056_76899350($_smarty_tpl) {?> <div class="navbar navbar-inverse navbar-fixed-top">
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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=about">About</a></li>
  
            <?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==true) {?> 
            <li><a href="logout.php">Logout</a></li>
          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=addProperty">Add New Property</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=proplist_admin">List Properties</a></li>
               
              </ul>
            </li>
          </ul>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==false) {?>   
          <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
              <input type="text" name="username" placeholder="username" class="form-control" value="admin">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control" value="letmein">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          <?php }?>
        </div><!--/.navbar-collapse -->
      </div>
    </div><?php }} ?>
