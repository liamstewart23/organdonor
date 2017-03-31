console.log("%c      ", "font-size:100px;background-image:url(https://goo.gl/IFDpHP); background-size:contain; background-repeat:no-repeat;");
console.log("BecauseADonor JS started!")

var app = angular.module('BecauseADonor', ['ngRoute']); //declare app + import ngRoute
var siteTitle = "Because a Donor - Organ Donation Awareness | Ontario Canada"; //Site Title
var once = 0; //run header animation once
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) { //Config routes
    $routeProvider
        .when("/", { templateUrl: "partials/home.php", controller: "HomeCtrl" }) //Home Page
        .when("/learn", { templateUrl: "partials/learn.php", controller: "LearnCtrl" }) //Learn Page
        .when("/statistics", { templateUrl: "partials/learn-stats.php", controller: "StatsCtrl" }) //Learn Statistics Page
        .when("/myths-vs-facts", { templateUrl: "partials/learn-myths-v-facts.php", controller: "MVFCtrl" }) //Learn Myths vs. Facts Page
        .when("/stories", { templateUrl: "partials/stories.php", controller: "StoriesCtrl" }) //Stories Page
        .when('/stories/:story_id', { //Story Page
            templateUrl: function(attrs) {
                return 'partials/see-story.php?story_id=' + attrs.story_id;
            },
            controller: "StoryCtrl"
        })
        .when("/share-your-story", { templateUrl: "partials/story-form.php", controller: "SubmitStoryCtrl" }) //Submit your Story Page
        .when("/share", { templateUrl: "partials/share.php", controller: "ShareCtrl" }) //Share Page
        .when("/contact", { templateUrl: "partials/contact.php", controller: "ContactCtrl" }) //Contact Page

    .otherwise({ redirectTo: '/' });
    //$locationProvider.html5Mode(true);
}]);

//fix scroll on view change
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

//Oudated browser notice
(function(u) {
    var s = document.createElement('script');
    s.async = true;
    s.src = u;
    var b = document.getElementsByTagName('script')[0];
    b.parentNode.insertBefore(s, b);
})('//updatemybrowser.org/umb.js');


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
    footerLoad();
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
            $('#content1').css({ 'height': (($(window).height())) + 'px' });
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
            $('#content1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconCheckmark').css({ 'height': (($(window).height() / 8)) + 'px' });
            $('#iconBook').css({ 'height': (($(window).height() / 8)) + 'px' });
            $('#iconCheckmark').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#iconBook').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#iconHeart').css({ 'height': (($(window).height() / 6)) + 'px' });
        });

        // Linking changes
        var btnHomeLearn = document.querySelector("#btnHomeLearn"),
            btnHomeStories = document.querySelector("#btnHomeStories"),
            btnHomeShare = document.querySelector("#btnHomeShare");
        btnHomeLearn.href = "#/learn";
        btnHomeStories.href = "#/stories";
        btnHomeShare.href = "#/share";
        //End Linking changes
        footerLoad();
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
            $('.statsIcon').css({ 'height': (($(window).height() / 4)) + 'px' });
            $('#myths').css({ 'height': (($(window).height() / 1.5)) + 'px' });
            $('#iconMyth').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconMyth').css({ 'margin-top': (($(window).height() / 12)) + 'px' });

        });
        $(window).resize(function() {
            //Initial Browser height for banners sizing
            $('#bannerLearn1').css({ 'height': (($(window).height())) + 'px' });
            $('#iconLearn').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconLearn').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('.statsIcon').css({ 'height': (($(window).height() / 4)) + 'px' });
            $('#myths').css({ 'height': (($(window).height() / 1.5)) + 'px' });
            $('#iconMyth').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconMyth').css({ 'margin-top': (($(window).height() / 12)) + 'px' });
        });

        //-- add function to output json of all results from tbl_myths_facts

        // // AJAX FOR SEARCH FUNCTION MYTHS VS FACTS
        // var searchbtn = document.querySelector('#searchbtn');
        // var searchtext = document.querySelector('#searchtext');


        // function makeRequest(url,e){
        //     console.log('clicked');
        //     httpRequest = new XMLHttpRequest();

        //     if(!httpRequest){ // Checking to make sure the browser isn't too old    
        //         alert('Sorry, your browser is too old to access this content.');
        //         return false; // This exits out of a function, will execute the next line after function is closed
        //     }

        //     httpRequest.onreadystatechange = searchResults;               
        //     httpRequest.open('GET', 'includes/search-query.php?search='+searchtext); //Passing in a url through a get protocol
        //     httpRequest.send();
        // }

        // function searchResults(url,e){
        //     if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
        //         var sResult = JSON.parse(httpRequest.responseText);
        //         //json output object array here for search results

        //     }
        // }

        // searchbtn.addEventListener('click', makeRequest, false); //start ajax search on search click



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
        btnStoriesFooter.href = "#/share";
        storyLink.href = "#story/{$row['story_id']}";
        //End Linking changes
        footerLoad();
    });
}]);
//Controller for Story
app.controller('StoryCtrl', [function() {
    angular.element(document).ready(function() {
        var person = "Sarah"; // Lauren I was thinking we could use ajax to pull the first name of story for title tag.
        document.title = " Story - " + siteTitle;

        var story = $('#story');
        TweenMax.to(story, .5, { opacity: 1 });

        $('#story').css({ 'height': (($(window).height() * 2)) + 'px' });

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
            $('#shareStoryBanner').css({ 'height': (($(window).height() / 1.5)) + 'px' });
            $('#iconShare').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconShare').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#iconShare2').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconShare2').css({ 'margin-top': (($(window).height() / 12)) + 'px' });
            $('#twitter h4').css({ 'margin-top': (($(window).height() / 6)) + 'px' });
            $('#facebook h4').css({ 'margin-top': (($(window).height() / 6)) + 'px' });
        });
        $(window).resize(function() {
            //Banner sizing adjustments based on resize
            $('#bannerShare1').css({ 'height': (($(window).height())) + 'px' });
            $('#twitter').css({ 'height': (($(window).height())) + 'px' });
            $('#facebook').css({ 'height': (($(window).height())) + 'px' });
            $('#shareStoryBanner').css({ 'height': (($(window).height() / 1.5)) + 'px' });
            $('#iconShare').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconShare').css({ 'margin-top': (($(window).height() / 4)) + 'px' });
            $('#iconShare2').css({ 'height': (($(window).height() / 6)) + 'px' });
            $('#iconShare2').css({ 'margin-top': (($(window).height() / 12)) + 'px' });
            $('#twitter h4').css({ 'margin-top': (($(window).height() / 6)) + 'px' });
            $('#facebook h4').css({ 'margin-top': (($(window).height() / 6)) + 'px' });
        });

        //Premade tweets
        var tweets = [{
            tweet: '"Today I became an organ donor. Join me! #becauseadonor"',
            link: "https://twitter.com/intent/tweet?url=http://becauseadonor.ca&text=Today%20I%20became%20an%20organ%20donor.%20Join%20me!%20%23becauseadonor"
        }, {
            tweet: '"Everyday is a new adventure! #becauseadonor"',
            link: "https://twitter.com/intent/tweet?url=http://becauseadonor.ca&text=Everyday%20is%20a%20new%20adventure!%20%23becauseadonor"
        }, {
            tweet: '"I\'m alive today #becauseadonor and cherish every second! Help others like me in need and register today!"',
            link: "https://twitter.com/intent/tweet?url=http://becauseadonor.ca&text=I%27m%20alive%20today%20%23becauseadonor%20and%20cherish%20every%20second!%20Help%20others%20like%20me%20in%20need%20and%20register%20today!"
        }, {
            tweet: '"I visited becauseadonor.ca and was inspired to register as an organ donor today. Join the movement today #becauseadonor"',
            link: "https://twitter.com/intent/tweet?text=I%20visited%20http://becauseadonor.ca%20and%20was%20inspired%20to%20register%20as%20an%20organ%20donor%20today.%20Join%20the%20movement%20today%20%23becauseadonor"
        }];

        //loop to switch tweet text and href
        setInterval(function() {
            var i = Math.round((Math.random()) * tweets.length);
            if (i == tweets.length) --i;
            $("#tweet").html(tweets[i].tweet);
            $("#tweetLink").attr("href", tweets[i].link);
        }, 8 * 1000);

        //end premade tweets



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
