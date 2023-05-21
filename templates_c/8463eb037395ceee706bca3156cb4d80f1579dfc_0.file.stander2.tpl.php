<?php
/* Smarty version 3.1.30, created on 2023-01-08 16:21:40
  from "C:\xampp\htdocs\kolbergf\templates\stander2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63badf8496ab99_87028080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8463eb037395ceee706bca3156cb4d80f1579dfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolbergf\\templates\\stander2.tpl',
      1 => 1671993127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:musical_items.tpl' => 1,
  ),
),false)) {
function content_63badf8496ab99_87028080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35155911163badf8496a6d2_79310470', "items");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:musical_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "items"} */
class Block_35155911163badf8496a6d2_79310470 extends Smarty_Internal_Block
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
