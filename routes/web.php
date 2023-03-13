<?php
use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;


// Premiere Méthode
// Route::get('/', function () {
//     $jours = ["Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"];
//     return view('base')->with("jours", $jours);
// });

// Route::get('/about', function () {
//     return view('pages/about')
//     ->with("prenom", "Modou")
//     ->with('nom', "Sarr");
// });


// Deuxieme Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->withPrenom("Gnoror")
//     ->withNom("Sarr");
// });


// Troisime Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->with([
//         'prenom' => "Modou",
//         'nom' => "Sarr"
//     ]);
// });


// Quatrime Méthode
// Route::get('/about', function () {
//     $tab = [
//         'prenom' => 'Modou',
//         'nom' => "Sarr"
//     ];
//     $nomComplet = "Issa pouye";
//     return view('pages/about', compact('tab', 'nomComplet'));
// });


// Cinquieme Méthode
// Route::get('/about', function () {
//     $view = view('pages/about');
//     $view->nom = "Sarr";
//     $view->prenom = "Fatou";
//     $view->adresse= "Pikine";

//     return $view;
// });



//Route::view('/about', 'pages/about');
//Route::view('/contact', 'pages/contact');
//Route::view('/service', 'pages/service');

//Apartire du selectionner le premier article

//Route::get('/', function () {
   // $articles =DB :: select ('select *from articles');
   // dd ($articles);
   // return view('base');
//});

//Route::get('/', function () {
    //$articles =DB :: select ('select *from articles');
   // dd ($articles);
   // return view('base');
//});



//Route::get('/', function () {
    // 🌴🌴🌴 Apprendre SQL Brute 🌴🌴🌴
    // Séléctionner la liste des articles
    // $articles = DB::select('select * from articles');

    // Séléctionner le premier article
    // $article = DB::select('select * from articles')[0];
    // dd($article);

    // Séléctionner le premier article
    // $article = DB::select('select * from articles limit 1');
    // dd($article);

    // A partir du 2em article, recuperer 1 articles
    // $article = DB::select('select * from articles limit 1 offset 2');
    // dd($article);

    // Inserer un article : 1ere methode
    // $ok = DB::insert("INSERT INTO articles
    // values(null, :titre, :contenu, :etat,  :date)", [
    //     'titre' => 'Titre4',
    //     'contenu' => 'Contenu4',
    //     'etat' => 1,
    //     'date' => date('Y-m-d H:i:s')
    // ]);
    // dd($ok);

    //Inserer un article : 2eme methode
    
    // $titre = 'Titre 5';
    // $contenu = 'Contenu 5';
    // $etat = 0;
    // $date = date('Y-m-d H:i:s');

    // $ok = DB::insert("INSERT INTO articles
     //values(null, :titre, :contenu, :etat,  :date)",
    // compact('titre', 'contenu', 'etat', 'date'));
     //dd($ok);

     // Inserer un article : 3eme methode
    // $titre = 'Titre 6';
    // $contenu = 'Contenu 6';
    // $etat = 0;
    // $date = date('Y-m-d H:i:s');

    // $ok = DB::update("UPDATE articles SET titre='Titre 2 modifié' WHERE id =2");
    // dd($ok);

    // Supprimer l'article dont l'id =6
    // $ok = DB::delete("DELETE from articles WHERE id =6");
    // dd($ok);


    // 🌴🌴🌴 Apprendre Fluent Query Builder 🌴🌴🌴

   // return view('base');
    //});


// selectionnetr l'article qui a pour titre "titre 2"
   
// $article= DB::table('articles')->whreId(2)->get();

// $article= DB::table('articles')->whreId(2)->get();
//  dd($article);

 // Selectionner tous les articles dont id est >=2 
  //Route::get('/', function () {
  //$article= DB::table('articles')->whreTitreAndContenu('article2','contenu2')->get();

  // dd($article);
   //return view('base');
 //});
// le contenu "Contenu 2"(Deuxieme méthode)
// $article= DB::table('articles')
// ->whreId('titre','article2')
// ->whreId('contenu','contenu 2')
// ->get();

    //selectionner le premier article  
    //$article = DB::table('articles')->first()->titre;
    //dd($article);
    // return view('base');
  


// Selectionner deux article
//Route::get('/', function () {
//$article = DB::table('articles')->take(2)->get();
//dd($article);
//return view('base');
   // });

   //  A partire du deuxime article selectionner 3 articles 
    //Route::get('/', function () {
      // $article = DB::table('articles')->where('id','>','2')
       //->take(3)
       //->get();
       //dd($article);
       //return view('base');
          // });



         // Route::get('/', function () {
           // $article = DB::table('articles')->where('id','>', '2')->orderBy('titre','asc')->get();
           // $article = DB::table('articles')->orderBy('titre','desc')->get();
           // dump($article);
            //dd($article);
            //return view('base');
               // }); 

              // Route::get('/', function () {
               // Afficher le nombre d'article 
        // $article = DB::table('articles')->count();
        // dd($article);
        // return view('base');
         // });
          // Inserer un article (preliere méthode)
         // Route::get('/', function () {
        // $ok= $article = DB::table('articles')->insert(
         // [
           // [ 
           //'titre' => 'titre 6',
           //'contenu' =>'contenu 6', 
           //'etat' => 0,
           //'date' => date('Y-m-d'),
           // ],
            //[
              // 'titre' => 'titre 7',
           //'contenu' =>'contenu 7', 
           //'etat' => 0,
           //'date' => date('Y-m-d'),
           //]
           // ],
           // ) ;
         // dd( $ok);
       // return view('base');
        // });
         // Eloquent(O R M) 
            // Route::get('/', function () {
             //  $etudians =Etudiant::get();
             // dd($etudians);
               // return view('base');
            //});

           // Route::get('/', function () {
              //$etudians =Etudiant::where('prenom','!','Modou');
              //->where('age','>', 23),
              //->get('nom',prenom');
             //dd($etudians);
              // return view('base');
           //});

              //Ajouter un etudiant (Premiere méthode)
               //Route::get('/', function () {
             //$etudian = new Etudiant();
             //$etudian->nom ="fall";
            // $etudian->prenom ="fatou";
             //$etudian->matricule="M345";
             //$etudian->age="23";
             //$ok =$etudian->save();
             //dd($etudian);
             // return view('base');
         // });
         // Ajouter un etudiant (Premiere méthode)
         // Route::get('/', function () {
            // [
              //  'nom'=>"Ba",
                //'prenom'=>"Dieynaba",
                //'Matricule'=>"M2334",
                //'age'=> 23
            // ]
            // );

            // dd("letudiant". $etudian->prenom .' ' . $etudian->nom.
         // 'a été créé avec succés');
             // dd($etudian);
             // return view('base');
         // });


              //  Route::get('/', function () {

        // [16:55, 07/03/2023] Moussé Sek:  Ajouter un etudiant (Deuxieme methode)
   // $etudiant = new Etudiant(
       // [
           // 'nom' => "Mbaye",
           // 'prenom' => "Ibrahima",
           // 'matricule' => "101014",
           // 'age' => 16
       // ]
    //);
    //$ok = $etudiant->save();
    //dd($ok);
//[17:08, 07/03/2023] Moussé Sek: // Ajouter un etudiant (Troisieme methode)
   // $etudiant = Etudiant::create(
       // [
          //  'nom' => "Diop",
           // 'prenom' => "Mouhammad",
            //'matricule' => "101016",
            //'age' => 17
       // ]
   // );
   // dd("L'edutiant " . $etudiant->prenom . ' ' . $etudiant->nom .
   // ' a été crée avec succès !!! ');
//[17:39, 07/03/2023] Moussé Sek: @extends('base', ['titre' => 'Liste etudiant'])

//@section('vitrine')
    <h1>Liste des etudiants</h1>
    <ul>
        @foreach ($etudiants as $etudiant)
            <li>{{ $etudiant->prenom }} {{ $etudiant->nom }} </li>
        @endforeach
    </ul>
//@stop