<?php
/* Smarty version 3.1.30, created on 2023-01-09 11:29:27
  from "C:\xampp\htdocs\kolberg_\templates\musical_items.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63bbec876e84e8_11710994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cb9c6e7b28556e69367850eb550f5b460cc0564' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolberg_\\templates\\musical_items.tpl',
      1 => 1672769716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bbec876e84e8_11710994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162934536063bbec876e8227_63901544', 'items');
}
/* {block 'items'} */
class Block_162934536063bbec876e8227_63901544 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="catalog">
    <button class="arrow">
        <img class="left" src="./img/left.png" alt="">
    </button>

    <div class="items">
        <?php
$__section_numbers_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_numbers']) ? $_smarty_tpl->tpl_vars['__smarty_section_numbers'] : false;
$__section_numbers_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['img_index']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_numbers_0_step = ((int)@$_smarty_tpl->tpl_vars['step']->value) == 0 ? 1 : (int)@$_smarty_tpl->tpl_vars['step']->value;
$__section_numbers_0_start = min(1, $__section_numbers_0_step > 0 ? $__section_numbers_0_loop : $__section_numbers_0_loop - 1);
$__section_numbers_0_total = min(ceil(($__section_numbers_0_step > 0 ? $__section_numbers_0_loop - $__section_numbers_0_start : $__section_numbers_0_start+ 1)/ abs($__section_numbers_0_step)), $__section_numbers_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_numbers'] = new Smarty_Variable(array());
if ($__section_numbers_0_total != 0) {
for ($__section_numbers_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index'] = $__section_numbers_0_start; $__section_numbers_0_iteration <= $__section_numbers_0_total; $__section_numbers_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index'] += $__section_numbers_0_step){
?>
        <div class="catalog-item">
            <img class="item-img" src="./img/catalog_item<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index'] : null);?>
.png" alt="">
            <div class="info">
                <h6 class="product-name">Orchester-/Harfenstühle</h6>
                <p class="description">„Komfort“ (3105) </p>
            </div>
        </div>
        <?php
}
}
if ($__section_numbers_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_numbers'] = $__section_numbers_0_saved;
}
?>
    </div>
    <button class="arrow">
        <img class="right" src="./img/right.png" alt="">
    </button>
</div>

<?php
}
}
/* {/block 'items'} */
}
