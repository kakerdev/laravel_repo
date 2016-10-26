angular.module('repoModule').factory('RepoFactory', function ($http) {
    var getRepoUser = function () {
        return $http.get('api/repository/get');
    }
    var getImgByRepo = function (id) {
        return $http.get('api/repository/repo/'+id);
    }
    var update = function (id, data) {
        return $http.post('api/repository/update/'+id, data);
    }
    var destroy = function (id) {
        return $http.delete('api/repository/destroy/'+id);
    }
    return {
        getRepoUser : getRepoUser,
        getImgByRepo: getImgByRepo,
        update: update,
        destroy: destroy
    }
})