<?php
/* Smarty version 3.1.30, created on 2023-01-08 19:45:07
  from "C:\xampp\htdocs\kolberg\templates\stander2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63bb0f33544be3_15156603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '700d9a407fe42e1f92ecdec151016322a5e848ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolberg\\templates\\stander2.tpl',
      1 => 1671993127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:musical_items.tpl' => 1,
  ),
),false)) {
function content_63bb0f33544be3_15156603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96501148263bb0f33544792_50706825', "items");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:musical_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "items"} */
class Block_96501148263bb0f33544792_50706825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="second-stander">
<div class="stander"> 

    <img class="stander-img" src="./img/stander2.png" alt="">
    <div class="stander-catalog">
    <?php $_smarty_tpl->_assignInScope('step', 5);
?>

    <?php $_smarty_tpl->_assignInScope('img_index', 7);
?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this);
?>
</div>

</div> 
</section>
<?php
}
}
/* {/block "items"} */
}
