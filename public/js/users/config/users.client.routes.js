angular.module('usersModule').config(function ($stateProvider, $urlRouterProvider) {
    var Auth = ["$q", "AuthFactory", function ($q, AuthFactory) {
        if (AuthFactory.isLoggedIn()) {
            return true;
        } else {
            alert('brak dostępu do strony zaloguj się');
            return $q.reject({ authenticated: false });
        }
    }];
    if(Auth) {
        $urlRouterProvider.otherwise('/images');
    } else {
        $urlRouterProvider.otherwise('/home');
    }
    $stateProvider
        .state('profile', {
            url:'/profile',
            templateUrl: 'js/users/views/userProfile.client.view.html',
            controller: 'usersCtrl'
        })
        .state('settings', {
            url: '/settings',
            templateUrl: 'js/users/views/settings.client.view.html',
            controller: 'usersCtrl'
        })
})