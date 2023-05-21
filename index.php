<?php 



require('libs/Smarty.class.php');
$smarty = new Smarty;

$img_index = 0;

$poster_header = "ORCHESTERSTÜHLE ";
$quote = "Orchester-Ausstattung";
$poster_description1 = "Ergonomisch, höhenverstellbar,langlebig";
$poster_description2 = "- von Musikern für Musiker";
$poster_button = "Modelle entdecken";
$stander_img = 0;





$smarty->assign("stander_img", $stander_img);
$smarty->assign("img_index", $img_index);
$smarty->assign("poster_header", $poster_header);
$smarty->assign("quote", $quote);
$smarty->assign("poster_description1", $poster_description1);
$smarty->assign("poster_description2", $poster_description2);
$smarty->assign("poster_button", $poster_button);


$smarty->display('index.tpl');

?>