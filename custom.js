// When the document is loaded and ready
jQuery(document).ready(function() {

	// Save the navbar to a variable
	var nav = jQuery('nav');
	// Save the content section to a variable
	var content = jQuery('section.content div.content');

	// Create a reusable function to update our content.
	updateContent = function(href) {
		// Perform AJAX GET request
		jQuery.ajax({
			// URL
			url: 'http://localhost' + href,
			// METHOD
			method: 'GET',
			// CACHE
			cache: false,
			// Function to execute upon successful request completion
			success: function(data) {
				
				// Fade out the content
				content.fadeOut('fast', function() {
					
					// Replace the content with the data we fetched
					content.html( jQuery("section.content div.content", data) );
					// Fade in the content section
					content.fadeIn('fast');

				}); // END CONTENT FADE OUT CALLABLE FUNCTION

			} // END SUCCESS FUNCTION
		}); // END AJAX REQUEST
	}

	// When user goes back/forward
	jQuery(window).on('popstate', function() {
		
		// Update content with the content from the location pathname of the page in the historic timeline
		updateContent(location.pathname);

	}); // END USER GOES BACK/FORWARD

	// When a link in the navbar is clicked
	nav.find('a').on('click', function(event) {

		// Save the link object to a variable
		var link = jQuery(this);
		// Save the link's href attribute (URL/destination) to a variable
		var href = link.attr('href');

		// Update the URL in the browser's address bar and its historic timeline
		history.pushState(null, null, href);

		// Update the content from the location of the navbar link that was clicked
		updateContent(href);

		// Prevent the browser's default action so page doesn't reload/refresh
		event.preventDefault();

	});

});