<?php
/* Smarty version 3.1.30, created on 2023-01-09 11:29:27
  from "C:\xampp\htdocs\kolberg_\templates\poster1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63bbec87730a39_50223991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ad4d8dc42c67a90afd982e850dc2f42b459134b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolberg_\\templates\\poster1.tpl',
      1 => 1671971527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bbec87730a39_50223991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_assignInScope('img_index', "1");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211424013663bbec87730778_45158803', 'poster');
}
/* {block 'poster'} */
class Block_211424013663bbec87730778_45158803 extends Smarty_Internal_Block
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
