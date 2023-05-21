<?php
/* Smarty version 3.1.30, created on 2023-01-08 19:45:07
  from "C:\xampp\htdocs\kolberg\templates\poster1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63bb0f33426500_15526751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4794f98b0ccb86eb9b25c6bea84395596eaac79f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolberg\\templates\\poster1.tpl',
      1 => 1671971527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bb0f33426500_15526751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_assignInScope('img_index', "1");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78248673163bb0f33426238_95627597', 'poster');
}
/* {block 'poster'} */
class Block_78248673163bb0f33426238_95627597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="poster">

<div class="poster-content">

       
       




        <h6 class="quote"><?php echo $_smarty_tpl->tpl_vars['quote']->value;?>
</h6>
        <h4 class="header">
            <?php echo $_smarty_tpl->tpl_vars['poster_header']->value;?>

        </h4>
        <p class="description"><?php echo $_smarty_tpl->tpl_vars['poster_description1']->value;?>

        </p>
        <p class="description"> <?php echo $_smarty_tpl->tpl_vars['poster_description2']->value;?>

        </p>

        <button class="poster-button">
           <?php echo $_smarty_tpl->tpl_vars['poster_button']->value;?>

        </button>
</div>

</section>
<?php
}
}
/* {/block 'poster'} */
}
