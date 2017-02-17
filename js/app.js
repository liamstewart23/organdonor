var app = angular.module('BecauseADonor', ['ngRoute']);//declare app + import ngRoute
var siteTitle = "Because a Donor - Organ Donation Awareness | Ontario Canada";//Site Title
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {//Config routes
  $routeProvider
    .when("/", {templateUrl: "partials/home.php",controller:"HomeCtrl"})//Home Page
    .when("/learn", {templateUrl: "partials/learn.php",controller:"LearnCtrl"})//Learn Page
    .when("/stories", {templateUrl: "partials/stories.php",controller:"StoriesCtrl"})//Stories Page
    .when("/share", {templateUrl: "partials/share.php",controller:"ShareCtrl"})//Share Page
    //.when("/menu", {templateUrl: "partials/menu.php",controller:"MenuCtrl"})//Menu
    .otherwise({redirectTo: '/'});
    //$locationProvider.html5Mode(true);
}]);
//Controller for Home
app.controller('HomeCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = siteTitle;

        $(document).ready(function(){
            //Initial Browser height for banners sizing
            $('#banner1').css({'height':(($(window).height()-50))+'px'});
            $('#banner2').css({'height':(($(window).height()-50))+'px'});
            $('#banner3').css({'height':(($(window).height()/4))+'px'});
            $('#banner4').css({'height':(($(window).height()/4))+'px'});
            $('#banner5').css({'height':(($(window).height()))+'px'});
            $('#iconCheckmark').css({'height':(($(window).height()/8))+'px'});
            $('#iconBook').css({'height':(($(window).height()/8))+'px'});
            $('#iconLightbulb').css({'height':(($(window).height()/5))+'px'});
            $('#iconCommunity').css({'height':(($(window).height()/5))+'px'});
            $('#iconCheckmark').css({'margin-top':(($(window).height()/4))+'px'});
            $('#iconBook').css({'margin-top':(($(window).height()/4))+'px'});
            $('#iconLightbulb').css({'margin-top':(($(window).height()/35))+'px'});
            $('#iconCommunity').css({'margin-top':(($(window).height()/35))+'px'});
            $('#homePies').css({'height':(($(window).height()/3))+'px'});
            $('#home1to8').css({'height':(($(window).height()/3))+'px'});
            $('#home3days').css({'height':(($(window).height()/3))+'px'});
        });
        $(window).resize(function(){
            //Banner sizing adjustments based on resize
            $('#banner1').css({'height':(($(window).height()-50))+'px'});
            $('#banner2').css({'height':(($(window).height()-50))+'px'});
            $('#banner3').css({'height':(($(window).height()/4))+'px'});
            $('#banner4').css({'height':(($(window).height()/4))+'px'});
            $('#banner5').css({'height':(($(window).height()))+'px'});
            $('#iconCheckmark').css({'height':(($(window).height()/8))+'px'});
            $('#iconBook').css({'height':(($(window).height()/8))+'px'});
            $('#iconLightbulb').css({'height':(($(window).height()/5))+'px'});
            $('#iconCommunity').css({'height':(($(window).height()/5))+'px'});        
            $('#iconCheckmark').css({'margin-top':(($(window).height()/4))+'px'});
            $('#iconBook').css({'margin-top':(($(window).height()/4))+'px'});
            $('#iconLightbulb').css({'margin-top':(($(window).height()/35))+'px'});
            $('#iconCommunity').css({'margin-top':(($(window).height()/35))+'px'});
            $('#homePies').css({'height':(($(window).height()/3))+'px'});
            $('#home1to8').css({'height':(($(window).height()/3))+'px'});
            $('#home3days').css({'height':(($(window).height()/3))+'px'});
        });
        // Linking changes
        var btnHomeLearn = document.querySelector("#btnHomeLearn");
        // var dstory = document.querySelector("#btnDiscover");
        // var sstory = document.querySelector("#btnShare");
        btnHomeLearn.href = "#/learn";
        // dstory.href = "#/stories";
        // sstory.href = "#/stories";
        //End Linking changes

    //Icon Animations on Scroll
    var lightbulb = document.querySelector("#iconLightbulb");
    var lightBanner = document.querySelector("#banner3");

    var community = document.querySelector("#iconCommunity");
    var comBanner = document.querySelector("#banner4");
    var a = 0;
    var b = 0;

    //Lightbulb
    function lightbulbLoaded(e) {
        var lightbulbHover = e.currentTarget.contentDocument;
        var lightbulbIcon = lightbulbHover.querySelector("#lighticon");
        var lightbulbInd = lightbulbHover.querySelector("#lightbright");

        window.addEventListener("scroll", brighten, false);

        function brighten(scroll){
            var trigger = window.scrollY + window.innerHeight;
            if(lightBanner.offsetTop + 200 < trigger){
                a++;
                if(a===1){
                    TweenMax.to(lightbulbInd, .4, {scale: .9, transformOrigin: "50% 100%", ease:Power2.easeInOut});
                    TweenMax.to(lightbulbInd, .5, {delay: .4, scale: 1, ease:Power2.easeIn});
                }
            }
        }
    }
    //Community
    function communityLoaded(e) {
        var comHover = e.currentTarget.contentDocument;
        var comIcon = comHover.querySelector("#comHands");
        var comInd = comHover.querySelector("#heart");

        window.addEventListener("scroll", heartbeat, false);

        function heartbeat(scroll){
            var trigger = window.scrollY + window.innerHeight;
            // console.log(trigger);
            if(comBanner.offsetTop + 200 < trigger){
                console.log('trigger');
                b++;
                if(b===1){
                    TweenMax.to(comInd, .4, {scale: 1.15, transformOrigin: "50% 100%", yoyo: true, repeat: 3, ease:Power2.easeInOut});
                    TweenMax.to(comInd, .5, {delay: 1.5, scale: 1, ease:Power2.easeIn});
                }
            }
        }
    }

    lightbulb.addEventListener("load", lightbulbLoaded, false);
    community.addEventListener("load", communityLoaded, false);
    //End Icon Animations on Scroll


    });
}]);
//Controller for Learn
app.controller('LearnCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Learn - "+siteTitle;
    });
}]);
//Controller for Stories
app.controller('StoriesCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Stories - "+siteTitle;
    });
}]);
//Controller for Share
app.controller('ShareCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Share - "+siteTitle;
    });
}]);
//Controller for Menu
// app.controller('MenuCtrl', [function() {
//     angular.element(document).ready(function () {
//     	var menu = document.querySelector("#mainMenu");
//         TweenMax.to(menu, 0.5, {startAt:{opacity:0, y:-180},opacity: 1, y:0});
//     });
// }]);