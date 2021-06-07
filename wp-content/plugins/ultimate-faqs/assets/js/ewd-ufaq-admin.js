//NEW DASHBOARD MOBILE MENU AND WIDGET TOGGLING
jQuery(document).ready(function($){
	$('#ewd-ufaq-dash-mobile-menu-open').click(function(){
		$('.ewd-ufaq-admin-header-menu .nav-tab:nth-of-type(1n+2)').toggle();
		$('#ewd-ufaq-dash-mobile-menu-up-caret').toggle();
		$('#ewd-ufaq-dash-mobile-menu-down-caret').toggle();
		return false;
	});
	$(function(){
		$(window).resize(function(){
			if($(window).width() > 800){
				$('.ewd-ufaq-admin-header-menu .nav-tab:nth-of-type(1n+2)').show();
			}
			else{
				$('.ewd-ufaq-admin-header-menu .nav-tab:nth-of-type(1n+2)').hide();
				$('#ewd-ufaq-dash-mobile-menu-up-caret').hide();
				$('#ewd-ufaq-dash-mobile-menu-down-caret').show();
			}
		}).resize();
	});	
	$('#ewd-ufaq-dashboard-support-widget-box .ewd-ufaq-dashboard-new-widget-box-top').click(function(){
		$('#ewd-ufaq-dashboard-support-widget-box .ewd-ufaq-dashboard-new-widget-box-bottom').toggle();
		$('#ewd-ufaq-dash-mobile-support-up-caret').toggle();
		$('#ewd-ufaq-dash-mobile-support-down-caret').toggle();
	});
	$('#ewd-ufaq-dashboard-optional-table .ewd-ufaq-dashboard-new-widget-box-top').click(function(){
		$('#ewd-ufaq-dashboard-optional-table .ewd-ufaq-dashboard-new-widget-box-bottom').toggle();
		$('#ewd-ufaq-dash-optional-table-up-caret').toggle();
		$('#ewd-ufaq-dash-optional-table-down-caret').toggle();
	});
});

jQuery(document).ready(function($) {

	$( '.ewd-ufaq-list' ).sortable({
		items: '.ewd-ufaq-item',
		opacity: 0.6,
		cursor: 'move',
		axis: 'y',
		update: function() {
				var order = jQuery( this ).sortable( 'serialize' ) + '&action=ewd_ufaq_update_order';
				jQuery.post( ajaxurl, order, function( response ) {} );
		}
	});
});

jQuery(document).ready(function($) {

	if ( ewd_ufaq_php_data.ordering ) { return; }

	$( 'input[name="ewd-ufaq-settings[faq-order-by]"][value="set_order"]' ).prop( 'disabled', true );
});

jQuery(document).ready(function($){

	$( '.sap-new-admin-add-button' ).on( 'click', function() {

		setTimeout( ewd_ufaq_field_added_handler, 500);
	});
});

function ewd_ufaq_field_added_handler() {

	var highest = 0;
	jQuery( '.sap-infinite-table input[data-name="id"]' ).each( function() {
		highest = Math.max( highest, this.value );
	});

	jQuery( '.sap-infinite-table  tbody tr:last-of-type span.sap-infinite-table-hidden-value' ).html( highest + 1 );
	jQuery( '.sap-infinite-table  tbody tr:last-of-type input[data-name="id"]' ).val( highest + 1 );
}