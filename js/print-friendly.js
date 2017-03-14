
var pfHeaderImgUrl = '';
var pfHeaderTagline = '';
var pfdisableClickToDel = 0;
var pfHideImages = 0;
var pfImageDisplayStyle = 'right';
var pfDisablePDF = 0;
var pfDisableEmail = 0;
var pfDisablePrint = 0;
var pfCustomCSS = '';
var pfBtVersion='1';

(function(){
	var js, pf;
	pf = document.createElement('script');
	pf.type = 'text/javascript';
	
	if ('http:' === document.location.protocol){
		js='http://cdn.printfriendly.com/printfriendly.js'
	} else {
		js='http://cdn.printfriendly.com/printfriendly.js'
	}
	
	pf.src=js;
	
	document.getElementsByTagName('w')[0].appendChild(pf)})();
