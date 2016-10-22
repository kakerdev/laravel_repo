angular.module('authModule').config(function ($stateProvider, $urlRouterProvider, $authProvider) {

    $authProvider.loginUrl = '/api/authenticate';

    $stateProvider
        .state('signin', {
            url: '/signin',
            templateUrl: 'js/auth/views/signin.client.view.html',
            controller: 'authCtrl'
        })
        .state('signup', {
            url: '/signup',
            templateUrl: 'js/auth/views/signup.client.view.html',
            controller: 'authCtrl'
        })
        .state('forgotPassword', {
            url: '/forgotPassword',
            templateUrl: 'js/auth/views/forgotPassword.client.view.html',
            controller: 'authCtrl'
        })
        .state('error', {
            url: '/error',
            templateUrl: 'js/auth/views/error.client.view.html',
            controller: 'authCtrl',
            params: {
                obj: null
            }
        })
});