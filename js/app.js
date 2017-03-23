console.log("%c      ", "font-size:100px;background-image:url(https://goo.gl/IFDpHP); background-size:contain; background-repeat:no-repeat;");
console.log("BecauseADonor JS started!")

var app = angular.module('BecauseADonor', ['ngRoute']); //declare app + import ngRoute
var siteTitle = "Because a Donor - Organ Donation Awareness | Ontario Canada"; //Site Title
var once = 0; //run menu + logo animation once on homepage
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) { //Config routes
    $routeProvider
        .when("/", { templateUrl: "partials/home.php", controller: "HomeCtrl" }) //Home Page
        .when("/learn", { templateUrl: "partials/learn.php", controller: "LearnCtrl" }) //Learn Page
        .when("/statistics", { templateUrl: "partials/learn-stats.php", controller: "StatsCtrl" }) //Learn Statistics Page
        .when("/myths-vs-facts", { templateUrl: "partials/learn-myths-v-facts.php", controller: "MVFCtrl" }) //Learn Myths vs. Facts Page
        .when("/stories", { templateUrl: "partials/stories.php", controller: "StoriesCtrl" }) //Stories Page
        .when('/story/:story_id', { //Story Page
            templateUrl: function(attrs) {
                return 'includes/story.php?story_id=' + attrs.story_id;
            },
            controller: "StoryCtrl"
        })
        .when("/share-your-story", { templateUrl: "partials/story-form.php", controller: "SubmitStoryCtrl" }) //Submit your Story Page
        .when("/share", { templateUrl: "partials/share.php", controller: "ShareCtrl" }) //Share Page
        .when("/contact", { templateUrl: "partials/contact.php", controller: "ContactCtrl" }) //Contact Page

    .otherwise({ redirectTo: '/' });
    //$locationProvider.html5Mode(true);
}]);

app.run(function($rootScope, $window) {
    $rootScope.$on('$routeChangeSuccess', function() {
        var interval = setInterval(function() {
            if (document.readyState == 'complete') {
                $window.scrollTo(0, 0);
                clearInterval(interval);
            }
        }, 1);
    });
});

// JS is enabled! Switch links for footer and nav
var logo = document.querySelector(".navbar-brand");
var logoFooter = document.querySelector("#logoFooter");
var menuHome = document.querySelector("#menuHome");
var menuFooterHome = document.querySelector(".menuHome");
var menuLearn = document.querySelector("#menuLearn");
var footerLearn = document.querySelector("#footerLearn");
var menuStories = document.querySelector("#menuStories");
var footerStories = document.querySelector("#footerStories");
var menuShare = document.querySelector("#menuShare");
var footerShare = document.querySelector("#footerShare");
var footerContact = document.querySelector("#footerContact");

logo.href = "#/";
logoFooter.href = "#/";
menuHome.href = "#/";
menuFooterHome.href = "#/";

menuLearn.href = "#/learn";
footerLearn.href = "#/learn";

menuStories.href = "#/stories";
footerStories.href = "#/stories";

menuShare.href = "#/share";
footerShare.href = "#/share";

footerContact.href = "#/contact";

// end js enabled link switching for footer and nav


// Force closes mobile menu when menu item is clicked
var navMain = $(".navbar-collapse");
navMain.on("click", "a:not([data-toggle])", null, function() {
    navMain.collapse('hide');
});

var navbar = document.querySelector('.navbar');
if (once === 0) { // nav and footer animation once
    TweenMax.to(navbar, .5, { opacity: 1 });
    once++;
}

function footerLoad() {
    var footer = document.querySelector('footer');
    TweenMax.to(footer, .5, { opacity: 1 });
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

        // Linking changes
        var btnHomeLearn = document.querySelector("#btnHomeLearn");
        btnHomeLearn.href = "#/learn";
        //End Linking changes
        footerLoad();
    });
}]);
//Controller for Learn
app.controller('LearnCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Learn - " + siteTitle;
        $('footer').css({ 'display':'none' });
        var learn = $('#learn');
        TweenMax.to(learn, .5, { opacity: 1 });
        // TweenMax.to(window, 2, {scrollTo:"#someID"}); for Learn Page Sections

        $(document).ready(function() {
            //Initial Browser height for banners sizing
            $('#bannerLearn1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconLearn').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconLearn').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#icon1To8').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon3Days').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconPies').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon2Min').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#myths').css({ 'height': (($(window).height() / 1.5)) + 'px' });
            $('#iconMyth').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconMyth').css({ 'margin-top': (($(window).height() / 12)) + 'px' });

        });
        $(window).resize(function() {
            //Initial Browser height for banners sizing
            $('#bannerLearn1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconLearn').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconLearn').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#icon1To8').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon3Days').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconPies').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon2Min').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#myths').css({ 'height': (($(window).height() / 1.5)) + 'px' });
            $('#iconMyth').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconMyth').css({ 'margin-top': (($(window).height() / 12)) + 'px' });

        });

        // Linking changes on
        var btnLearnStats = document.querySelector("#btnLearnStats");
        var btnLearnMyths = document.querySelector("#btnLearnMyths");
        btnLearnStats.href = "#/statistics";
        btnLearnMyths.href = "#/myths-vs-facts";
        //End Linking changes
        footerLoad();
    });
}]);
//Controller for Learn Statistics Page
app.controller('StatsCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Statistics - " + siteTitle;
        $('footer').css({ 'display':'block' });
        var stats = $('#stats');
        TweenMax.to(stats, 1.5, { opacity: 1 });
        // TweenMax.to(window, 2, {scrollTo:"#someID"}); for Learn Page Sections

        $(document).ready(function() {
            //Initial Browser height for banners sizing
            $('#icon1To8').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon3Days').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconPies').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon2Min').css({ 'height': (($(window).height() / 6)) + 'px' });

        });
        $(window).resize(function() {
            //Initial Browser height for banners sizing
            $('#icon1To8').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon3Days').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconPies').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#icon2Min').css({ 'height': (($(window).height() / 6)) + 'px' });
        });

        // Linking changes on
        // var btnLearnStats = document.querySelector("#btnLearnStats");
        // var btnLearnMyths = document.querySelector("#btnLearnMyths");
        // btnLearnStats.href = "#/learn#statistics";
        // btnLearnMyths.href = "#/learn#myths";
        //End Linking changes
        footerLoad();
    });
}]);
//Controller for Learn Myths vs Facts Page
app.controller('MVFCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Statistics - " + siteTitle;
        $('footer').css({ 'display':'block' });
        var mvf = $('#mvf');
        TweenMax.to(mvf, 1.5, { opacity: 1 });
        // TweenMax.to(window, 2, {scrollTo:"#someID"}); for Learn Page Sections

        $(document).ready(function() {
            //Initial Browser height for banners sizing
            $('#myths').css({ 'height': (($(window).height() / 1.4)) + 'px' });
            $('#iconMyth').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconMyth').css({ 'margin-top': (($(window).height() / 6)) + 'px' });

        });
        $(window).resize(function() {
            //Initial Browser height for banners sizing
            $('#myths').css({ 'height': (($(window).height() / 1.5)) + 'px' });
            $('#iconMyth').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconMyth').css({ 'margin-top': (($(window).height() / 12)) + 'px' });
        });

        // Linking changes on
        // var btnLearnStats = document.querySelector("#btnLearnStats");
        // var btnLearnMyths = document.querySelector("#btnLearnMyths");
        // btnLearnStats.href = "#/learn#statistics";
        // btnLearnMyths.href = "#/learn#myths";
        //End Linking changes
        footerLoad();
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
            $('.story .inner').css({ 'height': (storyWidth * .6) + 'px' });
        });
        $(window).resize(function() {
            //Banner sizing adjustments based on resize
            $('#bannerStories1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconStories').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconStories').css({ 'margin-top': (($(window).height() / 4)) + 'px' });

            //Height of story box based on width
            var storyWidth = $('.story').width();
            $('.story .inner').css({ 'height': (storyWidth * .6) + 'px' });
        });

        // Linking changes on
        var btnStoriesFooter = document.querySelector("#btnStoriesFooter");
        btnStoriesFooter.href = "#/share-your-story";
        //End Linking changes
        footerLoad();
    });
}]);
//Controller for Story
app.controller('StoryCtrl', [function() {
    angular.element(document).ready(function() {
        var person = "Sarah"; // Lauren I was thinking we could use ajax to pull the first name of story for title tag.
        document.title = person + "'s story' - " + siteTitle;

        var story = document.querySelector("#story");
        TweenMax.to(story, 0.5, { startAt: { opacity: 0, y: 200 }, opacity: 1, y: 0 });
        footerLoad();
    });
}]);
//Controller for Submit Story
app.controller('SubmitStoryCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Share your Story - " + siteTitle;

        var story = document.querySelector("#submitstory");
        TweenMax.to(submitstory, 0.5, { startAt: { opacity: 0, y: 200 }, opacity: 1, y: 0 });

        $(document).ready(function() {
            //Initial Browser height for banners sizing
            $('#submitstory').css({ 'height': (($(window).height())) + 'px' });
            $('#submitstory form').css({ 'margin-top': (($(window).height() / 4)) + 'px' });

        });
        $(window).resize(function() {
            //Banner sizing adjustments based on resize
            $('#submitstory').css({ 'height': (($(window).height())) + 'px' });
            $('#submitstory form').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
        });
        footerLoad();
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
            $('#twitter').css({ 'height': (($(window).height())) + 'px' });
            $('#facebook').css({ 'height': (($(window).height())) + 'px' });
            $('#iconShare').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconShare').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#twitter h4').css({ 'margin-top': (($(window).height() / 6)) + 'px' });
            $('#facebook h4').css({ 'margin-top': (($(window).height() / 6)) + 'px' });
        });
        $(window).resize(function() {
            //Banner sizing adjustments based on resize
            $('#bannerShare1').css({ 'height': (($(window).height())) + 'px' });
            $('#twitter').css({ 'height': (($(window).height())) + 'px' });
            $('#facebook').css({ 'height': (($(window).height())) + 'px' });
            $('#iconShare').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconShare').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#twitter h4').css({ 'margin-top': (($(window).height() / 6)) + 'px' });
            $('#facebook h4').css({ 'margin-top': (($(window).height() / 6)) + 'px' });

        });
        footerLoad();
    });
}]);
//Controller for Contact
app.controller('ContactCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Contact - " + siteTitle;

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
        footerLoad();
    });
}]);