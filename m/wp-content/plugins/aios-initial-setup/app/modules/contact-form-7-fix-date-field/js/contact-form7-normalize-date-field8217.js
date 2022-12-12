jQuery(document).ready(function(){var asisWpcf7={};if(typeof _wpcf7=="object"){asisWpcf7=_wpcf7;}
else if(typeof wpcf7=="object"){asisWpcf7=wpcf7;}
if(!asisWpcf7.jqueryUi){return;}
jQuery("input.wpcf7-date[type='date']").each(function(i,v){if(jQuery(v).hasClass("hasDatepicker")){jQuery(v).datepicker("destroy");}
jQuery(v).attr("type","text");if(typeof jQuery(v).attr("placeholder")=="undefined"){jQuery(v).attr("placeholder","yy-mm-dd");}
else{jQuery(v).attr("placeholder",jQuery(v).attr("placeholder"));}
jQuery(v).on("keydown keyup",function(e){e.preventDefault();});jQuery(v).datepicker({dateFormat:'yy-mm-dd',minDate:new Date(jQuery(v).attr("min")),maxDate:new Date(jQuery(v).attr("max"))});jQuery(v).removeAttr("min max");});});