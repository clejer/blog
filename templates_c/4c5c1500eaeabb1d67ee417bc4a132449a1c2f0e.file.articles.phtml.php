<?php /* Smarty version Smarty-3.1.12, created on 2013-01-04 09:52:06
         compiled from "templates\articles.phtml" */ ?>
<?php /*%%SmartyHeaderCode:3108750e6a646efe1c9-01402433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c5c1500eaeabb1d67ee417bc4a132449a1c2f0e' => 
    array (
      0 => 'templates\\articles.phtml',
      1 => 1357293093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3108750e6a646efe1c9-01402433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action_label' => 0,
    'rep' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e6a647067651_35683830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e6a647067651_35683830')) {function content_50e6a647067651_35683830($_smarty_tpl) {?><form action="article.php" method="post" enctype="multipart/form-data">
	<h2><?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
 un article</h2>
	<div class="clearfix">
		<label for="titre">Titre</label>
		<div class="input"><input type="text" name="titre" id="titre" value="<?php if (isset($_smarty_tpl->tpl_vars['rep']->value['titre'])){?> <?php echo $_smarty_tpl->tpl_vars['rep']->value['titre'];?>
<?php }?>"></div> 
	</div>
	<div class="clearfix">
		<label for="texte">Texte</label>
		<div class="input"><textarea name="texte" id="texte"><?php if (isset($_smarty_tpl->tpl_vars['rep']->value['texte'])){?> <?php echo $_smarty_tpl->tpl_vars['rep']->value['texte'];?>
<?php }?></textarea></div> 
	</div>
	<div class="clearfix">
		<div class="input"><input type="checkbox" name="publie" id="publie" value="1"><label for="publie">Publier</label></div> 
		
		<input type="file" name="image" id= "image">

		</div>
	
	<div class="form-actions">
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
" class="btn btn-large btn-primary"> 
		<input type="hidden" name='post' value=""> <!-- Permet de savoir si on se trouve en traitement -->
		<input type="hidden" name='id' value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> <!-- Permet de savoir si on se trouve en modification -->
	</div>
	
	<<?php ?>?php ?<?php ?>>
</form><?php }} ?>