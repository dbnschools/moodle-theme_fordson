var moodle_default_img = 'url(\"data:image/svg+xml;base64,'

var custom_img = document.querySelector('.headerbkg .default, .headerbkg .customimage').style.backgroundImage;

var block_region_content = document.querySelector('#block-region-content');

if (block_region_content) {

	var observer = new MutationObserver(function(mutations, observer) {
	    
	    for (var i = 0; i < mutations.length; i++) {
		if (mutations[i].addedNodes.length != 0) {

		    for (var j = 0; j < mutations[i].addedNodes.length; j++) {
                        if (mutations[i].addedNodes[j].querySelectorAll) {
				var card_img = mutations[i].addedNodes[j].querySelectorAll('.dashboard-card-img, .summaryimage');

				for (var k = 0; k < card_img.length; k++) {
					if (card_img[k].style && card_img[k].style.backgroundImage.startsWith(moodle_default_img)) {
					    card_img[k].style.backgroundImage = custom_img;
					}
				}
                        }
		    }
		}

	    }

	});

	observer.observe(block_region_content, {
	    childList: true,
	    subtree: true
	});

}
var header_images = document.querySelectorAll('.course-header-image');

for (var i = 0; i < header_images.length; i++) {

        var header_image = header_images[i]; 

	if (header_image && header_image.style && header_image.style.backgroundImage.startsWith(moodle_default_img)) {

	    header_image.style.backgroundImage = custom_img;

	}

}
