angular.module('repoModule').config(function ($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/home');
    $stateProvider
        .state('allRepo', {
            url: '/allRepo',
            templateUrl: 'js/repo/views/showRepo.client.view.html',
            controller: 'repoCtrl'
        })
        .state('showRepo', {
            url: '/showRepo/:id_repo',
            templateUrl: 'js/repo/views/imagesInRepo.client.view.html',
            controller: 'repoCtrl'
        })


})