
<?php 
$dataf= get_option('bsp_style_settings_f') ;
$datati= get_option('bsp_style_settings_ti') ;
$datat= get_option('bsp_style_settings_t') ;
$datala= get_option('bsp_style_settings_la') ;
$dataform= get_option('bsp_style_settings_form') ;
$datafd=get_option('bsp_forum_display') ;
$datacss=get_option('bsp_css') ;
$data4 = get_option('bsp_roles') ;
global $bsp_roles ;

?>

/*updated1 */

/*  1 ----------------------  forum list backgrounds --------------------------*/
<?php 
$field = (!empty($dataf['Forum ContentBackground color - odd numbers']) ? $dataf['Forum ContentBackground color - odd numbers'] : '')  ;
if (!empty ($field)) {
?>
#bbpress-forums ul.odd
 {
 background-color: <?php echo $field ;?>  ;
 }
<?php } ?>

<?php 
$field= (!empty($dataf['Forum ContentBackground color - even numbers']) ? $dataf['Forum ContentBackground color - even numbers'] : '')  ;
//$field=$dataf['Forum ContentBackground color - even numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums ul.even
  {
 background-color: <?php echo $field ; ?>;
 }
<?php } ?>


 
 /*  2 ----------------------  headers backgrounds --------------------------*/

<?php 
$field= (!empty($dataf['Forum/Topic Headers/FootersBackground Color']) ? $dataf['Forum/Topic Headers/FootersBackground Color'] : '')  ;
//$field=$dataf['Forum/Topic Headers/FootersBackground Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-header,
#bbpress-forums li.bbp-footer 
 {
 background-color: <?php echo $field ;?> ;
 }
<?php } ?>
 
 
 
 
 /*  3 ----------------------  Font - Forum headings --------------------------*/
 
<?php 
$field= (!empty($dataf['Forum Headings FontSize']) ? $dataf['Forum Headings FontSize'] : '')  ;
//$field=$dataf['Forum Headings FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums ul.forum-titles li.bbp-forum-info
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 
#bbpress-forums ul.forum-titles li.bbp-forum-topic-count {
   font-size:  <?php echo $field ; ?> ;
}

#bbpress-forums ul.forum-titles li.bbp-forum-reply-count {
   font-size:  <?php echo $field ; ?> ;

}

#bbpress-forums ul.forum-titles li.bbp-forum-freshness {
   font-size:  <?php echo $field ; ?> ;

}



 <?php } ?>
 
 

 
<?php 
$field= (!empty($dataf['Forum Headings FontColor']) ? $dataf['Forum Headings FontColor'] : '')  ;
//$field=$dataf['Forum Headings FontColor'] ;
if (!empty ($field)) {
?>

#bbpress-forums ul.forum-titles li.bbp-forum-info
 
 {
color:  <?php echo $field ; ?> ;
 }
 
<?php //  and also allow for alternate template ?>
#bbpress-forums ul.forum-titles a.bsp-forum-name
 {
color:  <?php echo $field ; ?> ;
 }


#bbpress-forums ul.forum-titles li.bbp-forum-topic-count {
  color:  <?php echo $field ; ?> ;
}

#bbpress-forums ul.forum-titles li.bbp-forum-reply-count {
   color:  <?php echo $field ; ?> ;

}

#bbpress-forums ul.forum-titles li.bbp-forum-freshness {
  color:  <?php echo $field ; ?> ;

}


 <?php } ?>
 
 
 
 <?php 
$field= (!empty($dataf['Forum Headings FontFont']) ? $dataf['Forum Headings FontFont'] : '')  ;
//$field=$dataf['Forum Headings FontFont'] ;
if (!empty ($field)) {
?>
 
#bbpress-forums ul.forum-titles li.bbp-forum-info  {
Font-Family:  <?php echo $field ; ?> ;
 }
 
#bbpress-forums ul.forum-titles li.bbp-forum-topic-count {
  Font-Family:  <?php echo $field ; ?> ;
}

#bbpress-forums ul.forum-titles li.bbp-forum-reply-count {
   Font-Family:  <?php echo $field ; ?> ;

}

#bbpress-forums ul.forum-titles li.bbp-forum-freshness {
  Font-Family:  <?php echo $field ; ?> ;

}
  
 <?php } ?>
 
  
 
 
 
<?php 
$field= (!empty($dataf['Forum Headings FontStyle']) ? $dataf['Forum Headings FontStyle'] : '')  ;
//$field=$dataf['Forum Headings FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>

#bbpress-forums ul.forum-titles li.bbp-forum-info  {
Font-Style:  italic ; 
 }
 
#bbpress-forums ul.forum-titles li.bbp-forum-topic-count {
  Font-Style:  italic ; 
}

#bbpress-forums ul.forum-titles li.bbp-forum-reply-count {
   Font-Style:  italic ; 

}

#bbpress-forums ul.forum-titles li.bbp-forum-freshness {
  Font-Style:  italic ; 
}
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums ul.forum-titles li.bbp-forum-info  {
Font-weight:  bold ; 
 }
 
#bbpress-forums ul.forum-titles li.bbp-forum-topic-count {
  Font-weight:  bold ; 
}

#bbpress-forums ul.forum-titles li.bbp-forum-reply-count {
   Font-weight:  bold ; 

}

#bbpress-forums ul.forum-titles li.bbp-forum-freshness {
  Font-weight:  bold ; 
}
 
 <?php }
 else { ?>
#bbpress-forums ul.forum-titles li.bbp-forum-info  {
Font-weight:  normal ; 
 }
 
#bbpress-forums ul.forum-titles li.bbp-forum-topic-count {
 Font-weight:  normal ; 
}

#bbpress-forums ul.forum-titles li.bbp-forum-reply-count {
  Font-weight:  normal ; 

}

#bbpress-forums ul.forum-titles li.bbp-forum-freshness {
  Font-weight:  normal ; 
}
 
 <?php
}
 
}

?>

 
 /*  4 ----------------------  Font - breadcrumb --------------------------*/
 

 
 
 
 <?php 
$field= (!empty($dataf['Breadcrumb FontSize']) ? $dataf['Breadcrumb FontSize'] : '')  ;
//$field=$dataf['Breadcrumb FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-breadcrumb p
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Breadcrumb FontColor']) ? $dataf['Breadcrumb FontColor'] : '')  ;
//$field=$dataf['Breadcrumb FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-breadcrumb p
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($dataf['Breadcrumb FontFont']) ? $dataf['Breadcrumb FontFont'] : '')  ;
//$field=$dataf['Breadcrumb FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-breadcrumb p
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Breadcrumb FontStyle']) ? $dataf['Breadcrumb FontStyle'] : '')  ;
//$field=$dataf['Breadcrumb FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-breadcrumb p
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-breadcrumb p
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-breadcrumb p
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
 
  /*  5 ----------------------  Font - links --------------------------*/
 
<?php 
$field= (!empty($dataf['LinksLink Color']) ? $dataf['LinksLink Color'] : '')  ;
//$field=$dataf['LinksLink Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a:link
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['LinksVisited Color']) ? $dataf['LinksVisited Color'] : '')  ;
//$field=$dataf['LinksVisited Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a:visited
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 
 <?php 
$field= (!empty($dataf['LinksHover Color']) ? $dataf['LinksHover Color'] : '')  ;
//$field=$dataf['LinksHover Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a:hover
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 


 /*  6 ----------------------  Font - Forum and category lists --------------------------*/
 
<?php 
$field= (!empty($dataf['Forum and Category List FontSize']) ? $dataf['Forum and Category List FontSize'] : '')  ;
//$field=$dataf['Forum and Category List FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-forum-title
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($dataf['Forum and Category List FontFont']) ? $dataf['Forum and Category List FontFont'] : '')  ;
//$field=$dataf['Forum and Category List FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-forum-title
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Forum and Category List FontStyle']) ? $dataf['Forum and Category List FontStyle'] : '')  ;
//$field=$dataf['Forum and Category List FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-forum-title
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-forum-title
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-forum-title
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
 
 
 
 
 /*  7 ----------------------  Font - Sub Forum lists --------------------------*/
 
<?php 
$field= (!empty($dataf['Sub Forum List FontSize']) ? $dataf['Sub Forum List FontSize'] : '')  ;
//$field=$dataf['Sub Forum List FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-forums-list li
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($dataf['Sub Forum List FontFont']) ? $dataf['Sub Forum List FontFont'] : '')  ;
//$field=$dataf['Sub Forum List FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-forums-list li
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Sub Forum List FontStyle']) ? $dataf['Sub Forum List FontStyle'] : '')  ;
//$field=$dataf['Sub Forum List FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-forums-list li
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-forums-list li
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-forums-list li
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
  /*  8 ----------------------  Font - forum description --------------------------*/
 
/*Note we also set bsp-forum-content as if add descriptions are set in forum display, then we need to replicate these settings */ 
  
<?php 
$field= (!empty($dataf['Forum Description FontSize']) ? $dataf['Forum Description FontSize'] : '')  ;
//$field=$dataf['Forum Description FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-forum-content, 
#bbpress-forums .bsp-forum-content,
#bbpress-forums .bbp-forum-info .bbp-forum-content
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Forum Description FontColor']) ? $dataf['Forum Description FontColor'] : '')  ;
//$field=$dataf['Forum Description FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-forum-content,
#bbpress-forums .bsp-forum-content,
#bbpress-forums .bbp-forum-info .bbp-forum-content
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($dataf['Forum Description FontFont']) ? $dataf['Forum Description FontFont'] : '')  ;
//$field=$dataf['Forum Description FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-forum-content,
#bbpress-forums .bsp-forum-content,
#bbpress-forums .bbp-forum-info .bbp-forum-content
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Forum Description FontStyle']) ? $dataf['Forum Description FontStyle'] : '')  ;
//$field=$dataf['Forum Description FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-forum-content,
#bbpress-forums .bsp-forum-content,
#bbpress-forums .bbp-forum-info .bbp-forum-content
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-forum-content,
#bbpress-forums .bsp-forum-content,
#bbpress-forums .bbp-forum-info .bbp-forum-content
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-forum-content,
 #bbpress-forums .bsp-forum-content,
 #bbpress-forums .bbp-forum-info .bbp-forum-content
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
 
  /*  9 ----------------------  Font - Freshness --------------------------*/
 
<?php 
$field= (!empty($dataf['Freshness FontSize']) ? $dataf['Freshness FontSize'] : '')  ;
//$field=$dataf['Freshness FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-forum-freshness, 
#bbpress-forums .bbp-topic-freshness
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($dataf['Freshness FontFont']) ? $dataf['Freshness FontFont'] : '')  ;
//$field=$dataf['Freshness FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-forum-freshness, 
#bbpress-forums .bbp-topic-freshness
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Freshness FontStyle']) ? $dataf['Freshness FontStyle'] : '')  ;
//$field=$dataf['Freshness FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-forum-freshness, 
#bbpress-forums .bbp-topic-freshness

 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-forum-freshness,
#bbpress-forums .bbp-topic-freshness
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-forum-freshness,
 #bbpress-forums .bbp-topic-freshness
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 /*  10 ----------------------  Font - Freshness Author--------------------------*/
 
<?php 
$field= (!empty($dataf['Freshness Author FontSize']) ? $dataf['Freshness Author FontSize'] : '')  ;
//$field=$dataf['Freshness Author FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-topic-freshness-author
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($dataf['Freshness Author FontFont']) ? $dataf['Freshness Author FontFont'] : '')  ;
//$field=$dataf['Freshness Author FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-topic-freshness-author
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Freshness Author FontStyle']) ? $dataf['Freshness Author FontStyle'] : '')  ;
//$field=$dataf['Freshness Author FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-topic-freshness-author
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-topic-freshness-author
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-topic-freshness-author
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
 
 
  /*  11 ----------------------  Forum boarder --------------------------*/
 
<?php 
$field1 = (!empty($dataf['Forum BorderLine width']) ? $dataf['Forum BorderLine width'] : '')  ;
//$field1=$dataf['Forum BorderLine width'] ;
$field2 = (!empty($dataf['Forum BorderLine style']) ? $dataf['Forum BorderLine style'] : '')  ;
//$field2=$dataf['Forum BorderLine style'] ;
$field3 = (!empty($dataf['Forum BorderColor']) ? $dataf['Forum BorderColor'] : '')  ;
///$field3=$dataf['Forum BorderColor'] ;

if (!empty ($field1) || !empty ($field2) ||!empty ($field3)) {
	if (empty ($field1)) $field1 = '1px' ;
	if (is_numeric($field1)) $field1=$field1.'px' ;
	if (empty ($field2)) $field2 = 'solid' ;
	$field=$field1.' '.$field2.' '.$field3
?>

#bbpress-forums ul.bbp-forums,
#bbpress-forums ul.bbp-topics,
#bbpress-forums .bbp-reply-header,
#bbpress-forums div.odd,
#bbpress-forums div.even,
#bbpress-forums ul.bbp-replies


  {
Border:  <?php echo $field ; ?> ;
 }
 
#bbpress-forums li.bbp-header,
#bbpress-forums li.bbp-body ul.forum,
#bbpress-forums li.bbp-body ul.topic,
#bbpress-forums li.bbp-footer,
#bbpress-forums ul.forum,


{
 
 Border-top:  <?php echo $field ; ?> ;
 
 }
 
 
#bbpress-forums li.bbp-footer


{
 
 Border-bottom:  <?php echo $field ; ?> ;
 
 }
 
 
 
 
<?php } ?>



 /*   12 ----------------------  Font - topic count --------------------------*/
 
<?php 
$field= (!empty($dataf['Topic Count FontSize']) ? $dataf['Topic Count FontSize'] : '')  ;
//$field=$dataf['Topic Count FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums li.bbp-forum-topic-count
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Topic Count FontColor']) ? $dataf['Topic Count FontColor'] : '')  ;
//$field=$dataf['Topic Count FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-forum-topic-count
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($dataf['Topic Count FontFont']) ? $dataf['Topic Count FontFont'] : '')  ;
//$field=$dataf['Topic Count FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-forum-topic-count
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Topic Count FontStyle']) ? $dataf['Topic Count FontStyle'] : '')  ;
//$field=$dataf['Topic Count FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums li.bbp-forum-topic-count
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums li.bbp-forum-topic-count
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums li.bbp-forum-topic-count
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>



 /*  13 ----------------------  Font - Post counts --------------------------*/
 
<?php 
$field= (!empty($dataf['Post Count FontSize']) ? $dataf['Post Count FontSize'] : '')  ;
//$field=$dataf['Post Count FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums li.bbp-forum-reply-count
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Post Count FontColor']) ? $dataf['Post Count FontColor'] : '')  ;
//$field=$dataf['Post Count FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-forum-reply-count
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($dataf['Post Count FontFont']) ? $dataf['Post Count FontFont'] : '')  ;
//$field=$dataf['Post Count FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-forum-reply-count
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataf['Post Count FontStyle']) ? $dataf['Post Count FontStyle'] : '')  ;
//$field=$dataf['Post Count FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums li.bbp-forum-reply-count
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums li.bbp-forum-reply-count
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums li.bbp-forum-reply-count
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>

 
/*****************************************************************************_________________TOPIC INDEX___________________________________________*/ 




/*  1 ----------------------  Font - pagination --------------------------*/
 
<?php 
$field= (!empty($datati['Pagination FontSize']) ? $datati['Pagination FontSize'] : '')  ;
//$field=$datati['Pagination FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-pagination
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Pagination FontColor']) ? $datati['Pagination FontColor'] : '')  ;
//$field=$datati['Pagination FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-pagination
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datati['Pagination FontFont']) ? $datati['Pagination FontFont'] : '')  ;
//$field=$datati['Pagination FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-pagination
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Pagination FontStyle']) ? $datati['Pagination FontStyle'] : '')  ;
//$field=$datati['Pagination FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-pagination
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-pagination
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums .bbp-pagination
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>


/*  2 ----------------------  Font - voice/post count --------------------------*/
 
<?php 
$field= (!empty($datati['Voice/Post Count FontSize']) ? $datati['Voice/Post Count FontSize'] : '')  ;
//$field=$datati['Voice/Post Count FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums li.bbp-topic-voice-count, li.bbp-topic-reply-count
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Voice/Post Count FontColor']) ? $datati['Voice/Post Count FontColor'] : '')  ;
//$field=$datati['Voice/Post Count FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-topic-voice-count, li.bbp-topic-reply-count
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datati['Voice/Post Count FontFont']) ? $datati['Voice/Post Count FontFont'] : '')  ;
//$field=$datati['Voice/Post Count FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-topic-voice-count, li.bbp-topic-reply-count
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Voice/Post Count FontStyle']) ? $datati['Voice/Post Count FontStyle'] : '')  ;
//$field=$datati['Voice/Post Count FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums li.bbp-topic-voice-count, li.bbp-topic-reply-count
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums li.bbp-topic-voice-count, li.bbp-topic-reply-count
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums li.bbp-topic-voice-count, li.bbp-topic-reply-count
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>

 /*  3 ----------------------  topic title Font - links --------------------------*/
 
<?php 
$field= (!empty($datati['Topic Title LinksLink Color']) ? $datati['Topic Title LinksLink Color'] : '')  ;
//$field=$datati['Topic Title LinksLink Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a.bbp-topic-permalink:link
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Topic Title LinksVisited Color']) ? $datati['Topic Title LinksVisited Color'] : '')  ;
//$field=$datati['Topic Title LinksVisited Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a.bbp-topic-permalink:visited
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datati['Topic Title LinksHover Color']) ? $datati['Topic Title LinksHover Color'] : '')  ;
//$field=$datati['Topic Title LinksHover Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a.bbp-topic-permalink:hover
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 

/*  4 ----------------------  Font - Topic Title --------------------------*/
 
<?php 
$field= (!empty($datati['Topic Title FontSize']) ? $datati['Topic Title FontSize'] : '')  ;
//$field=$datati['Topic Title FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-topic-title
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($datati['Topic Title FontFont']) ? $datati['Topic Title FontFont'] : '')  ;
//$field=$datati['Topic Title FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-topic-title
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Topic Title FontStyle']) ? $datati['Topic Title FontStyle'] : '')  ;
//$field=$datati['Topic Title FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-topic-title
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-topic-title
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-topic-title
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 /*  5 ----------------------  Font - template notice --------------------------*/
 
<?php 
$field= (!empty($datati['Template Notice FontSize']) ? $datati['Template Notice FontSize'] : '')  ;
//$field=$datati['Template Notice FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-template-notice p
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Template Notice FontColor']) ? $datati['Template Notice FontColor'] : '')  ;
//$field=$datati['Template Notice FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-template-notice
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datati['Template Notice FontFont']) ? $datati['Template Notice FontFont'] : '')  ;
//$field=$datati['Template Notice FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-template-notice
 
 {
Font-Family::  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Template Notice FontStyle']) ? $datati['Template Notice FontStyle'] : '')  ;
//$field=$datati['Template Notice FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-template-notice
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-template-notice
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums .bbp-template-notice
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>

/*  6 ----------------------  Font - template background --------------------------*/
 
<?php 
$field= (!empty($datati['Template NoticeBackground color']) ? $datati['Template NoticeBackground color'] : '')  ;
//$field=$datati['Template NoticeBackground color'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-template-notice
 
 {
background-color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 



/*  7 ----------------------  Font - template border --------------------------*/
 
<?php 

$field1 = (!empty($datati['Template Notice BorderLine width']) ? $datati['Template Notice BorderLine width'] : '')  ;
//$field1=$datati['Template Notice BorderLine width'] ;
$field2 = (!empty($datati['Template Notice BorderLine style']) ? $datati['Template Notice BorderLine style'] : '')  ;
//$field2=$datati['Template Notice BorderLine style'] ; ;
$field3 = (!empty($datati['Template Notice BorderLine color']) ? $datati['Template Notice BorderLine color'] : '')  ;
//$field3=$datati['Template Notice BorderLine color'] ;

if (!empty ($field1) || !empty ($field2) ||!empty ($field3)) {
	if (empty ($field1)) $field1 = '1px' ;
	if (is_numeric($field1)) $field1=$field1.'px' ;
	//if (empty ($field2)) $field2 = 'solid' ;
	$field=$field1.' '.$field2.' '.$field3
?>
#bbpress-forums .bbp-template-notice
 
 {
Border:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
/*  8 ----------------------  Font - Started by --------------------------*/
 
<?php 
$field= (!empty($datati['Topic Started bySize']) ? $datati['Topic Started bySize'] : '')  ;
//$field=$datati['Topic Started bySize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-topic-started-by,
.bbp-topic-started-in

 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Topic Started byColor']) ? $datati['Topic Started byColor'] : '')  ;
//$field=$datati['Topic Started byColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-topic-started-by,
.bbp-topic-started-in
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datati['Topic Started byFont']) ? $datati['Topic Started byFont'] : '')  ;
//$field=$datati['Topic Started byFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-topic-started-by,
.bbp-topic-started-in
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Topic Started byStyle']) ? $datati['Topic Started byStyle'] : '')  ;
//$field=$datati['Topic Started byStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-topic-started-by,
.bbp-topic-started-in
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-topic-started-by,
.bbp-topic-started-in
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums .bbp-topic-started-by,
 .bbp-topic-started-in
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>
/*  9 ----------------------  sticky/super sticky background --------------------------*/


<?php 
$field= (!empty($datati['Sticky Topic/ReplyBackground color - sticky topic']) ? $datati['Sticky Topic/ReplyBackground color - sticky topic'] : '')  ;
//$field=$datati['Sticky Topic/ReplyBackground color - sticky topic'] ;
if (!empty ($field)) {
?>


.bbp-topics ul.sticky,
.bbp-forum-content ul.sticky {
	background-color: <?php echo $field ;?> !important;
}
<?php } ?>

<?php 
$field= (!empty($datati['Sticky Topic/ReplyBackground color - super sticky topic']) ? $datati['Sticky Topic/ReplyBackground color - super sticky topic'] : '')  ;
//$field=$datati['Sticky Topic/ReplyBackground color - super sticky topic'] ;
if (!empty ($field)) {
?>
.bbp-topics-front ul.super-sticky,
.bbp-topics ul.super-sticky {
	background-color: <?php echo $field ;?> !important;
}

<?php } ?>




/*  10. ----------------------  Font - forum info notice (also does topic info)--------------------------*/
 
<?php 
$field= (!empty($datati['Forum Information FontSize']) ? $datati['Forum Information FontSize'] : '')  ;
//$field=$datati['Forum Information FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums div.bbp-template-notice.info .bbp-forum-description,
#bbpress-forums div.bbp-template-notice.info .bbp-topic-description 
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Forum Information FontColor']) ? $datati['Forum Information FontColor'] : '')  ;
//$field=$datati['Forum Information FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.bbp-template-notice.info .bbp-forum-description,
#bbpress-forums div.bbp-template-notice.info .bbp-topic-description 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datati['Forum Information FontFont']) ? $datati['Forum Information FontFont'] : '')  ;
//$field=$datati['Forum Information FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.bbp-template-notice.info .bbp-forum-description,
#bbpress-forums div.bbp-template-notice.info .bbp-topic-description 
 
 {
Font-Family::  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datati['Forum Information FontStyle']) ? $datati['Forum Information FontStyle'] : '')  ;
//$field=$datati['Forum Information FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums div.bbp-template-notice.info .bbp-forum-description,
#bbpress-forums div.bbp-template-notice.info .bbp-topic-description 
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums div.bbp-template-notice.info .bbp-forum-description,
#bbpress-forums div.bbp-template-notice.info .bbp-topic-description 
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums div.bbp-template-notice.info .bbp-forum-description,
#bbpress-forums div.bbp-template-notice.info .bbp-topic-description 
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>

/* 11 ----------------------  Font - forum info background  (also does topic info)--------------------------*/
 
<?php 
$field= (!empty($datati['Forum InformationBackground color']) ? $datati['Forum InformationBackground color'] : '')  ;
//$field=$datati['Forum InformationBackground color'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.bbp-template-notice.info
 
 {
background-color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 



/*  12 ----------------------  Font - forum info border  (also does topic info)--------------------------*/
 
<?php 

$field1 = (!empty($datati['Forum Information BorderLine width']) ? $datati['Forum Information BorderLine width'] : '')  ;
//$field1=$datati['Forum Information BorderLine width'] ;
$field2 = (!empty($datati['Forum Information BorderLine style']) ? $datati['Forum Information BorderLine style'] : '')  ;
//$field2=$datati['Forum Information BorderLine style'] ; ;
$field3 = (!empty($datati['Forum Information BorderLine color']) ? $datati['Forum Information BorderLine color'] : '')  ;
//$field3=$datati['Forum Information BorderLine color'] ;

if (!empty ($field1) || !empty ($field2) ||!empty ($field3)) {
	if (empty ($field1)) $field1 = '1px' ;
	if (is_numeric($field1)) $field1=$field1.'px' ;
	//if (empty ($field2)) $field2 = 'solid' ;
	$field=$field1.' '.$field2.' '.$field3
?>
#bbpress-forums div.bbp-template-notice.info
 
 {
Border:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 /*  13 ----------------------  Topic Index headings font --------------------------*/
 
<?php 
$field= (!empty($datati['Topic Index Headings FontSize']) ? $datati['Topic Index Headings FontSize'] : '')  ;
//$field=$datati['Topic Index Headings FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>

#bbpress-forums ul.forum-titles li.bbp-topic-title {
font-size:  <?php echo $field ; ?> ;
}
 
#bbpress-forums ul.forum-titles li.bbp-topic-voice-count {
font-size:  <?php echo $field ; ?> ;
}

#bbpress-forums ul.forum-titles li.bbp-topic-reply-count {
font-size:  <?php echo $field ; ?> ;
}

#bbpress-forums ul.forum-titles li.bbp-topic-freshness {
font-size:  <?php echo $field ; ?> ;
}



 <?php } ?>
 
<?php 
$field= (!empty($datati['Topic Index Headings FontColor']) ? $datati['Topic Index Headings FontColor'] : '')  ;
//$field=$datati['Topic Index Headings FontColor'] ;
if (!empty ($field)) {
?>

#bbpress-forums ul.forum-titles li.bbp-topic-title {
color:  <?php echo $field ; ?> ;
}
 
#bbpress-forums ul.forum-titles li.bbp-topic-voice-count {
color:  <?php echo $field ; ?> ;
}

#bbpress-forums ul.forum-titles li.bbp-topic-reply-count {
color:  <?php echo $field ; ?> ;
}

#bbpress-forums ul.forum-titles li.bbp-topic-freshness {
color:  <?php echo $field ; ?> ;
}


<?php } ?>
 
 <?php 
$field= (!empty($datati['Topic Index Headings FontFont']) ? $datati['Topic Index Headings FontFont'] : '')  ;
//$field=$datati['Topic Index Headings FontFont'] ;
if (!empty ($field)) {
?>


#bbpress-forums ul.forum-titles li.bbp-topic-title {
Font-Family:  <?php echo $field ; ?> ;
}
 
#bbpress-forums ul.forum-titles li.bbp-topic-voice-count {
Font-Family: <?php echo $field ; ?> ;
}

#bbpress-forums ul.forum-titles li.bbp-topic-reply-count {
Font-Family: <?php echo $field ; ?> ;
}

#bbpress-forums ul.forum-titles li.bbp-topic-freshness {
Font-Family:  <?php echo $field ; ?> ;
}

 <?php } ?>
 
<?php 
$field= (!empty($datati['Topic Index Headings FontStyle']) ? $datati['Topic Index Headings FontStyle'] : '')  ;
//$field=$datati['Topic Index Headings FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums ul.forum-titles li.bbp-topic-title {
Font-Style:  italic ; 
}
 
#bbpress-forums ul.forum-titles li.bbp-topic-voice-count {
Font-Style:  italic ; 
}

#bbpress-forums ul.forum-titles li.bbp-topic-reply-count {
Font-Style:  italic ; 
}

#bbpress-forums ul.forum-titles li.bbp-topic-freshness {
Font-Style:  italic ; 
}

<?php } 

if (strpos($field,'Bold') !== false) {
?>

#bbpress-forums ul.forum-titles li.bbp-topic-title {
Font-weight:  bold ; 
}
 
#bbpress-forums ul.forum-titles li.bbp-topic-voice-count {
Font-weight:  bold ; 
}

#bbpress-forums ul.forum-titles li.bbp-topic-reply-count {
Font-weight:  bold ; 
}

#bbpress-forums ul.forum-titles li.bbp-topic-freshness {
Font-weight:  bold ; 
}

 <?php }
 else { ?>
 
#bbpress-forums ul.forum-titles li.bbp-topic-title {
Font-weight:  normal ;
}
 
#bbpress-forums ul.forum-titles li.bbp-topic-voice-count {
Font-weight:  normal ;
}

#bbpress-forums ul.forum-titles li.bbp-topic-reply-count {
Font-weight:  normal ; 
}

#bbpress-forums ul.forum-titles li.bbp-topic-freshness {
Font-weight:  normal ;
}
 
 
  
 <?php
}
 
}

?>
 




 


/*******************************************************************************************_________________TOPIC/REPLY___________________________________________*/ 


 
 /*  1 ----------------------topic/reply backgrounds   --------------------------*/

<?php 
$field= (!empty($datat['Topic/Reply ContentBackground color - odd numbers']) ? $datat['Topic/Reply ContentBackground color - odd numbers']  : '')  ;
//$field=$datat['Topic/Reply ContentBackground color - odd numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.odd
 {
 background-color: <?php echo $field ; ?> ;
 }
<?php } ?>

<?php 
$field= (!empty($datat['Topic/Reply ContentBackground color - even numbers']) ? $datat['Topic/Reply ContentBackground color - even numbers'] : '')  ;
//$field=$datat['Topic/Reply ContentBackground color - even numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.even
  {
background-color: <?php echo $field ; ?> ;
 }
 <?php } ?>
 
  /*  2 ----------------------  Topic/reply header background --------------------------*/
 
<?php 
$field= (!empty($datat['Topic/Reply HeaderBackground color']) ? $datat['Topic/Reply HeaderBackground color'] : '')  ;
//$field=$datat['Topic/Reply HeaderBackground color'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.bbp-reply-header,
#bbpress-forums div.bbp-topic-header

  {
background-color: <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 
 
 
 /*  3 ----------------------  Trash/Spam backgrounds --------------------------*/
 
<?php 
$field= (!empty($datat['Trash/Spam ContentBackground color - odd numbers']) ? $datat['Trash/Spam ContentBackground color - odd numbers'] : '')  ;
//$field=$datat['Trash/Spam ContentBackground color - odd numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums .status-trash.odd,
#bbpress-forums .status-spam.odd 
 {
 background-color: <?php echo $field ; ?> ;
 }
<?php } ?>

<?php 
$field= (!empty($datat['Trash/Spam ContentBackground color - even numbers']) ? $datat['Trash/Spam ContentBackground color - even numbers'] : '')  ;
//$field=$datat['Trash/Spam ContentBackground color - even numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums .status-trash.even,
#bbpress-forums .status-spam.even
  {
background-color: <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 /*  4 ----------------------  Closed Topic backgrounds --------------------------*/
 
<?php 
$field= (!empty($datat['Closed Topic ContentBackground color']) ? $datat['Closed Topic ContentBackground color'] : '')  ;
//$field=$datat['Closed Topic ContentBackground color'] ;
if (!empty ($field)) {
?>
#bbpress-forums .status-closed,
#bbpress-forums .status-closed a
  {
background-color: <?php echo $field ; ?> ;
 }
 <?php } ?>
 
  /*  5 ----------------------  Font - topic/reply date --------------------------*/
 

 
 
 
 <?php 
$field= (!empty($datat['Topic/Reply Date FontSize']) ? $datat['Topic/Reply Date FontSize'] : '')  ;
//$field=$datat['Topic/Reply Date FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-reply-post-date

 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datat['Topic/Reply Date FontColor']) ? $datat['Topic/Reply Date FontColor'] : '')  ;
//$field=$datat['Topic/Reply Date FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-reply-post-date
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datat['Topic/Reply Date FontFont']) ? $datat['Topic/Reply Date FontFont'] : '')  ;
//$field=$datat['Topic/Reply Date FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-reply-post-date
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datat['Topic/Reply Date FontStyle']) ? $datat['Topic/Reply Date FontStyle'] : '')  ;
//$field=$datat['Topic/Reply Date FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-reply-post-date
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-reply-post-date
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>
 #bbpress-forums .bbp-reply-post-date
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>

 
 
 /*  6 ----------------------  Font - topic/reply text --------------------------*/
 

 
 <?php 
$field= (!empty($datat['Topic/Reply Text FontSize']) ? $datat['Topic/Reply Text FontSize'] : '')  ;
//$field=$datat['Topic/Reply Text FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-topic-content, 
#bbpress-forums .bbp-reply-content
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datat['Topic/Reply Text FontColor']) ? $datat['Topic/Reply Text FontColor'] : '')  ;
//$field=$datat['Topic/Reply Text FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-topic-content, 
#bbpress-forums .bbp-reply-content
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datat['Topic/Reply Text FontFont']) ? $datat['Topic/Reply Text FontFont'] : '')  ;
//$field=$datat['Topic/Reply Text FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-topic-content, 
#bbpress-forums .bbp-reply-content
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datat['Topic/Reply Text FontStyle']) ? $datat['Topic/Reply Text FontStyle'] : '')  ;
//$field=$datat['Topic/Reply Text FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-topic-content,
#bbpress-forums .bbp-reply-content
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-topic-content,
#bbpress-forums .bbp-reply-content
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>
#bbpress-forums .bbp-topic-content,
#bbpress-forums .bbp-reply-content
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 /*  7 ----------------------  Font - Author name --------------------------*/
 
<?php 
$field= (!empty($datat['Author Name FontSize']) ? $datat['Author Name FontSize'] : '')  ;
//$field=$datat['Author Name FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums a.bbp-author-name
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($datat['Author Name FontFont']) ? $datat['Author Name FontFont'] : '')  ;
//$field=$datat['Author Name FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums a.bbp-author-name
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datat['Author Name FontStyle']) ? $datat['Author Name FontStyle'] : '')  ;
//$field=$datat['Author Name FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums a.bbp-author-name
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums a.bbp-author-name
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums a.bbp-author-name
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
  /*  8 ----------------------  Font - reply permalink --------------------------*/
 
<?php 
$field= (!empty($datat['Reply Link FontSize']) ? $datat['Reply Link FontSize'] : '')  ;
//$field=$datat['Reply Link FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums a.bbp-reply-permalink
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($datat['Reply Link FontFont']) ? $datat['Reply Link FontFont'] : '')  ;
//$field=$datat['Reply Link FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums a.bbp-reply-permalink
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datat['Reply Link FontStyle']) ? $datat['Reply Link FontStyle'] : '')  ;
//$field=$datat['Reply Link FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums a.bbp-reply-permalink
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums a.bbp-reply-permalink
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums a.bbp-reply-permalink
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
  /*  9 ----------------------  Font - author role --------------------------*/
 
<?php 
$field= (!empty($datat['Author RoleSize']) ? $datat['Author RoleSize'] : '')  ;
//$field=$datat['Author RoleSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums div.bbp-reply-author .bbp-author-role
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datat['Author RoleColor']) ? $datat['Author RoleColor'] : '')  ;
//$field=$datat['Author RoleColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.bbp-reply-author .bbp-author-role

 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($datat['Author RoleFont']) ? $datat['Author RoleFont'] : '')  ;
//$field=$datat['Author RoleFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.bbp-reply-author .bbp-author-role
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datat['Author RoleStyle']) ? $datat['Author RoleStyle'] : '')  ;
//$field=$datat['Author RoleStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums div.bbp-reply-author .bbp-author-role
 
 {
Font-Style:  italic ; 
 }
<?php }
else {?>
 #bbpress-forums div.bbp-reply-author .bbp-author-role
 
 {
Font-Style:  normal ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums div.bbp-reply-author .bbp-author-role
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums div.bbp-reply-author .bbp-author-role
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
  /*  10 ----------------------  Topic Header --------------------------*/
 
<?php 
$field= (!empty($datat['Topic HeaderSize']) ? $datat['Topic HeaderSize'] : '')  ;
//$field=$datat['Topic HeaderSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums li.bbp-header .bbp-reply-content,
#bbpress-forums li.bbp-header  .bbp-reply-author,
#bbpress-forums li.bbp-footer .bbp-reply-content,
#bbpress-forums li.bbp-footer  .bbp-reply-author
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datat['Topic HeaderColor']) ? $datat['Topic HeaderColor'] : '')  ;
//$field=$datat['Topic HeaderColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-header .bbp-reply-content,
#bbpress-forums li.bbp-header  .bbp-reply-author,
#bbpress-forums li.bbp-footer .bbp-reply-content,
#bbpress-forums li.bbp-footer  .bbp-reply-author

 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($datat['Topic HeaderFont']) ? $datat['Topic HeaderFont'] : '')  ;
//$field=$datat['Topic HeaderFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-header .bbp-reply-content,
#bbpress-forums li.bbp-header  .bbp-reply-author,
#bbpress-forums li.bbp-footer .bbp-reply-content,
#bbpress-forums li.bbp-footer  .bbp-reply-author
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datat['Topic HeaderStyle']) ? $datat['Topic HeaderStyle'] : '')  ;
//$field=$datat['Topic HeaderStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums li.bbp-header .bbp-reply-content,
#bbpress-forums li.bbp-header  .bbp-reply-author,
#bbpress-forums li.bbp-footer .bbp-reply-content,
#bbpress-forums li.bbp-footer  .bbp-reply-author
 
 {
Font-Style:  italic ; 
 }
<?php }
else {?>
 #bbpress-forums li.bbp-header .bbp-reply-content,
#bbpress-forums li.bbp-header  .bbp-reply-author,
#bbpress-forums li.bbp-footer .bbp-reply-content,
#bbpress-forums li.bbp-footer  .bbp-reply-author
 
 {
Font-Style:  normal ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums li.bbp-header .bbp-reply-content,
#bbpress-forums li.bbp-header  .bbp-reply-author,
#bbpress-forums li.bbp-footer .bbp-reply-content,
#bbpress-forums li.bbp-footer  .bbp-reply-author
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
#bbpress-forums li.bbp-header .bbp-reply-content,
#bbpress-forums li.bbp-header  .bbp-reply-author,
#bbpress-forums li.bbp-footer .bbp-reply-content,
#bbpress-forums li.bbp-footer  .bbp-reply-author
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
   /*  11 ----------------------  Topic Admin Links --------------------------*/
 
<?php 
$field= (!empty($datat['Topic Admin linksSize']) ? $datat['Topic Admin linksSize'] : '')  ;
//$field=$datat['Topic Admin linksSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums span.bbp-admin-links a,
#bbpress-forums span.bbp-admin-links 
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datat['Topic Admin linksColor']) ? $datat['Topic Admin linksColor'] : '')  ;
//$field=$datat['Topic Admin linksColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums span.bbp-admin-links a,
#bbpress-forums span.bbp-admin-links 
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($datat['Topic Admin linksFont']) ? $datat['Topic Admin linksFont'] : '')  ;
//$field=$datat['Topic Admin linksFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums span.bbp-admin-links a,
#bbpress-forums span.bbp-admin-links 
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datat['Topic Admin linksStyle']) ? $datat['Topic Admin linksStyle'] : '')  ;
//$field=$datat['Topic Admin linksStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums span.bbp-admin-links a,
#bbpress-forums span.bbp-admin-links 
 
 {
Font-Style:  italic  ; 
 }
<?php }
else {?>
#bbpress-forums span.bbp-admin-links a,
#bbpress-forums span.bbp-admin-links 
 
 {
Font-Style:  normal ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums span.bbp-admin-links a,
#bbpress-forums span.bbp-admin-links 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
#bbpress-forums span.bbp-admin-links a,
#bbpress-forums span.bbp-admin-links 
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 /************************************************************************************_________________TOPIC REPLY FORM___________________________________________*/ 
 
  /*  1 ----------------------  Topic/reply Labels --------------------------*/
 
<?php 
$field= (!empty($dataform['LabelsSize']) ? $dataform['LabelsSize'] : '')  ;
//$field=$dataform['LabelsSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-form label
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($dataform['LabelsColor']) ? $dataform['LabelsColor'] : '')  ;
//$field=$dataform['LabelsColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-form label

 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($dataform['LabelsFont']) ? $dataform['LabelsFont'] : '')  ;
//$field=$dataform['LabelsFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-form label
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataform['LabelsStyle']) ? $dataform['LabelsStyle'] : '')  ;
//$field=$dataform['LabelsStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-form label
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-form label
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>
#bbpress-forums .bbp-form label
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 /*  2 ----------------------  Text area background --------------------------*/
 
 
 <?php 
$field= (!empty($dataform['Text areaBackground Color']) ? $dataform['Text areaBackground Color'] : '')  ;
//$field=$dataform['Text areaBackground Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums input[type="text"], textarea, 
#bbpress-forums input[type="text"]:focus, textarea:focus,
#bbpress-forums .quicktags-toolbar
 
 {
background-color:  <?php echo $field ; ?> ;
 }
 
 <?php } ?>
 
 /*  3 ----------------------  Text area font --------------------------*/
 
<?php 
$field= (!empty($dataform['Text areaSize']) ? $dataform['Text areaSize'] : '')  ;
//$field=$dataform['Text areaSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums input[type="text"], textarea, 
#bbpress-forums .quicktags-toolbar ,
#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($dataform['Text areaColor']) ? $dataform['Text areaColor'] : '')  ;
//$field=$dataform['Text areaColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums input[type="text"], textarea, 
#bbpress-forums .quicktags-toolbar ,
#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content


 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($dataform['Text areaFont']) ? $dataform['Text areaFont'] : '')  ;
//$field=$dataform['Text areaFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums input[type="text"], textarea, 
#bbpress-forums .quicktags-toolbar ,
#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($dataform['Text areaStyle']) ? $dataform['Text areaStyle'] : '')  ;
//$field=$dataform['Text areaStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums input[type="text"], textarea, 
#bbpress-forums .quicktags-toolbar ,
#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums input[type="text"], textarea, 
#bbpress-forums .quicktags-toolbar ,
#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>
#bbpress-forums input[type="text"], textarea, 
#bbpress-forums .quicktags-toolbar ,
#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 /*  4 ----------------------  button background --------------------------*/

 <?php 
$field= (!empty($dataform['ButtonBackground Color']) ? $dataform['ButtonBackground Color'] : '')  ;
//$field=$dataform['ButtonBackground Color'] ;
if (!empty ($field)) {
?>

#bbpress-forums .button {
  background-color: <?php echo $field ; ?> ;
  
}

 <?php } ?>
 
 <?php 
$field= (!empty($dataform['ButtonText Color']) ? $dataform['ButtonText Color'] : '')  ;
//$field=$dataform['ButtonText Color'] ;
if (!empty ($field)) {
?>

#bbpress-forums .button {
  color: <?php echo $field ; ?> ;
  
}

 <?php } ?>
 
 /*********_________________LATEST ACTIVITY WIDGET___________________________________________*/ 
 
  /*  2 ----------------------  Widget title --------------------------*/
 
<?php 


$field= (!empty($datala['Widget TitleSize']) ? $datala['Widget TitleSize'] : '')  ;
//$field=$datala['Widget TitleSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
.bsp-la-title h1, 
.bsp-la-title h2,
.bsp-la-title h3,
.bsp-la-title h4,
.bsp-la-title h5

 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 
<?php 
$field=$datala['Widget TitleColor'] ;
if (!empty ($field)) {
?>
.bsp-la-title h1, 
.bsp-la-title h2,
.bsp-la-title h3,
.bsp-la-title h4,
.bsp-la-title h5

 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datala['Widget TitleFont']) ? $datala['Widget TitleFont'] : '')  ;
//$field=$datala['Widget TitleFont'] ;
if (!empty ($field)) {
?>

.bsp-la-title h1, 
.bsp-la-title h2,
.bsp-la-title h3,
.bsp-la-title h4,
.bsp-la-title h5
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datala['Widget TitleStyle']) ? $datala['Widget TitleStyle'] : '')  ;
//$field=$datala['Widget TitleStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>

.bsp-la-title h1, 
.bsp-la-title h2,
.bsp-la-title h3,
.bsp-la-title h4,
.bsp-la-title h5

{
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
.bsp-la-title h1, 
.bsp-la-title h2,
.bsp-la-title h3,
.bsp-la-title h4,
.bsp-la-title h5
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>

.bsp-la-title h1, 
.bsp-la-title h2,
.bsp-la-title h3,
.bsp-la-title h4,
.bsp-la-title h5

 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
 
 /*  2 ----------------------  topic/reply title --------------------------*/
 
<?php 


$field= (!empty($datala['Topic TitleSize']) ? $datala['Topic TitleSize'] : '')  ;
//$field=$datala['Topic TitleSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
.bsp-la-reply-topic-title
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 

 
 <?php 
$field= (!empty($datala['Topic TitleFont']) ? $datala['Topic TitleFont'] : '')  ;
//$field=$datala['Topic TitleFont'] ;
if (!empty ($field)) {
?>

.bsp-la-reply-topic-title
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datala['Topic TitleStyle']) ? $datala['Topic TitleStyle'] : '')  ;
//$field=$datala['Topic TitleStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>

.bsp-la-reply-topic-title

{
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
.bsp-la-reply-topic-title
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>

.bsp-la-reply-topic-title
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
   /*  3 ----------------------  Text font --------------------------*/
 
<?php 
$field= (!empty($datala['Text fontSize']) ? $datala['Text fontSize'] : '')  ;
//$field=$datala['Text fontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
.bsp-la-text
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datala['Text fontColor']) ? $datala['Text fontColor'] : '')  ;
//$field=$datala['Text fontColor'] ;
if (!empty ($field)) {
?>
.bsp-la-text

 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($datala['Text fontFont']) ? $datala['Text fontFont'] : '')  ;
//$field=$datala['Text fontFont'] ;
if (!empty ($field)) {
?>
.bsp-la-text
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datala['Text fontStyle']) ? $datala['Text fontStyle'] : '')  ;
//$field=$datala['Text fontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
.bsp-la-text
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
.bsp-la-text
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>
.bsp-la-text
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
  /*  4 ----------------------  Topic author Font --------------------------*/
 
<?php 


$field= (!empty($datala['Topic author FontSize']) ? $datala['Topic author FontSize'] : '')  ;
//$field=$datala['Topic author FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
.bsp-la-topic-author
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($datala['Topic author FontFont']) ? $datala['Topic author FontFont'] : '')  ;
//$field=$datala['Topic author FontFont'] ;
if (!empty ($field)) {
?>

.bsp-la-topic-author
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datala['Topic author FontStyle']) ? $datala['Topic author FontStyle'] : '')  ;
//$field=$datala['Topic author FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>

.bsp-la-topic-author

{
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
.bsp-la-topic-author
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>

.bsp-la-reply-topic-title
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
  /*  5 ----------------------  Freshness Font--------------------------*/
 
<?php 
$field= (!empty($datala['Freshness FontSize']) ? $datala['Freshness FontSize'] : '')  ;
//$field=$datala['Freshness FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
.bsp-la-freshness
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field= (!empty($datala['Freshness FontColor']) ? $datala['Freshness FontColor'] : '')  ;
//$field=$datala['Freshness FontColor'] ;
if (!empty ($field)) {
?>
.bsp-la-freshness

 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field= (!empty($datala['Freshness FontFont']) ? $datala['Freshness FontFont'] : '')  ;
//$field=$datala['Freshness FontFont'] ;
if (!empty ($field)) {
?>
.bsp-la-freshness
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datala['Freshness FontStyle']) ? $datala['Freshness FontStyle'] : '')  ;
//$field=$datala['Freshness FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
.bsp-la-freshness
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
.bsp-la-text
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>
.bsp-la-text
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 /*  6 ----------------------  Forum Font --------------------------*/
 
<?php 


$field= (!empty($datala['Forum FontSize']) ? $datala['Forum FontSize'] : '')  ;
//$field=$datala['Forum FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
.bsp-la-forum-title
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
  
 <?php 
$field= (!empty($datala['Forum FontFont']) ? $datala['Forum FontFont'] : '')  ;
//$field=$datala['Forum FontFont'] ;
if (!empty ($field)) {
?>

.bsp-la-forum-title
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datala['Forum FontStyle']) ? $datala['Forum FontStyle'] : '')  ;
//$field=$datala['Forum FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>

.bsp-la-forum-title

{
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
.bsp-la-forum-title
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>

.bsp-la-forum-title
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
  /*  7 ----------------------  Topic-reply links --------------------------*/
 
<?php 
$field= (!empty($datala['Topic-reply linksLink Color']) ? $datala['Topic-reply linksLink Color'] : '')  ;
//$field=$datala['Topic-reply linksLink Color'] ;
if (!empty ($field)) {
?>
a:link.bsp-la-reply-topic-title
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field= (!empty($datala['Topic-reply linksVisited Color']) ? $datala['Topic-reply linksVisited Color'] : '')  ;
//$field=$datala['Topic-reply linksVisited Color'] ;
if (!empty ($field)) {
?>
a:visited.bsp-la-reply-topic-title 
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 
 <?php 
$field= (!empty($datala['Topic-reply linksHover Color']) ? $datala['Topic-reply linksHover Color'] : '')  ;
//$field=$datala['Topic-reply linksHover Color'] ;
if (!empty ($field)) {
?>
a:hover.bsp-la-reply-topic-title 
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 
 
 
 
 
 /*********_________________FORUM DISPLAY___________________________________________*/ 
 
 
 /*----------------------  Move breadcrumb --------------------------*/
 <?php 
$field = (!empty($datafd['move_subscribe']) ? $datafd['move_subscribe'] : '');
if (!empty ($field)) {
?>
.subscription-toggle  {	
	float:right ;
 }
 <?php } ?>
 
 
  /*----------------------  forum description styling --------------------------*/
 
#bbpress-forums div.bsp-forum-content {
clear:both;
margin-left: 0px ;
padding: 0 0 0 0 ;
	}
	
 /*----------------------  Rounded corners --------------------------*/
 
 
<?php 
$field = (!empty($datafd['rounded_corners'] ) ? $datafd['rounded_corners']  : '');
if (!empty ($field)) {
?>	
	.bbp-forums , .bbp-topics  , .bbp-replies  {
	
border-top-left-radius: 10px ;
border-top-right-radius: 10px ;
border-bottom-left-radius: 10px ;
border-bottom-right-radius: 10px ;
	}
	



<?php
}	?>

/*----------------------------------------- ROLES--------------------------------------------------------------------*/

<?php 

$roles = bbp_get_dynamic_roles () ;
	foreach ( $roles as $key=>$name ) {
	
	
	$role = $key ;
	
	
//do all the font stuff as it doesn't matter if needed or not
	$field= (!empty($data4[ $role.'font_size']) ? $data4[ $role.'font_size'] : '')  ;
	//$field=$data4[ $role.'font_size'] ;
	if (!empty ($field)) {
	if (is_numeric($field)) $field=$field.'px' ;
	echo '.bsp-author-'.$role ;
	?>
		 
	 {
	font-size:  <?php echo $field ; ?> ;
	 }
	 <?php } ?>
	 
	<?php 
	$field= (!empty($data4[$role.'font_color']) ? $data4[$role.'font_color'] : '')  ;
	//$field=$data4[$role.'font_color'] ;
	if (!empty ($field)) {
	echo '.bsp-author-'.$role ;
	?>
	
	 
	 {
	color:  <?php echo $field ; ?> ;
	 }
	 <?php } ?>
	 
	 <?php 
	$field= (!empty($data4[$role.'font']) ? $dataf[$role.'font'] : '')  ;
	//$field=$data4[$role.'font'] ;
	if (!empty ($field)) {
	echo '.bsp-author-'.$role ;
	?>
	
	 
	 {
	Font-Family:  <?php echo $field ; ?> ;
	 }
	 <?php } ?>
	 
	<?php 
	$field= (!empty($data4[$role.'font_style']) ? $data4[$role.'font_style'] : '')  ;
	//$field=$data4[$role.'font_style'] ;

	if (!empty ($field)) {
	if (strpos($field,'Italic') !== false) {
	echo '.bsp-author-'.$role ;
	?>
	
	 
	 {
	Font-Style:  italic ; 
	 }
	 <?php } 

	if (strpos($field,'Bold') !== false) {
	echo '.bsp-author-'.$role ;
	?>
	
	 
	 {
	Font-weight:  bold ; 
	 }
	 <?php }
	 else { 
	echo '.bsp-author-'.$role ;
	 ?>
	 
	{
	Font-weight:  normal ; 
	}
	 	 
	 <?php
	} //end of else
	 
	} // end of font style
	
	
	

//now see if we need to add styling for role type
	$roletype = $role.'type' ;
	$roletype =  (!empty($bsp_roles[$roletype]) ? $bsp_roles[$roletype] : '2');
	//echo 'role slection is '.$roletype ;
	//if type 1 - then just image so no css needed
		//if type 2 or 4, we need to add background color
		if (($roletype == 2) || ($roletype == 4)) {
		//add background color if specified 
		$background = $role.'background_color' ;
		$background=  (!empty($bsp_roles[$background]) ? $bsp_roles[$background] : '');
		if (!empty ($background)) {
		echo '.bsp-author-'.$role ;
		?>
			
 
			{
			background-color:  <?php echo $background ; ?> ; 
		}
		<?php } 		
		} //end of roletype 2
		
		//if type 3 then add image as background 
		if ($roletype == 3) {
		$background = $role.'image' ;
		$background=  (!empty($bsp_roles[$background]) ? $bsp_roles[$background] : '');
		$image_height = (!empty($bsp_roles[$role.'image_height']) ? $bsp_roles[$role.'image_height'] : '') ;
		$image_width = (!empty($bsp_roles[$role.'image_width']) ? $bsp_roles[$role.'image_width'] : '') ;
		$padding = $image_height / 2 ;
		echo '.bsp-author-'.$role ;
		?>
			
 		{
			background-image: url( <?php echo $background ; ?> ) ;
			background-repeat: no-repeat;
			height : <?php echo $image_height ; ?> ;
			width : <?php echo $image_width ; ?> ;
			text-align : center ;
			padding-top : <?php echo $padding ; ?>px ;
		}

		
		<?php		
		} //end of roletype 3
		
	

} ?>



/*----------------------  custom css--------------------------*/
<?php

$field= (!empty($datacss['css']) ? $datacss['css'] : '')  ;
//$field=$datacss['css'] ;
if (!empty ($field)) {
echo $field ;	
}


?>



/*----------------code to put in style for 'create topic '    */

.bsp-new-topic {
text-align: center;
}


 /* to get the spinner.gif loaded before submit executes */
#bsp-spinner-load {
background: url(/wp-admin/images/spinner.gif) no-repeat;
display : none ;
}

.bsp-spinner {
 
  background: url(/wp-admin/images/spinner.gif) no-repeat;
  -webkit-background-size: 20px 20px;
  background-size: 20px 20px;
  float: right;
  opacity: 0.7;
  filter: alpha(opacity=70);
  width: 20px;
  height: 20px;
  margin: 2px 5px 0;
}


#bsp_topic_submit {
display : none ;
}

#bsp_reply_submit {
display : none ;
}








 
 
