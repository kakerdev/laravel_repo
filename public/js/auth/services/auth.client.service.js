angular.module('authModule').factory('AuthFactory', function ($http, $auth , $log, $state,$q, $window, $location) {
    var signup = function (data) {
        return $http.post('api/authenticate/register', data);
    }

    var setUserData = function (data) {
        //zapisujemy dane w pamięci podręcznej
        var user = JSON.stringify(data);
        localStorage.setItem('user', user);
    }
    var getUserToken = function () {
        return localStorage.satellizer_token;
    }
    var getUserData = function () {
        return angular.fromJson(localStorage.user);
    }
    var isLoggedIn = function () {
        var user = getUserData();
        if(user != null) {
            return true;
        } else {
            return false;
        }
    }
    var currentUser = function () {
        if(isLoggedIn()==true) {
            return getUserData();
        } else {
            console.log('Brak danych użytkownika');
        }
    }
    var changeUrl = function (path) {
        var url = "http://" + $window.location.host + "/#/"+path;
        $log.log(url);
        $window.location.href = url;
        $state.transitionTo('images', null, {reload: true, notify:true});
        $window.location.reload();
    }
    var logout = function () {
        $auth.logout().then(function () {
            //usuwamy uzytkownika z pamieci podrecznej
            localStorage.removeItem('user');
            changeUrl('home');
        })
    }

    return {
        signup: signup,
        changeUrl: changeUrl,
        logout: logout,
        setUserData: setUserData,
        getUserToken: getUserToken,
        getUserData: getUserData,
        isLoggedIn: isLoggedIn,
        currentUser: currentUser,

    }
})