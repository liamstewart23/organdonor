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
        $('#iconCheckmark').css({'height':(($(window).height()/8))+'px'});
        $('#iconBook').css({'height':(($(window).height()/8))+'px'});
        $('#iconLightbulb').css({'height':(($(window).height()/8))+'px'});
        $('#iconCheckmark').css({'margin-top':(($(window).height()/4))+'px'});
        $('#iconBook').css({'margin-top':(($(window).height()/4))+'px'});
    });
    $(window).resize(function(){
        //Banner sizing adjustments based on resize
        $('#banner1').css({'height':(($(window).height()-50))+'px'});
        $('#banner2').css({'height':(($(window).height()-50))+'px'});
        $('#banner3').css({'height':(($(window).height()/4))+'px'});
        $('#iconCheckmark').css({'height':(($(window).height()/8))+'px'});
        $('#iconBook').css({'height':(($(window).height()/8))+'px'});
        $('#iconLightbulb').css({'height':(($(window).height()/8))+'px'});
        $('#iconCheckmark').css({'margin-top':(($(window).height()/4))+'px'});
        $('#iconBook').css({'margin-top':(($(window).height()/4))+'px'});
    });
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