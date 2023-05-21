<?php
/* Smarty version 3.1.30, created on 2023-01-08 16:21:40
  from "C:\xampp\htdocs\kolbergf\templates\entdecke.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63badf847311f2_56120554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f8fd8c52eb16fc4ff212931b457047d4e828709' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolbergf\\templates\\entdecke.tpl',
      1 => 1671966820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:musical_items.tpl' => 1,
  ),
),false)) {
function content_63badf847311f2_56120554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204623783263badf84730437_90143550', "items");
?>

    

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:musical_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "items"} */
class Block_204623783263badf84730437_90143550 extends Smarty_Internal_Block
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
