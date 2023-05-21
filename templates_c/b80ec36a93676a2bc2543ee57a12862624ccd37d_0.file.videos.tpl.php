<?php
/* Smarty version 3.1.30, created on 2023-01-08 20:27:09
  from "C:\xampp\htdocs\pro\templates\videos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63bb190d448129_94024541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b80ec36a93676a2bc2543ee57a12862624ccd37d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pro\\templates\\videos.tpl',
      1 => 1672146142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bb190d448129_94024541 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="videos-section">
    <h4 class="actual">Aktuelles</h4>
    <h3 class="header">News & Videos</h3>

    <div class="catalog">

        <button class="arrow">
            <img class="left" src="./img/left.png" alt="">
        </button>
    
        <div class="left-item item">
            <div class="video">
            </div>
            <p class="date">12/12/20</p>
            <h5 class="video-header">50-jähriges Firmenjubiläum</h5>
            <a class="more" href="more">Mehr lesen</a>
        </div>
        <div class="center-item item">
            <div class="video">
                <div class="info">
                    <p class="description">Hier steht ein Video Titel</p>
                    <p class="time">3:24</p>
                </div>
                <button class="play-button"><img src="./img/play_button.png" alt=""></button>
            </div>
            <p class="date">12/12/20</p>
            <h5 class="video-header">Erleben Sie das Ausmaß der Dramatik</h5>
            <a class="more" href="more">Mehr lesen</a>
        </div>
        <div class="right-item item">
            <div class="video">
                <div class="info">
                </div>
            </div>
            <p class="date">12/12/20</p>
            <h5 class="video-header">Neues Album: Jasmin Kolberg Trio „Detached“</h5>
            <a class="more" href="">Mehr lesen</a>
        </div>
        <button class="arrow">
            <img class="right" src="./img/right.png" alt="">
        </button>
 

    </div>

    <button class="all">Alle News & Videos ansehen</button>
</section><?php }
}
