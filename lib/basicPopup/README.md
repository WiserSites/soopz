jquery.basicPopup
=================

A basic jquery popup plugin.


##Including files
The basicPopup JS and CSS files are located on the dist/, or you can compiling it yourself with Gulp.
```html
<!-- basicPopup core CSS file -->
<link rel="stylesheet" href="css/basicPopup.min.css">

<!-- basicPopup default theme CSS file -->
<link rel="stylesheet" href="css/basicPopupDefault.min.css">

<!-- jQuery 1.7.2+ -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- basicPopup core JS file -->
<script src="js/jquery.basicPopup.min.js"></script>
```

##Initializing popup
```js
$(document).ready(function(){
		
	$('#btn-open').click(function(){	
		
		$.basicpopup({
			content: $('#popup-content').html() //Popup conten
		});
		
	});

});
```

##Options
Options should be passed to the initialization code and separated by comma, e.g.:

```js
$.basicpopup({
	content: '',
	btnClose: true,
	mainClass : 'my-custom-class'
});
```
###url
If declared, Ajax is usde to load the URL content in the popup.

###content
If declared, this content is usde as the popup content.

###btnClose
_boolean_ - Default: **true**

Controls whether the close button will be displayed or not.

###mainClass
String that contains classes that will be added to the root element of popup wrapper and to dark overlay. For example "myClass", can also contain multiple classes - 'myClassOne myClassTwo'.

##Callbacks

###afterShow
This callback is fired after the popup is displayed.









