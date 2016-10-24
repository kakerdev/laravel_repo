angular.module('usersModule').config(function ($stateProvider, $urlRouterProvider) {
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
    if(AuthFactory.isLoggedIn()) {
        $urlRouterProvider.otherwise('/images');
    } else {
        $urlRouterProvider.otherwise('/home');
    }
    $stateProvider
        .state('profile', {
            url:'/profile',
            templateUrl: 'js/users/views/userProfile.client.view.html',
            controller: 'usersCtrl',
            resolve: Auth
        })
        .state('settings', {
            url: '/settings',
            templateUrl: 'js/users/views/settings.client.view.html',
            controller: 'usersCtrl',
            resolve: Auth
        })
})