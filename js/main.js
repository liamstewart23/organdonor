(function() {
	"use strict";
	//console.log("HELLO WORLD!")

// JS is enabled! Switch links
	var logo = document.querySelector(".navbar-brand");
	var menuHome = document.querySelector("#menuHome");
	var menuLearn = document.querySelector("#menuLearn");
	var menuStories = document.querySelector("#menuStories");
	var menuShare = document.querySelector("#menuShare");
	logo.href = "#/";
	menuHome.href = "#/";
	menuLearn.href = "#/learn";
	menuStories.href = "#/stories";
	menuShare.href = "#/share";

// end js enabled link switching

	var navMain = $(".navbar-collapse"); // Force closes mobile menu when item clicked
     navMain.on("click", "a:not([data-toggle])", null, function () {
         navMain.collapse('hide');
     });
     
})();