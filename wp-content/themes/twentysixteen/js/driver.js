/******/

(function($) {
  $(document).ready(function() {
	  
	var neiObj={
		//add class to overwrite or add to original
		addClass: function(elem, newClass) {
			$(elem).addClass(newClass);
		},
		//get param from url
		getURLParam: function(name) {
			var url = location.href;
			name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
			var regexS = "[\\?&]" + name + "=([^&#]*)";
			var regex = new RegExp(regexS);
			var results = regex.exec(url);
			return results == null ? null : decodeURIComponent(results[1]);
		},
		//check if path part of url
		isInURL:function(){
			var linkList = [];
			var path = window.location.href;
			var urlPart = path.split('/');
			
			$('#superfish-1 li a').each(function(){
				linkList.push($(this).html().toLowerCase());
				$(this).addClass($(this).html().toLowerCase());
			});
			
			
			if ($.inArray(urlPart[3], linkList) > -1) {
				//alert(linkList + ' '+ urlPart[3])
				$('a.'+urlPart[3]).addClass('active');
			}
			
		}
	};

	//check url
	neiObj.isInURL();

	if($('.sub-nav').length){
		neiObj.addClass('#superfish-1 li.active-trail', 'subnav-menu');
	};
	
	//Add custom class depanding on file extention aka pdf, doc
	$('.download-path').each(function(){
		var href   = $(this).attr('href');
		var ext    = $(this).attr('href').substr( (href.lastIndexOf('.') +1) ).toLowerCase();
		var parent = $(this).parents('.download');
		var before = parent.find('ten:before');

		switch(ext){
			case 'doc':
			$(parent).addClass('doc');
			break;
			case 'pdf':
			$(parent).addClass('pdf');
			break;
			case 'zip':
			$(parent).addClass('zip');
			break;			
			case 'txt':
			$(parent).addClass('txt');			
			break;
		}	
	});
	
	
	//Q2HJP4N9JH3CXOKM
	//API key for lifetime access to Alpha Vantage
//https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=NTHEX&apikey=Q2HJP4N9JH3CXOKM&outputsize=compact 
	$(document).ready(function(){
	  $.getJSON("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=NTHEX&apikey=Q2HJP4N9JH3CXOKM&outputsize=compact",function(response){
		var gstock='NTHEX';
		var date = response['Meta Data']['3. Last Refreshed'];  
		var stockInfo = response['Time Series (Daily)'][date]['4. close'];		
		var day = date.split("-");
		var stockString ='<div class="stockWrapper">';
		//stockString +='<span class="stockSymbol">The /*previous day\'s*/ closing price for '+gstock+ '</span>';
		stockString +='<span class="stockSymbol">The closing price for '+gstock+ '</span>';
		stockString +='<span> on </span> <span class="stockTime">'+day[1]+ '/' +day[2] + '/' + day[0] +'</span>';
		stockString +='<span class="stockPrice"> was $'+ stockInfo+ '</span>';
		stockString +='</div>';
		$('.stockTick').prepend(stockString);
	  });	 
	});	
	//-- END -->
  });
  
  
})(this.jQuery);

 