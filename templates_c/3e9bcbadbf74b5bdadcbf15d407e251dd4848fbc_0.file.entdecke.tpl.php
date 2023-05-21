<?php
/* Smarty version 3.1.30, created on 2023-01-09 11:29:27
  from "C:\xampp\htdocs\kolberg_\templates\entdecke.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63bbec87698061_14581735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e9bcbadbf74b5bdadcbf15d407e251dd4848fbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolberg_\\templates\\entdecke.tpl',
      1 => 1671966820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:musical_items.tpl' => 1,
  ),
),false)) {
function content_63bbec87698061_14581735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198834079363bbec876978e7_49185858', "items");
?>

    

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:musical_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "items"} */
class Block_198834079363bbec876978e7_49185858 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_assignInScope('img_index', 5);
$_smarty_tpl->_assignInScope('step', 1);
?>

<section class="entdecke">
    <h2 class="header">ENTDECKE</h2>

    <div class=categories>
        <a class="link" href="">Beliebte Produkte</a>
        <a class="link" href="">Neuheiten</a>
    </div>
    <div class="entdecke-catalog">
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this);
?>

    </div>
</section>
<?php
}
}
/* {/block "items"} */
}
