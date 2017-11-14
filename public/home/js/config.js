jQuery(document).ready(function($) {
	$('.item-interested-product').hover(function() {
		console.log($(this).children('.add-cart-item-interested-product'))
		$(this).children('.add-cart-item-interested-product').css({
			display: 'block'
		});
	}, function() {
		$(this).children('.add-cart-item-interested-product').css({
			display:'none'
		});
	});
});