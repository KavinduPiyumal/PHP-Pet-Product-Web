$(document).ready(function(){
	$(".mainvisual ul").owlCarousel({
		 loop:true,
		 singleItem:true,
		 navigation : true,
		 items:1,
		  dots:true,
		  autoplay:true,
	});

	var $addcart_items = $('.addcart');
	$addcart_items.each(function(){
		var that = $(this);
		that.bind('click', function(){
			var $pid = that.data('pid');			
			//window.alert($pid);
			 $.ajax({
			  type: "POST",
			  url: "functions/fun.add_to_cart.php",
			  data:"pid="+$pid,
			  success: function(data){
			      $('.count').html(data);
			  }
			});
		});
	});


	var $qty = $('.qty');
	$qty.each(function(){
		var that = $(this);
		that.bind('keyup mouseup', function(){
			var $qt = that.data('qt');	
			var price = $("#pri_"+$qt).val();
			var qty = $("#"+$qt).val();
			var total=0;
			 total = price*qty;
			 
			//window.alert(total);
			

			if(isNaN(total)){
             //alert("insert a number");
             total=0;
             }else{
           // $(".tot").remove();
			//$(".total").append("<span class='tot'>"+n+"</span>");
			document.querySelector('.total').innerHTML =total;}


		});
	});







});