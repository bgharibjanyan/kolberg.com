<?php
/* Smarty version 3.1.30, created on 2023-01-09 11:29:27
  from "C:\xampp\htdocs\kolberg_\templates\poster2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63bbec877dd380_36372582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8bd4dfc60e8161b031b40ce93dc01185208a858' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolberg_\\templates\\poster2.tpl',
      1 => 1671972663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:poster1.tpl' => 1,
  ),
),false)) {
function content_63bbec877dd380_36372582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107010947263bbec877dcf22_29628122', "poster");
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:poster1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "poster"} */
class Block_107010947263bbec877dcf22_29628122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php $_smarty_tpl->_assignInScope('poster_header', "KONZERT-PAUKEN ");
?> 
        <?php $_smarty_tpl->_assignInScope('poster_button', "Jetzt entdecken ");
?> 
        <?php $_smarty_tpl->_assignInScope('poster_description1', "Klangliche Vollendung, technische Perfektion");
?> 
        <?php $_smarty_tpl->_assignInScope('poster_description2', "& billante Optik – Pauken-Bau seit 1985");
?> 


        <section class="poster2">
        <?php $_smarty_tpl->_assignInScope('img_index', "1");
?> 
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this);
?>
 
        </section>

<?php
}
}
/* {/block "poster"} */
}
