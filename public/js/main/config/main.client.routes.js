angular.module('mainModule').config(function ($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/home');

    $stateProvider
        .state('home', {
            url: '/home',
            templateUrl: 'js/main/views/main.client.view.html',
            controller: 'mainCtrl'
        })
})