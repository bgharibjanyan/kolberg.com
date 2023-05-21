<?php
/* Smarty version 3.1.30, created on 2023-01-08 18:38:09
  from "c:\xampp\htdocs\kolbergf\templates\social_media.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63bb0d9119ec66_12965924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '392a059a9f3f4ec596ab69b52fd4febbc6897adf' => 
    array (
      0 => 'c:\\xampp\\htdocs\\kolbergf\\templates\\social_media.tpl',
      1 => 1672222066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bb0d9119ec66_12965924 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="social-media">

    <h6 class="underline">Socialmedia</h6>
    <h4 class="header">#kolbergpercussion</h4>

    <div class="photos">
        <?php
$__section_numbers_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_numbers']) ? $_smarty_tpl->tpl_vars['__smarty_section_numbers'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_numbers'] = new Smarty_Variable(array());
if (true) {
for ($__section_numbers_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index'] = 1; $__section_numbers_1_iteration <= 5; $__section_numbers_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index']++){
?>
        <img class="img" src="./img/inst<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index'] : null);?>
.png" alt="">
        <?php
}
}
if ($__section_numbers_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_numbers'] = $__section_numbers_1_saved;
}
?>
    </div>

    <div class="accounts">
        <?php
$__section_numbers_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_numbers']) ? $_smarty_tpl->tpl_vars['__smarty_section_numbers'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_numbers'] = new Smarty_Variable(array());
if (true) {
for ($__section_numbers_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index'] = 1; $__section_numbers_2_iteration <= 3; $__section_numbers_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index']++){
?>
        <img class="icon" src="./img/account<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_numbers']->value['index'] : null);?>
.png" alt="">
        <?php
}
}
if ($__section_numbers_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_numbers'] = $__section_numbers_2_saved;
}
?>
    </div>
    <h6 class="fiollow-us">Folge uns</h6>

</section><?php }
}
