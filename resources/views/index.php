<!DOCTYPE html>
<html lang="pl"  xmlns:ng="http://angularjs.org">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Repo App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- jQuery, bootstrap -->
    <script src="lib/jquery/dist/jquery.min.js"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- angular loading bar -->
    <link rel='stylesheet' href='lib/angular-loading-bar/build/loading-bar.min.css' type='text/css' media='all' />

</head>
<body ng-controller="indexCtrl">

<div class="wrapper">

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Repo zdjęć</a>
                </div>
                <ul class="nav navbar-nav">
                    <li ui-sref-active="active" ng-if="!isLoggedIn"><a ui-sref="home">Home</a></li>
                    <li ui-sref-active="active" ng-if="isLoggedIn"><a ui-sref="images">Home</a></li>

                </ul>
                <ul class="nav navbar-nav navbar" ng-if="!isLoggedIn">
                    <li ui-sref-active="active" ng-if="!isLoggedIn"><a ui-sref="signin">Zaloguj się</a></li>
                    <li ui-sref-active="active" ng-if="!isLoggedIn"><a ui-sref="signup">Zarejestruj się</a></li>
                </ul>
                <ul class="nav navbar-nav navbar" ng-if="isLoggedIn">
                    <li ui-sref-active="active" ng-if="isLoggedIn"><a ui-sref="addImg">Dodaj Zdjęcia</a></li>
                    <li ui-sref-active="active" ng-if="isLoggedIn"><a ui-sref="allRepo">Przeglądaj Galerie</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" ng-if="isLoggedIn">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{currentUser.email}}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#/settings">Ustawienia</a></li>
                            <li role="separator" class="divider"></li>
                            <li ng-click="logout()"><a href="#">wyloguj się</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="alert alert-success" ng-show="messages.s == 200 || messages.s == 400 || messages.s == 404" role="alert">
        {{messages.m}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div ui-view=""></div>
</div>



<!-- JS -->
<script src="lib/angular/angular.min.js"></script>
<script src="lib/angular-ui-router/release/angular-ui-router.min.js"></script>
<script src="lib/satellizer/dist/satellizer.min.js"></script>
<script src="lib/ng-file-upload/ng-file-upload-shim.min.js"></script>
<script src="lib/ng-file-upload/ng-file-upload.min.js"></script>
<script type='text/javascript' src='lib/angular-loading-bar/build/loading-bar.min.js'></script>



<!-- main module -->
<script src="js/main/main.client.module.js"></script>
<script src="js/main/controllers/main.client.controller.js"></script>
<script src="js/main/config/main.client.routes.js"></script>


<!-- auth module -->
<script src="js/auth/auth.client.module.js"></script>
<script src="js/auth/services/auth.client.service.js"></script>
<script src="js/auth/controllers/auth.client.controller.js"></script>
<script src="js/auth/config/auth.client.routes.js"></script>

<!-- users module -->
<script src="js/users/users.client.module.js"></script>
<script src="js/users/controllers/users.client.controller.js"></script>
<script src="js/users/config/users.client.routes.js"></script>

<!-- repo module -->
<script src="js/repo/repo.client.module.js"></script>
<script src="js/repo/services/repo.client.services.js"></script>
<script src="js/repo/controllers/repo.client.controller.js"></script>
<script src="js/repo/config/repo.client.routes.js"></script>

<!-- images module -->
<script src="js/images/images.client.module.js"></script>
<script src="js/images/controllers/images.client.controller.js"></script>
<script src="js/images/config/images.client.routes.js"></script>


<script src="js/app.js"></script>
</body>
</html>
