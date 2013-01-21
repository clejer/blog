<?php /* Smarty version Smarty-3.1.12, created on 2013-01-21 18:01:34
         compiled from "templates\index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:2973150eafb68562333-21914267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f07560281418c212564496accb7681386c7b59f' => 
    array (
      0 => 'templates\\index.phtml',
      1 => 1358791204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2973150eafb68562333-21914267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50eafb68872ee7_20069966',
  'variables' => 
  array (
    'h2' => 0,
    'articles' => 0,
    'news' => 0,
    'online' => 0,
    'page' => 0,
    'pager' => 0,
    'nbpages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50eafb68872ee7_20069966')) {function content_50eafb68872ee7_20069966($_smarty_tpl) {?>
		<h2><?php echo $_smarty_tpl->tpl_vars['h2']->value;?>
</h2>
		<!-- Début de la boucle -->
		<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
			<article>
				<h3><?php echo $_smarty_tpl->tpl_vars['news']->value['titre'];?>
</h3>
				<p><?php echo $_smarty_tpl->tpl_vars['news']->value['texte'];?>
</p>
				<img src = "fichiers/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
.jpg"/>
				<br/>
				<?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>

				</br>
				</p>
			</article>
			<?php if ((isset($_smarty_tpl->tpl_vars['online']->value))){?>
				<a href="article.php?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-primary">Modifier</a>
				<a href="supprimer_article.php?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-danger">Supprimer</a>
			<?php }?>
		<?php } ?>
		<!-- Fin de la boucle -->
		
	<!-- Début de la fonction pagination -->	
	<div class="pagination pagination-centered">
		<ul>
			<li class="prev <?php if ($_smarty_tpl->tpl_vars['page']->value<=1){?>disabled<?php }?>"><a href="?p=<?php if ($_smarty_tpl->tpl_vars['page']->value<=1){?>#null <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
<?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
<?php }?>">&larr; Précédent</a></li>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbpages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbpages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>		
					<li <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['i']->value){?> class='active' <?php }?>>
						<a href='?p=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
					</li>
				<?php }} ?>
			<li class="next <?php if ($_smarty_tpl->tpl_vars['page']->value>=$_smarty_tpl->tpl_vars['nbpages']->value){?>disabled<?php }?>"><a href="?p=<?php if ($_smarty_tpl->tpl_vars['page']->value>=$_smarty_tpl->tpl_vars['nbpages']->value){?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
<?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
<?php }?>">Suivant&rarr;</a></li>
		</ul>
	</div>
	<!-- Fin de la fonction pagination -->

<?php }} ?>