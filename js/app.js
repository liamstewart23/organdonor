var app = angular.module('OrganDonor', ['ngRoute']);//declare app + import ngRoute
var siteTitle = "Organ Donor";//Site Title
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {//Config routes
  $routeProvider
    .when("/", {templateUrl: "includes/home.php",controller:"HomeCtrl"})//Home Page
    .otherwise({redirectTo: '/'});
    //$locationProvider.html5Mode(true);
}]);
//Controller for Home
app.controller('HomeCtrl', [function() {
    angular.element(document).ready(function () {
        console.log("Home is good!");
    });
}]);