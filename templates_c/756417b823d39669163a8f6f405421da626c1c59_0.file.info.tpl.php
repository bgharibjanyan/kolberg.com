<?php
/* Smarty version 3.1.30, created on 2023-01-08 16:21:40
  from "C:\xampp\htdocs\kolbergf\templates\info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63badf84a9d432_01047961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756417b823d39669163a8f6f405421da626c1c59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolbergf\\templates\\info.tpl',
      1 => 1672841331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63badf84a9d432_01047961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('img_name', 'info_icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36060625663badf84a9d053_43281955', 'info');
}
/* {block 'info'} */
class Block_36060625663badf84a9d053_43281955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="info-section">
    <button class="arrow">
        <img class="left" src="./img/left.png" alt="">
    </button>

    <div class="content">
        <div class="item">
            <img class="icon" src="./img/<?php echo $_smarty_tpl->tpl_vars['img_name']->value;?>
1.png" alt="">

            <h4 class="header">Deutsche Qualitätsarbeit</h4>
            <p class="description">Alle Kolberg Produkte werden durch unsere Instrumentenbauer und Facharbeiter im
                eigenen
                Werk in Deutschland produziert – zu großen Teilen in Handarbeit. Ausnahme hiervon sind lediglich z.B.
                traditionelle Instrumente wie TamTams, welche lediglich veredelt werden.
            </p>
        </div>
        <div class="item">
            <img class="icon" src="./img/<?php echo $_smarty_tpl->tpl_vars['img_name']->value;?>
2.png" alt="">
            <h4 class="header">Kolberg Qualitäts- & Innovationsgarantie</h4>
            <p class="description">Die bedeutendsten Orchester und Häuser der Welt vertrauen Kolberg. Dies liegt auch an
                dem
                Qualitätsversprechen über die 2-jährige Garantie hinaus. Falls wir danach einen Mangel an Ihrem Produkt
                feststellen und dies einem Materialfehler zuzuschreiben ist, nehmen wir uns der Sache an.
            </p>
        </div>
        <div class="item">
            <img class="icon" src="./img/<?php echo $_smarty_tpl->tpl_vars['img_name']->value;?>
3.png" alt="">
            <h4 class="header">Umweltschutz & Nachhaltigkeit</h4>
            <p class="description">Unser Produkte halten was sie versprechen – meist weit über die übliche Gebrauchszeit
                hinaus. Kolberg legt zudem Wert auf den Einsatz von zertifiziertem Holz aus nachhaltig bewirtschafteten
                Wäldern, oft aus der Region.
            </p>
        </div>
    </div>
    <button class="arrow">
        <img class="right" src="./img/right.png" alt="">
    </button>

</section>

<?php
}
}
/* {/block 'info'} */
}
