angular.module('repoModule').config(function ($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/home');
    // function to check the authentication //
    var Auth = ["$q", "AuthFactory", function ($q, AuthFactory, $window,$log) {
        if (AuthFactory.isLoggedIn()) {
            return true;
        } else {
            alert('brak dostępu do strony zaloguj się');
            AuthFactory.changeUrl('home');
            return $q.reject({ authenticated: false });
        }
    }];
    $stateProvider
        .state('allRepo', {
            url: '/allRepo',
            templateUrl: 'js/repo/views/showRepo.client.view.html',
            controller: 'repoCtrl',
            resolve: Auth
        })
        .state('showRepo', {
            url: '/showRepo/:id_repo',
            templateUrl: 'js/repo/views/imagesInRepo.client.view.html',
            controller: 'repoCtrl',
            resolve: Auth
        })


})