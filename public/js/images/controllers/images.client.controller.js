angular.module('imagesModule').controller('imagesCtrl',
    function ($scope,$rootScope,$location, $stateParams, $http,$window, customizationFactory,AuthFactory, RepoFactory, Upload) {
    // $scope.getRepoUser = function () {
    //     //odwołanie do kontrollera repoCtrl
    //     $rootScope.$on("repoCtrl", {});
    // }
    //na sztywno do poprawy szukamy folderow do wyboru
    $scope.getRepoUser = function () {
        RepoFactory.getRepoUser().then(function (res) {
            $scope.repoUser = res;
        })
    }
    //!!!!!!!!!!!!!!!!!

    //pobierz wszystkie zdjęcia użtkownika
    $scope.getAll = function () {
        $http.get('api/images/showAll').then(function (res) {
            console.log('getImg');
            if(res.data.st == 404) {
                $rootScope.messages = res.data;
            } else {
                $scope.images = res;
            }
        })
    }
    $scope.findOne = function () {
        $http.get('api/images/image/'+$stateParams.id).then(function (res) {
             $scope.image = res.data;
        });
    }

    //dodajemy zdjęcia do repozytorium
    $scope.uploadImg = function (files) {

        if(files && files.length) {
            if(this.newFolder != null) {
                var newFolder = this.newFolder
            } else {
                var newFolder = 'glowny'
            }
            var dataFiles = {
                title: this.title,
                description: this.description,
                repoName: ($scope.selectFolder) ? $scope.selectFolder : newFolder
            }
            console.log(dataFiles);

            //var user = AuthFactory.getUserToken();
            for(var i=0;i<files.length; i++) {
                console.log(files[i]);
                Upload.upload({
                    url: 'api/images/add',
                    file: files[i],
                    data: {
                        dataFile: dataFiles,
                    }
                }).then(function (res) {
                    $location.path('/images');
                    //$rootScope.messages = res.data;
                })
            }
        }
    }

    $scope.update = function (id) {
        var data = {
            title: this.img.title,
            repoID: this.selectFolder,
            description: this.img.description
        }
        $http.put('api/images/'+id, data).then(function (res) {
            console.log(res);
        })
    }

    //usuniecie zdjecia z servera
    $scope.destroy = function (id) {
        customizationFactory.destoryImg(id).then(function (res) {
            // if(res.data.st == 200) {
            //     $rootScope.messages = res.data;
            //     $scope.getAll();
            // }
            $scope.getAll();

        })
    }

    //usunięcie jednego zdjecia z podglądu addPhotos
    $scope.remove = function(id) {
        for(var i=0; i < $scope.files.length; i++) {
            if($scope.files[i] == id) {
                $scope.files.splice(i, 1);
                break;
            }
        }
    }
});