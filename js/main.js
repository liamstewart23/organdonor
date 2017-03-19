(function() {
	"use strict";
	//adds becauseadonor logo to top of console on chrome
	console.log("%c      ","font-size:100px;background-image:url(https://goo.gl/IFDpHP); background-size:contain; background-repeat:no-repeat;");
	console.log("BecauseADonor JS started!")
// JS is enabled! Switch links
	var logo = document.querySelector(".navbar-brand");
	var logoFooter = document.querySelector("#logoFooter");
	var menuHome = document.querySelector("#menuHome");
	var menuLearn = document.querySelector("#menuLearn");
	var menuStories = document.querySelector("#menuStories");
	var menuShare = document.querySelector("#menuShare");
	logo.href = "#/";
	logoFooter.href = "#/";
	menuHome.href = "#/";
	menuLearn.href = "#/learn";
	menuStories.href = "#/stories";
	menuShare.href = "#/share";
// end js enabled link switching

// Force closes mobile menu when menu item is clicked
	var navMain = $(".navbar-collapse");
    	navMain.on("click", "a:not([data-toggle])", null, function () {
        navMain.collapse('hide');
     });

})();