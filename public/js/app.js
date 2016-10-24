var nameApp = 'repoApp';
var mainAppModule = angular.module(nameApp,
    ['ui.router', 'satellizer', 'ngFileUpload','angular-loading-bar', 'mainModule', 'authModule', 'usersModule',
        'repoModule', 'imagesModule']);
angular.element(document).ready(function () {
    angular.bootstrap(document, [nameApp]);
})
mainAppModule.run(function($rootScope, $location, $window) {
    $rootScope.$watch(function () {
            return $location.path();
        },
        function (a) {});
});
mainAppModule.controller('indexCtrl', function ($scope, AuthFactory) {
    $scope.isLoggedIn = AuthFactory.isLoggedIn();
    if($scope.isLoggedIn == true) {
        $scope.currentUser = AuthFactory.currentUser();
    }
    $scope.logout = function () {
        AuthFactory.logout();
    }
});