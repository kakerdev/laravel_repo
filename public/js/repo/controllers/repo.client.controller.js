angular.module('repoModule').controller('repoCtrl', function ($scope, $rootScope ,$stateParams, Upload, AuthFactory, RepoFactory) {
    $rootScope.$emit("repoCtrl", function(){
        $scope.getRepoUser();
    });
    $scope.getRepoUser = function () {
        RepoFactory.getRepoUser().then(function (res) {
            console.log(res);
            $scope.repoUser = res;
        })
    }
    $scope.getImgByRepo = function () {
        RepoFactory.getImgByRepo($stateParams.id_repo).then(function (res) {
            console.log(res)
            $scope.imgByRepo = res;
        });
    }
})