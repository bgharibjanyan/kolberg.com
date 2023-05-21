<?php
/* Smarty version 3.1.30, created on 2023-01-08 20:27:09
  from "C:\xampp\htdocs\pro\templates\stander2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63bb190d3c85f9_08733745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0634cf03bf095d179203c612e342378d92279a2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pro\\templates\\stander2.tpl',
      1 => 1671993127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:musical_items.tpl' => 1,
  ),
),false)) {
function content_63bb190d3c85f9_08733745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62604216663bb190d3c8203_02272840', "items");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:musical_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "items"} */
class Block_62604216663bb190d3c8203_02272840 extends Smarty_Internal_Block
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
