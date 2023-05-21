<?php
/* Smarty version 3.1.30, created on 2023-01-08 16:21:40
  from "C:\xampp\htdocs\kolbergf\templates\poster1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63badf848140c2_61958395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86682049e2d223ec97ff08a6b0ddf69f0626f18a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolbergf\\templates\\poster1.tpl',
      1 => 1671971527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63badf848140c2_61958395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_assignInScope('img_index', "1");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180103215563badf84813ad6_64004997', 'poster');
}
/* {block 'poster'} */
class Block_180103215563badf84813ad6_64004997 extends Smarty_Internal_Block
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
