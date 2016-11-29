var wordCounter = {
	el: '.word-count',

	initialize: function(new_class) {
		var _this = this;
                this.el = new_class;
		jQuery('.editor_page').parent(".row").find('textarea').on('change', function() { _this.update( jQuery(this).val(),jQuery(this).parent() ); });
		jQuery('.editor_page').parent(".row").find('textarea').on('keyup',  function() { _this.update( jQuery(this).val(),jQuery(this).parent() ); });
	},

	update: function(value,parent) {
            console.log(this.el);
		jQuery('.chars', parent).html( this.getCharCount(value) );
		jQuery('.words', parent).html( this.getWordCount(value.trim()) );
		jQuery('.paras', parent).html( this.getParaCount(value.trim()) );
//                global-count
                var char = 0;
                var word = 0;
                var paras = 0;
                var this_class = this;
                jQuery('.editor_page').parent(".row").find('textarea').each(function(){
                    char = char + this_class.getCharCount(jQuery(this).val());
                    word = word + this_class.getWordCount(jQuery(this).val());
                    paras = paras + this_class.getParaCount(jQuery(this).val());
                })
                jQuery("#global-count .chars").html(char);
                jQuery("#global-count .words").html(word);
                jQuery("#global-count .paras").html(paras);
	},

	/*
	 * getCharCount:
	 *   - Calculates the number of characters in the field.
	 *   - Counts *all* characters.
	 */

	getCharCount: function(value) {
		return value.length;
	},

	/*
	 * getWordCount:
	 *   - Calculates the number of words in the field.
	 *   - Words are separated by any number of spaces or a semi-colon.
	 */

	getWordCount: function(value) {
		if (value) {
			var regex = /\s+|\s*;+\s*/g;
			return value.split(regex).length;
		}

		return 0;
	},

	/*
	 * getParaCount:
	 *   - Calculates the number of paragraphs in the field.
	 *   - Paragraphs are separated by any number of newline characters.
	 */

	getParaCount: function(value) {
		if (value) {
			var regex = /\n+/g;
			return value.split(regex).length;
		}

		return 0;
	}
};

wordCounter.initialize(".word-count");
jQuery( document ).ready(function($) {
$('textarea.form-control').keyup(function() {
    var keyed = $(this).val();
    $("ul.counters").removeClass("text_is_typed");
    if(keyed != ""){
        $("ul.counters").addClass("text_is_typed");
    }else{
    $("ul.counters").removeClass("text_is_typed");

    }

});
    var change_class_number = 1;
$( ".new_textarea" ).click(function() {
//  $( '<textarea onkeyup="textAreaAdjust(this)" name="content" class="new_textarea_fild form-control" type="text" placeholder="Type your social message..."></textarea>' ).insertBefore(this);
  $( '<div class="flex-wrapper soopz-input word-count_'+change_class_number+'"><textarea onkeyup="textAreaAdjust(this)" name="content" class="flex-item form-control" type="text" placeholder="Type your social message..."></textarea><div class="flex-item counters"><ul class="counters"><li class="char-count"><span>Characters </span><span class="chars item_circle">0</span></li><li class="word-count"><span>Words</span><span class="words item_circle">0</span></li><li class="par-count"><span>Paragraphs</span><span class="paras item_circle">0</span></li></ul> </div></div>' ).insertBefore(this);
  wordCounter.initialize(".word-count_"+change_class_number);
  change_class_number++;
});


$('#btn-open').click(function(){
    var val_text ="";
  $(".row .flex-wrapper.soopz-input").each(  function( key, value ) {
   var val_text_ = $(this).find("textarea").val();
   val_text = val_text + "<p>"+val_text_+"</p>";
});
   $("#popup-content .popup_content").html(val_text);
  $.basicpopup({
    content: $('#popup-content').html()
  });

});
//$('.button.popup-button').click(function(){
    $(document).on('click',".button.popup-button", function() {
  $.basicpopup({
    content: $('#popup-content-share').html()
  });

});


$('#i_loading').hide();
$(document).on('click', '#btn-save', function () {
    $('#i_loading').show();
    var textarea_val ="";
    var counter = 0 ;
    var post_title = "";
  $(".row .flex-wrapper.soopz-input").each(  function( key, value ) {
   var textarea_val_ = $(this).find("textarea").val();
   if(counter == 0){
       post_title = textarea_val_;
   }
   if(counter != 0){
   textarea_val = textarea_val + "<p>"+textarea_val_+"</p>";
   }
   counter++;
});
                ajax_request = jQuery.ajax({
     url: ajaxurl,
     type: 'post',
     data: {
      action: 'save_post',
      textarea_val : textarea_val,
      post_title:post_title
     },
     success: function(response) {
      response = jQuery.parseJSON(response);
      console.log(response);
      if(response){
          $('#i_loading').hide();
          $(".post_success_message").css("display","inline-block");
          setTimeout(function(){
          $(".post_success_message").css("display","none");
          }, 4000);
      }
     }
    });
   })
   
            $('#i_loading_for_popup').hide();
$(document).on('click', '#popup-save-btn', function () {
    $('#i_loading_for_popup').show();
    var textarea_val ="";
    var counter = 0 ;
    var post_title = "";
  $(".row .flex-wrapper.soopz-input").each(  function( key, value ) {
   var textarea_val_ = $(this).find("textarea").val();
   if(counter == 0){
       post_title = textarea_val_;
   }
   if(counter != 0){
   textarea_val = textarea_val + "<p>"+textarea_val_+"</p>";
   }
   counter++;
});
                ajax_request = jQuery.ajax({
     url: ajaxurl,
     type: 'post',
     data: {
      action: 'save_post',
      textarea_val : textarea_val,
      post_title:post_title
     },
     success: function(response) {
      response = jQuery.parseJSON(response);
      console.log(response);
      if(response){
          $('#i_loading_for_popup').hide();
          $(".post_success_message_for_popup").css("display","inline-block");
          setTimeout(function(){
          $(".post_success_message_for_popup").css("display","none");
          }, 4000);
      }
     }
    });
        
    });
    
    
});
