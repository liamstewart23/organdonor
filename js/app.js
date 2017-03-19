var app = angular.module('BecauseADonor', ['ngRoute']); //declare app + import ngRoute
var siteTitle = "Because a Donor - Organ Donation Awareness | Ontario Canada"; //Site Title
var once = 0; //run menu + logo animation once on homepage
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) { //Config routes
    $routeProvider
        .when("/", { templateUrl: "partials/home.php", controller: "HomeCtrl" }) //Home Page
        .when("/learn", { templateUrl: "partials/learn.php", controller: "LearnCtrl" }) //Learn Page
        .when("/stories", { templateUrl: "partials/stories.php", controller: "StoriesCtrl" }) //Stories Page
        .when("/share", { templateUrl: "partials/share.php", controller: "ShareCtrl" }) //Share Page

    .otherwise({ redirectTo: '/' });
    //$locationProvider.html5Mode(true);
}]);

var navbar = $('.navbar');
var footer = $('footer');
if (once === 0) { // nav and footer animation once
    TweenMax.to(navbar, .5, { opacity: 1 });
    TweenMax.to(footer, .5, { opacity: 1 });
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
        // var dstory = document.querySelector("#btnDiscover");
        // var sstory = document.querySelector("#btnShare");
        btnHomeLearn.href = "#/learn";
        // dstory.href = "#/stories";
        // sstory.href = "#/stories";
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
