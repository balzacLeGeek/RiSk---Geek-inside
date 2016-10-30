(function($){
	$.fn.qrcodeSelection = function(options) {

		var defaults = {
			delay: 1
		};
				
		var options = $.extend(defaults, options);
		
		var qrcs = {};
		
		qrcs.getSelected = function(){
			var t = '';
			if(window.getSelection){
				t = window.getSelection();
			}else if(document.getSelection){
				t = document.getSelection();
			}else if(document.selection){
				t = document.selection.createRange();
			}
			return t;
		}
		
		qrcs.clearSelection = function(){
			$("#qr_code_tooltip").animate({opacity: 0}, 300, function(){ $(this).remove() });
			$(".qrcode_image").fadeOut("normal", function(){ $(this).remove()});
		}
		
		$(document).mousedown(function(){
			qrcs.clearSelection();
		})
		
		qrcs.saveSelection = function () {
			obj = qrcs.getSelected();

			if($.browser.msie)
			{
				if(obj.getBookmark)
					qrcs.storedSelections = obj.getBookmark();
			}
			else
			{
				if (obj.rangeCount > 0)
					qrcs.storedSelections = obj.getRangeAt(0);
			}
		}
		
		qrcs.getSelection = function () {
			return qrcs.storedSelections;
		}
		
		qrcs.restoreSelection = function (saved) {
			obj = qrcs.getSelected();

			if($.browser.msie)
			{
				obj.moveToBookmark (saved);
				obj.select ();
			}
			else
			{
				obj.removeAllRanges();
				obj.addRange(saved);
			}
		}
				
		
		this.each(function(){
		
			var obj = $(this);
			var bubble;
			
			obj.mouseup(function(e){
				var text = qrcs.getSelected();
				qrcs.saveSelection();
				qrcs.clearSelection();

				if(text != '')
				{
					bubble = $("<span>").attr({
						id: 'qr_code_tooltip'
					}).addClass('qrcode_tooltip').css("opacity", 0).hover(
						function(){
							$(this).animate({opacity: 1},100);
						},
						function(){
							$(this).animate({opacity: 0.5},100);
						}
					);
					
					texte = text;
					if($.browser.msie)
						texte = text.text;
					
					link = $("<a>").attr({
						href: "#",
						title: "Afficher le QR Code pour '"+texte+"'"
					}).text("QR code").click(function(e){
						e.stopPropagation();
						$.ajax({
							url: 'php/qrcode.php',
							data: "str="+text,
							success: function(data) {
								ts = Math.floor(Math.random()*100000000);
								qrimg = $("<div>").addClass("qrcode_image").css({
									left: $("#qr_code_tooltip").offset().left+40,
									top: $("#qr_code_tooltip").offset().top+2,
								}).append("<img src='php/qrcodeimg/image.png?ts="+ts+"' alt='' />").hide();
								$("body").append(qrimg);
								$(qrimg).fadeIn();
							}
						});
						return false;
					});
											
					bubble.append(link);
										
					if($.browser.msie)
					{
						newRange = text.duplicate();
						newRange.setEndPoint( "StartToEnd", text);
						content = $($("<div>").html(bubble.clone())).html();
						newRange.pasteHTML(content);
					}
					else
					{
						range = text.getRangeAt(0);
												
						newRange = document.createRange();
						newRange.setStart(text.focusNode, range.endOffset);
						newRange.insertNode(bubble.get(0));
					}
					
					bubble.animate({opacity: 0.7}, 300);
				}
			});
					
		});
		
		return this;
	};
})(jQuery);