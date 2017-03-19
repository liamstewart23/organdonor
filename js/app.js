console.log("%c      ", "font-size:100px;background-image:url(https://goo.gl/IFDpHP); background-size:contain; background-repeat:no-repeat;");
console.log("BecauseADonor JS started!")

var app = angular.module('BecauseADonor', ['ngRoute']); //declare app + import ngRoute
var siteTitle = "Because a Donor - Organ Donation Awareness | Ontario Canada"; //Site Title
var once = 0; //run menu + logo animation once on homepage
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) { //Config routes
    $routeProvider
        .when("/", { templateUrl: "partials/home.php", controller: "HomeCtrl" }) //Home Page
        .when("/learn", { templateUrl: "partials/learn.php", controller: "LearnCtrl" }) //Learn Page
        .when("/stories", { templateUrl: "partials/stories.php", controller: "StoriesCtrl" }) //Stories Page
        .when('/story/:story_id', { //Story Page
            templateUrl: function(attrs) {
                return 'includes/story.php?story_id=' + attrs.story_id;
            },
            controller: "StoryCtrl"
        })
        .when("/share", { templateUrl: "partials/share.php", controller: "ShareCtrl" }) //Share Page
        .when("/contact", { templateUrl: "partials/contact.php", controller: "ContactCtrl" }) //Contact Page

    .otherwise({ redirectTo: '/' });
    //$locationProvider.html5Mode(true);
}]);

// JS is enabled! Switch links for footer and nav
var logo = document.querySelector(".navbar-brand");
var logoFooter = document.querySelector("#logoFooter");
var menuHome = document.querySelector("#menuHome");
var footerHome = document.querySelector("#footerHome");
var menuLearn = document.querySelector("#menuLearn");
var footerLearn = document.querySelector("#footerLearn");
var menuStories = document.querySelector("#menuStories");
var footerStories = document.querySelector("#footerStories");
var menuShare = document.querySelector("#menuShare");
var footerShare = document.querySelector("#footerShare");
var footerContact = document.querySelector("#footerContact");
// var menuLang = document.querySelector(".menuLang");

logo.href = "#/";
logoFooter.href = "#/";
menuHome.href = "#/";

menuLearn.href = "#/learn";
footerLearn.href = "#/learn";

menuStories.href = "#/stories";
footerStories.href = "#/stories";

menuShare.href = "#/share";
footerShare.href = "#/share";

footerContact.href = "#/contact";

// footerContact.style.display = "block";

// end js enabled link switching for footer and nav


// Force closes mobile menu when menu item is clicked
var navMain = $(".navbar-collapse");
navMain.on("click", "a:not([data-toggle])", null, function() {
    navMain.collapse('hide');
});

var navbar = $('.navbar');
var footer = $('footer');
if (once === 0) { // nav and footer animation once
    TweenMax.to(navbar, .5, {opacity:1});
    TweenMax.to(footer, 1, {opacity:1});
    once++;
}

//Controller for Home
app.controller('HomeCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = siteTitle;

        var home = $('#home');
        TweenMax.to(home, .5, { opacity: 1 });

        $(document).ready(function() { //Initial Browser height for banners sizing
            $('#bannerHome1').css({ 'height': (($(window).height() - 50)) + 'px' });
            $('#bannerHome2').css({ 'height': (($(window).height() - 50)) + 'px' });
            $('#bannerHome3').css({ 'height': (($(window).height() / 2.5)) + 'px' });
            $('#bannerHome4').css({ 'height': (($(window).height() / 2.5)) + 'px' });
            $('#bannerHome3').css({ 'padding-top': (($(window).height() / 15)) + 'px' });
            $('#bannerHome4').css({ 'padding-top': (($(window).height() / 15)) + 'px' });
            $('.subBannerBtn').css({ 'margin-top': (($(window).height() / 18)) + 'px' });
            $('#iconCheckmark').css({ 'height': (($(window).height() / 8)) + 'px' });
            $('#iconBook').css({ 'height': (($(window).height() / 8)) + 'px' });
            $('#iconCheckmark').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#iconBook').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#iconHeart').css({ 'height': (($(window).height() / 6)) + 'px' });
        });
        $(window).resize(function() { //Banner sizing adjustments based on resize
            $('#bannerHome1').css({ 'height': (($(window).height() - 50)) + 'px' });
            $('#bannerHome2').css({ 'height': (($(window).height() - 50)) + 'px' });
            $('#bannerHome3').css({ 'height': (($(window).height() / 2.5)) + 'px' });
            $('#bannerHome4').css({ 'height': (($(window).height() / 2.5)) + 'px' });
            $('#bannerHome3').css({ 'padding-top': (($(window).height() / 15)) + 'px' });
            $('#bannerHome4').css({ 'padding-top': (($(window).height() / 15)) + 'px' });
            $('.subBannerBtn').css({ 'margin-top': (($(window).height() / 18)) + 'px' });
            $('#iconCheckmark').css({ 'height': (($(window).height() / 8)) + 'px' });
            $('#iconBook').css({ 'height': (($(window).height() / 8)) + 'px' });
            $('#iconCheckmark').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#iconBook').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#iconHeart').css({ 'height': (($(window).height() / 6)) + 'px' });
        });

        // Linking changes on
        var btnHomeLearn = document.querySelector("#btnHomeLearn");
        btnHomeLearn.href = "#/learn";
        //End Linking changes

    });
}]);
//Controller for Learn
app.controller('LearnCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Learn - " + siteTitle;

        var learn = $('#learn');
        TweenMax.to(learn, .5, { opacity: 1 });

        $(document).ready(function() {
            //Initial Browser height for banners sizing
            $('#bannerLearn1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconLearn').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconLearn').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#statistics').css({ 'height': (($(window).height())) + 'px' });
            $('#icon1To8').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon3Days').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconPies').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon2Min').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#myths').css({ 'height': (($(window).height() / 1.5)) + 'px' });
            $('#iconMyth').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconMyth').css({ 'margin-top': (($(window).height() / 12)) + 'px' });

        });
        $(window).resize(function() {
            //Banner sizing adjustments based on resize
            $('#bannerLearn1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconLearn').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconLearn').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#statistics').css({ 'height': (($(window).height())) + 'px' });
            $('#icon1To8').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon3Days').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconPies').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon2Min').css({ 'height': (($(window).height() / 6)) + 'px' });
        });

        // Linking changes on
        var btnLearnStats = document.querySelector("#btnLearnStats");
        var btnLearnMyths = document.querySelector("#btnLearnMyths");
        btnLearnStats.href = "#/learn#statistics";
        btnLearnMyths.href = "#/learn#myths";
        //End Linking changes

    });
}]);
//Controller for Stories
app.controller('StoriesCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Stories - " + siteTitle;

        var stories = $('#stories');
        TweenMax.to(stories, .5, { opacity: 1 });

        $(document).ready(function() {
            //Initial Browser height for banners sizing
            $('#bannerStories1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconStories').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconStories').css({ 'margin-top': (($(window).height() / 4)) + 'px' });

            //Height of story box based on width
            var storyWidth = $('.story').width();
            $('.story .inner').css({ 'height': (storyWidth * .75) + 'px' });
        });
        $(window).resize(function() {
            //Banner sizing adjustments based on resize
            $('#bannerStories1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconStories').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconStories').css({ 'margin-top': (($(window).height() / 4)) + 'px' });

            //Height of story box based on width
            var storyWidth = $('.story').width();
            $('.story .inner').css({ 'height': (storyWidth * .75) + 'px' });
        });

    });
}]);
//Controller for Story
app.controller('StoryCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Share - " + siteTitle;

        var story = document.querySelector("#story");
        TweenMax.to(story, 0.5, { startAt: { opacity: 0, y: 200 }, opacity: 1, y: 0 });

    });
}]);
//Controller for Share
app.controller('ShareCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Share - " + siteTitle;

        var share = $('#share');
        TweenMax.to(share, .5, { opacity: 1 });

        $(document).ready(function() {
            //Initial Browser height for banners sizing
            $('#bannerShare1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconShare').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconShare').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
        });
        $(window).resize(function() {
            //Banner sizing adjustments based on resize
            $('#bannerShare1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconShare').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconShare').css({ 'margin-top': (($(window).height() / 4)) + 'px' });


        });

    });
}]);
//Controller for Contact
app.controller('ContactCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Contact - " + siteTitle;

        var contact = $('#contact');
        TweenMax.to(contact, 2, { delay: 2, opacity: 1 });

        $(document).ready(function() {
            //Initial Browser height for banners sizing
            $('#contact').css({ 'height': (($(window).height())) + 'px' });
            $('#contact form').css({ 'margin-top': (($(window).height() / 4)) + 'px' });



        });
        $(window).resize(function() {
            //Banner sizing adjustments based on resize
            $('#contact').css({ 'height': (($(window).height())) + 'px' });
            $('#contact form').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
        });

    });
}]);
