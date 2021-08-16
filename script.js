// SideMenu active state toggle
    
    jQuery(document).ready(function(){
	jQuery(".nav a").click(function(){
		jQuery(".nav a.active").removeClass("active");
		jQuery(this).addClass("active")
	})
});

// Middle content section switching


jQuery(document).ready(function(){
	jQuery(".middle-nav a").click(function(){
		jQuery(".middle-nav a.active").removeClass("active");
		jQuery(this).addClass("active")
	})
});

// Middle tabs function

jQuery( function() {
    jQuery( "#tabs" ).tabs();
  } );