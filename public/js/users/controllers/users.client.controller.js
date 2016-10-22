angular.module('usersModule').controller('usersCtrl', function ($scope, $http) {
    //change password
    $scope.showForm = false;
    
    $scope.changePassword = function () {
        var changePassData = {
            oldPass: this.oldPass,
            newPass: this.newPass,
            newPass1: this.newPass1
        }
        $http.post('api/users/update', changePassData).then(function (res) {
            $scope.resChangePassword = res.data;
        })
    }

});