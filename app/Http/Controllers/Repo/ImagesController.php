<?php

namespace App\Http\Controllers\Repo;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repo\RepoController;

use Intervention\Image\Facades\Image;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;
//tables
use App\Repository;
use App\images;

class ImagesController extends Controller
{
    private $user;
    protected $repoController;
    function __construct(RepoController $repoController) {
        //sprawdzamy czy mamy token zalogowanego uzytkownika
        $this->user = JWTAuth::parseToken()->authenticate();
        $this->repoController = $repoController;
    }

    //pobierz wszystkie zdjecia użytkownika ze wszystkich repo
    public function getAll() {
        $images = images::select('images.*','repository.title as repo_name')->join('repository', function ($join) {
            $join->on('images.id_repository','=','repository.id')
                ->where('repository.id_account','=',$this->user->id);
        })->get();
        if(!$images) {
            return response('Błąd zapytania SQL');
        }
        if($images->count() <= 0) {
            return response('Nie dodałeś jeszcze żadnych zdjęć');
        }
        return response()->json($images);
    }

    //pobierz zdjęcie po id
    public function getImgById($id) {
        $image = images::where('id', $id)->get();
        if($image) {
            return response()->json($image);
        } else {
            return response('Brak zdjecia', 404);
        }
    }



    //dodaj zdjecie do wybranego repo uzytkownika
    public function addImg(Request $request) {
        //zdjęcie do przeslania
        $file = Input::file('file');
        //dane zdjecia tytul opis
        $dataFile = $request->only('dataFile');
        //miejsce i zapis zdjecia
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();//rozszerzenie zdjęcia
        $idRepo = $this->repoController->createRepoUser($dataFile['dataFile']['repoName']);
        $size = getimagesize($file);
        $path = $file->getFilename().'.'.$extension;
        //zmiana rozdzielczości zdjecia
        if($size[0] > 1280 && $size[1] > 720) {
            $newimg = Image::make($file->getRealPath())->resize(1280, 720)->save(public_path('/upload/'.$path));
            return $newimg;
        } else {
            if(!Storage::disk('uploads')->put($file->getFilename().'.'.$extension,  File::get($file))) {
                return $this->errors(['message' => 'Wystąpił bład podczas dodawania zdjęcia.', 'code' => 400]);
            }
        }

        $image = new images();
        $image->id_repository = $idRepo;
        $image->title = $dataFile['dataFile']['title'];
        $image->description = $dataFile['dataFile']['description'];
        $image->filename = $file->getFilename();
        $image->mime = $file->getClientMimeType();
        $image->original_filename = $file->getClientOriginalName();
        $image->extension = $extension;
        if(!$image->save()) {
            return $this->errors(['message' => 'Wystąpił bład podczas zapisu zdjecia do bazy danych.', 'code' => 400]);
        }
        return response('Zdjęcie zostało dodane.');
    }
    public function updateImg() {
        $image = images::where('id', $id_image)
            ->where('id_repository', $id_repository)
            ->get();
        if(!$image) {
            return $this->errors(['message' => 'Nie znaleziono zdjęcia.', 'code' => 404]);
        } else {
            $image->title = $dataUpdate['title'];
            $image->description = $dataUpdate['description'];
        }
    }
    public function destroy($id) {
        $image = images::findOrFail($id);
        if($image) {
            $image_path = public_path('upload/'.$image->filename.'.'.$image->extension);
            echo $image_path;
            if(File::exists($image_path)) {
                File::delete($image_path);
                images::destroy($image->id);
                return response('Zdjęcie zostało usuniętę', 200);
            }

        } else {
            return response('Błąd przy usuwaniu zdjecia', 400);
        }
    }
}
