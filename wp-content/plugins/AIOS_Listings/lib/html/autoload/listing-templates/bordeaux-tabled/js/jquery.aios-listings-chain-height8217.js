(function(){jQuery.fn.aiosListingsChainHeight=function(settings){ChainHeight(jQuery(this),settings);return jQuery(this);}
function ChainHeight(elem,settings){var target=jQuery(elem);settings=jQuery.extend({'master':false,'breakpoints':[{'min':0,'max':'none'}],'refreshDelay':1000},settings);(function(){doResizeEvents();jQuery(window).on('resize',function(){doResizeEvents()});jQuery(window).on('load',function(){doResizeEvents()});})();function doResizeEvents(){setTimeout(function(){chainHeights();},settings.refreshDelay);}
function allowedToRun(){var winWidth=window.innerWidth||jQuery(window).width();var result=false;jQuery.each(settings.breakpoints,function(index,elem){if(winWidth>=elem.min&&winWidth<=elem.max){result=true;}
else if(winWidth>=elem.min&&(elem.max=='none'||typeof elem.max=="undefined")){result=true;}
else{result=false;}});return result;}
function chainHeights(){var height=0;target.css('height','auto');if(allowedToRun()){if(jQuery(settings.master).length>0){height=jQuery(settings.master).outerHeight();}else{target.each(function(i,v){var elemHeight=jQuery(v).outerHeight();if(elemHeight>height){height=elemHeight;}});}}else{height='auto';}
target.each(function(i,v){if(jQuery(v).css('box-sizing')!='border-box'){height-=(parseInt(jQuery(v).css('padding-top'))+parseInt(jQuery(v).css('padding-bottom')));}
jQuery(v).css('height',height);});}}})();