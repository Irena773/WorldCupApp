<?php
use App\Http\Controllers\SQLController;
use App\Http\Controllers\DBController;
use App\Http\Controllers\WCController;
use App\Http\Controllers\TESTController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sql/injection', function () {
    return view('sql/injection');
});
//Route::post('/sql/injection', 'SQLController@injectionMySQLi');
Route::post('/sql/injection', [SQLController::class,'noInjectionMySQLi']);
// Route::post('/sql/injection', 'SQLController@injectionPDO');
// Route::post('/sql/injection', 'SQLController@noInjectionPDO');
// Route::post('/sql/injection', 'SQLController@injectionLaravelQueryBuilder');
// Route::post('/sql/injection', 'SQLController@noInjectionLaravelQueryBuilder');


Route::get('/sql/search_win', function () {
    return view('sql/search_win');
});

Route::get('/sql/search_win/', [SQLController::class, 'search']);
Route::post('/sql/search_win/', [SQLController::class, 'tournament_searchResults']);
Route::post('/sql/search_win_results', [SQLController::class, 'searchWinResults']);

Route::get('/ui/tournaments/{id?}', [WCController::class,'showTournaments' ]);
Route::get('/ui/results/{tournament_id}', [WCController::class,'showResults']);

// parameters via Form (POST)
Route::get('/ui/search', [WCController::class, 'search']);
Route::post('/ui/search_results', [WCController::class, 'searchResults']);

// Sample: VueJS
Route::get('/vuejs/hello_vuejs', function () {
    return view('vuejs/hello_vuejs', [
        'message' => "Hello VueJS!! from Server",
        'select_data' => [
            ['value' => "1", 'text' => "A"],
            ['value' => "2", 'text' => "B"],
            ['value' => "3", 'text' => "C"],
            ['value' => "4", 'text' => "D"],
            ['value' => "5", 'text' => "E"]
        ]
    ]);
});

Route::get('/ajax/hello_ajax', function () {
    return view('ajax/hello_ajax');
});
Route::get('/ajax/hello_ajax_message', function () {
    $data = [
        "message1" => "Welcome to Fantastic AJAX World!!",
        "message2" => "async/await is latest way for AJAX handling."
    ];
    return json_encode($data);
});
Route::post('/ajax/hello_ajax_message', function () {
    $data = [
        "message1" => "Welcome to Fantastic AJAX World!!",
        "message2" => "async/await is latest way for AJAX handling."
    ];
    return json_encode($data);
});

Route::post('/sql/search_win_results', [SQLController::class, 'searchWinResults']);

Route::get('/gmap/hello_gmap', function () {
    return view('gmap/hello_gmap');
});

Route::get('/sql/test', function () {
    return view('sql/test');
});

Route::get('/sql/DB_search',function(){
    return view('sql/DB_search');
});


Route::post('/sql/DB_search_result',[DBController::class, 'Insert']);

Route::get('/sql/team', [TESTController::class, 'updateTeam']);
Route::post('/sql/team', [TESTController::class, 'updateTeam']);

Route::get('/sql/tournament', [TESTController::class, 'LoadTour']);
Route::get('/sql/outcome', [TESTController::class, 'LoadOutcome']);
Route::get('/sql/group', [TESTController::class, 'LoadGroup']);

Route::get('/sql/team_from_group',[TESTController::class, 'updateTeamFromGroup']);
Route::get('/sql/team_from_knock',[TESTController::class, 'updateTeamFromKnock']);
Route::post('/sql/team_from_group',[TESTController::class, 'updateTeamFromGroup']);
Route::post('/sql/team_from_knock',[TESTController::class, 'updateTeamFromKnock']);

Route::get('/sql/search', [TESTController::class, 'Search']);
Route::post('/sql/search',[TESTController::class, 'Search']);

Route::get('/sql/test_tournament', function () {
    $data = [
        "message1" => "Welcome to Fantastic AJAX World!!",
        "message2" => "async/await is latest way for AJAX handling."
    ];
    return json_encode($data);
});
