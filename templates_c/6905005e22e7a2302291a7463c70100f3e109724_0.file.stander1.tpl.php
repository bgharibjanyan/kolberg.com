<?php
/* Smarty version 3.1.30, created on 2023-01-08 16:21:40
  from "C:\xampp\htdocs\kolbergf\templates\stander1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63badf8488ba46_12801317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6905005e22e7a2302291a7463c70100f3e109724' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolbergf\\templates\\stander1.tpl',
      1 => 1671976297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:musical_items.tpl' => 1,
  ),
),false)) {
function content_63badf8488ba46_12801317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110701646763badf8488b642_69838264', "items");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:musical_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "items"} */
class Block_110701646763badf8488b642_69838264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 


<div class="stander"> 
   
    <img class="stander-img" src="./img/stander1.png" alt="">
    <div class="stander-catalog">
    <?php $_smarty_tpl->_assignInScope('step', 4);
?>

    <?php $_smarty_tpl->_assignInScope('img_index', 7);
?>
    

    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this);
?>
</div>

</div>  
<?php
}
}
/* {/block "items"} */
}
