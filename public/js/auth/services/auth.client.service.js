angular.module('authModule').factory('AuthFactory', function ($http, $auth, $state,$q, $window, $location) {
    var signup = function (data) {
        return $http.post('api/authenticate/register', data);
    }
    var logout = function () {
        $auth.logout().then(function () {
            //usuwamy uzytkownika z pamieci podrecznej
            localStorage.removeItem('user');
            //$state.transitionTo('home', null, {reload: true, notify:true});
            $state.transitionTo('home', null, {
                reload: true, inherit: false, notify: true
            });
            $window.location.reload();
        })
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

    return {
        signup: signup,
        logout: logout,
        setUserData: setUserData,
        getUserToken: getUserToken,
        getUserData: getUserData,
        isLoggedIn: isLoggedIn,
        currentUser: currentUser,
    }
})