<?php /* Smarty version Smarty-3.1.12, created on 2013-01-21 15:03:29
         compiled from "templates\article.phtml" */ ?>
<?php /*%%SmartyHeaderCode:2628250eafbd2196203-67708657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4a23263aa6f6958d77e19a4e2ba1f37ff065b29' => 
    array (
      0 => 'templates\\article.phtml',
      1 => 1358780605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2628250eafbd2196203-67708657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50eafbd229dac4_92606265',
  'variables' => 
  array (
    'action_label' => 0,
    'rep' => 0,
    'data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50eafbd229dac4_92606265')) {function content_50eafbd229dac4_92606265($_smarty_tpl) {?>﻿<form action="article.php" method="post" enctype="multipart/form-data">
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
	
	<div class="clearfix">
		<label for="tag">Tag*</label>
		<div class="input"><input type="text" name="tag" id="tag" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['nom'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['nom'];?>
<?php }?>"></div>
	</div>	
	<div class="form-actions">
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
" class="btn btn-large btn-primary"> 
		<input type="hidden" name='post' value=""> <!-- Permet de savoir si on se trouve en traitement -->
		<input type="hidden" name='id' value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> <!-- Permet de savoir si on se trouve en modification -->
		
	</div>
	<label><h6>* Champs facultatifs</h6></label>
	
	
</form><?php }} ?>