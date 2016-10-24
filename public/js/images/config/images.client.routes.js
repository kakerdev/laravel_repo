angular.module('imagesModule').config(['$stateProvider', '$urlRouterProvider',
    function ($stateProvider, $urlRouterProvider) {
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
    if(Auth) {
        $urlRouterProvider.otherwise('/images');
    } else {
        $urlRouterProvider.otherwise('/home');
    }
    $urlRouterProvider.otherwise('/home');


    $stateProvider
        .state('images', {
            url: '/images',
            templateUrl: 'js/images/views/images.client.view.html',
            controller: 'imagesCtrl',
            resolve:Auth
        })
        .state('addImg', {
            url: '/addImg',
            templateUrl: 'js/images/views/addPhotos.client.view.html',
            controller: 'imagesCtrl',
            resolve:Auth
        })
        .state('showImg', {
            url: '/images/image/:id',
            templateUrl: 'js/images/views/image.client.view.html',
            controller: 'imagesCtrl',
            resolve: Auth
        })
}])