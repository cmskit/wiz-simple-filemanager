// show Error-Message
(function( $ ){
	$.fn.simple_filemanager = function(){
		message('"'+this.attr('name')+'" must be an external Wizard!',1);
	};
})( jQuery );
