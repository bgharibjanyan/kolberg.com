<?php
/* Smarty version 3.1.30, created on 2023-01-08 16:21:40
  from "C:\xampp\htdocs\kolbergf\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63badf84c3dc75_80390836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0914ea7e9b2c993b86ec2f4fa11c327ae2a9a82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kolbergf\\templates\\footer.tpl',
      1 => 1672910911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:info.tpl' => 1,
  ),
),false)) {
function content_63badf84c3dc75_80390836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48569520363badf84c3d867_09835794', "info");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "info"} */
class Block_48569520363badf84c3d867_09835794 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<footer class="main-footer">

    <div class="footer-header">
        <h6 class="uns">Über uns</h6>
        <img class="logo" src="./img/footer_logo.png" alt="">
        <h6 class="contacts">Kontakt</h6>
    </div>

    <div class="content">
        <div class="left-side">

            <ul class="general-nav">

                <li class="nav-link"><a class="link" href="">Geschichte</a></li>
                <li class="nav-link"><a class="link" href="">News</a></li>
                <li class="nav-link"><a class="link" href="">Kataloge</a></li>
                <li class="nav-link"><a class="link" href="">Referenzen</a></li>
                <li class="nav-link"><a class="link" href="">Videos</a></li>
                <li class="nav-link"><a class="link" href="">Kontakt</a></li>
                <li class="nav-link"><a class="link" href="">Jobs</a></li>
            </ul>
            <div class="left-side-footer">
                <h6 class="header">
                    Informationen
                </h6>
                <p class="footer-text">Versand- und Zahlungsbedingungen</p>
                <p class="footer-text">Widerrufsbelehrung</p>

            </div>
        </div>

        <div class="solutions">

            <?php $_smarty_tpl->_assignInScope('img_name', 'footer_info_icon');
?>
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this);
?>

        </div>
        <button class="list-header">
            Informationen
        </button>
        <button class="list-header">
            kontakt
        </button>
        <button class="list-header">
            Über uns
        </button>
        <div class="right-side">

            <ul class="contacts-list">
                <li class="contact">
                    <p class="text">Kolberg Germany</p>
                    <img class="icon" src="./img/soc1.png" alt="">
                </li>

                <li class="contact">
                    <p class="text">#kolbergpercussion
                    </p>
                    <img class="icon" src="./img/soc2.png" alt="">
                </li>

                <li class="contact">
                    <p class="text">Kolberg Germany</p>
                    <img class="icon" src="./img/soc3.png" alt="">
                </li>
                <li class="contact">
                </li>
                <li class="contact">
                    <p class="text">Kolberg Germany</p>
                    <img class="icon" src="./img/geo.png" alt="">
                </li>
            </ul>

            <div class="right-side-footer">
                <p>Stuttgarter Straße 157
                    73066 Uhingen
                    Germany</p>
            </div>
        </div>
    </div>
</footer>
<?php
}
}
/* {/block "info"} */
}
