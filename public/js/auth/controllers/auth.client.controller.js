angular.module('authModule').controller('authCtrl', function ($scope,$log, $auth, $state, $http,$stateParams, $window, AuthFactory) {

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
            console.log(res);
            if(res.status == false) {
                $scope.errorSignup = res.message;
            } else {
                $scope.signin(signupData.email, signupData.password);
            }
        }, function (error) {
            console.log(error.data.error);
            if(error.data.error) {
                $scope.errorSignup = error;
            } else {
                $state.go('error', {obj: error});
            }
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
            AuthFactory.changeUrl('images');
        })
    }
    $scope.errorPage = function () {
        $scope.errorData = $stateParams;
    }
    //zapomniałem hasła
    $scope.forgotPassword = function () {
        console.log(this.email);
        $http.post('/password/email', this.email).success(function (res) {
            console.log(res);
        })
    }
})