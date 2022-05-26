<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\artcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Voici comment fonctionne le routage dans laravel : 
 d'abord on definit la route avec la methode , on definit le chemin et on definit la fonction qui va etre executer lorsque l'utilisateur va sur la route.
 - la methode get() permet de definir une route en GET
    - la methode post() permet de definir une route en POST
                {
                        passer des donnes en post permet de proteger la route des attaques tel que
                         CSRF(Cross Site Request Forgery qui est une attaque de type hacker qui permet de modifier
                          le contenu d'un formulaire en utilisant des donnees de l'utilisateur)
                }
    - la methode put() permet de definir une route en PUT
                {
                    passer des donnees en put permet de modifier des donnees existantes.
                }
    - la methode delete() permet de definir une route en DELETE
                {
                    passer des donnes en delete permet de supprimer des donnees existantes.
                }
    - la methode patch() permet de definir une route en PATCH
                {
                    passer des donnes en patch permet de modifier des donnees existantes.
                    la differnce entre patch et put est que patch ne permet pas de modifier toutes les donnees d'un formulaire.
                    Exemple: on peut modifier uniquement le nom d'un utilisateur.

                }
    - la methode options() permet de definir une route en OPTIONS
                {
                    passer des donnes en options permet de definir des options pour une route .
                    Exemple: on peut definir une route qui permet de definir des options tel que les methodes acceptées.
                }
    - la methode any() permet de definir une route en GET, POST, PUT, DELETE, PATCH ou OPTIONS
                {
                    passer des donnes en any permet de definir des options pour une route .
                    Exemple: on peut definir une route qui permet de definir des options tel que les methodes acceptées.
                }

 
 
| 

On peut nommez chaque route avec un nom de route, et on peut ajouter des paramètres dans les routes
les paramètres sont des variables qui sont passées dans la route.
Exemple: Route::get('/articles/{id}', 'artController@show');
 par défaut, laravel va chercher les routes dans le dossier routes/web.php.
exemple: Route::get('/', function () {
    return view('welcome');

});
En resume les routes fonctionnent comme des liens. et laravel va chercher les routes dans le dossier routes/web.php et ensuite les afficher dans la vue.







*/



Route::get('/', [artcontroller::class, 'index'])->name('home');
Route::get('/articles/{id}', [artcontroller::class, 'show'])->wherenumber('id');
Route::get('/contact', [artcontroller::class, 'contact']) ->name('contact');
 
