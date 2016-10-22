angular.module('repoModule').factory('RepoFactory', function ($http) {
    var getRepoUser = function () {
        return $http.get('api/repository/get');
    }
    var getImgByRepo = function ($id) {
        return $http.get('api/repository/repo/'+$id);
    }
    return {
        getRepoUser : getRepoUser,
        getImgByRepo: getImgByRepo
    }
})