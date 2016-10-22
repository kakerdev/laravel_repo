angular.module('authModule').controller('authCtrl', function ($scope, $auth, $state, $http,$stateParams, $window, AuthFactory) {

    //rejestracja uzytkownika
    $scope.signup = function () {
        var signupData = {
            firstname: this.firstname,
            lastname: this.lastname,
            email: this.email,
            password: this.password,
            repeatPassword: this.repeatPassword
        }
        AuthFactory.signup(signupData).success(function (res) {
            //automatyczne logowanie użytkownika po rejestracji
            $scope.signin(signupData.email, signupData.password);
        })
    }

    //logowanie uzytkownika
    $scope.signin = function (email, password) {
        var signinData = {
            email: email,
            password: password
        }
        $auth.login(signinData).then(function (res) {
            return $http.get('api/authenticate/user');
            console.log(res);
        }, function (error) {
            console.log(error.data.error);
            if(error.data.error) {
                $scope.errorSignin = error;
            } else {
                $state.go('error', {obj: error});
            }
        })
        //odbieramy dane zalogowanego użytkownika
        .then(function (res) {
            AuthFactory.setUserData(res.data.user);
            $state.transitionTo('images', null, {reload: true, notify:true});
            window.location.reload();
        })
    }
    $scope.errorPage = function () {
        $scope.errorData = $stateParams;
    }
    //zapomniałem hasła
    $scope.forgotPassword = function () {
        console.log(this.email);
        $http.post('/api/forgotPassword', this.email).success(function (res) {
            console.log(res);
        })
    }
})