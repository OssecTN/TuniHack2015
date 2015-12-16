
 "use strict";

angular.module("app",['ngRoute','Controllers'])

.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: 'Views/home.html',
        controller: 'homeControl'
      }).when('/Category', {
        templateUrl: 'Views/Category.html',
        controller: 'CategoryControl'
      }).when('/Category/:id', {
        templateUrl: 'Views/Category.html',
        controller: 'CategoryControl'
      }).when('/project/:id', {
        templateUrl: 'Views/project.html',
        controller: 'ProjectControl'
      }).when('/Submit', {
        templateUrl: 'Views/submit.html',
        controller: 'submitControl'
      }).when('/Contact', {
        templateUrl: 'Views/contact.html',
        controller: 'contactControl'
      }).otherwise('/');
  }])

           

