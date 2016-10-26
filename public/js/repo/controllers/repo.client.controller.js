angular.module('repoModule').controller('repoCtrl', function ($scope, $rootScope ,$stateParams, Upload,customizationFactory, AuthFactory, RepoFactory) {
    $rootScope.$emit("repoCtrl", function(){
        $scope.getRepoUser();
    });
    $scope.edit = false;
    $scope.getRepoUser = function () {
        RepoFactory.getRepoUser().then(function (res) {
            if(res.data.status == false) {
                $scope.error = res.data.message;
            } else {
                $scope.repoUser = res;
            }
        })
    }
    $scope.getImgByRepo = function () {
        RepoFactory.getImgByRepo($stateParams.id_repo).then(function (res) {
            console.log(res);
            if(res.data.status == false) {
                $scope.error = res.data.message;
            } else {
                $scope.imgByRepo = res;
            }
        });
    }
    $scope.removeImg = function (id) {
        customizationFactory.destoryImg(id).then(function (res) {
            $scope.getImgByRepo();
        })
    }
    $scope.update = function (id) {
        var data={
            title: this.f.title
        }
        RepoFactory.update(id, data).then(function (res) {
            console.log(res);
        })
    }
    $scope.destroy = function (id) {
        RepoFactory.destroy(id).then(function (res) {
            $scope.getRepoUser();
        })
    }
})