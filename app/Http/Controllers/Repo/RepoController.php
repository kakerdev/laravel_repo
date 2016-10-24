<?php

namespace App\Http\Controllers\Repo;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;
//tables
use App\Repository;
use App\images;

class RepoController extends Controller
{
    private $user;
    function __construct() {
        //sprawdzamy czy mamy token zalogowanego uzytkownika
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    //znajdz * repo uzytkownika
    public function getRepoUser() {
        $galleries = Repository::where('id_account', $this->user->id)->get();
        if($galleries->count() == 0) {
            return response()->json('notFound');
        }
        return $galleries;
    }

    //tworzymy nowe repo
    public function createRepoUser($repoName) {
        $repoUser = Repository::select('id')
            ->where('title', $repoName)
            ->where('id_account', $this->user->id)
            ->get();
        if($repoUser->count() == 1) {
            $x = $repoUser[0];
        }
        if($repoUser->count() == 0 || $repoUser = null) {
            $createRepoUser = new Repository();
            $createRepoUser->title = $repoName;
            $createRepoUser->id_account = $this->user->id;
            if(!$createRepoUser->save()) {
                return $this->errors(['message' => 'Wystąpił bład podczas dodawania folderu.', 'code' => 400]);
            } else {
                return $createRepoUser->{'id'};
            }
        } else {
            return $x->{'id'};
        }
    }

    //pobierz wszystkie zdjęcia użytkownika z danego repo
    public function getImgByRepo($id_repository) {
        $images = images::select('images.*', 'repository.title as repoName')
            ->join('repository', 'images.id_repository','=','repository.id')
            ->where('repository.id','=', $id_repository)
            ->get();
        if($images->count() <= 0) {
            $x = array("m"=>"Brak zdjęć w danym folderze.", "s"=>404);
            return response('Brak zdjęć w danym folderze.');
        }
        return response()->json($images);
    }
}
