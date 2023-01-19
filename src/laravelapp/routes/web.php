<?php
use App\Http\Controllers\WorldCupController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sql/search_win', function () {
    return view('sql/search_win');
});

Route::get('/sql/worldcup', function () {
    return view('sql/worldcup');
});

Route::get('/sql/team', [WorldCupController::class, 'updateTeam']);
Route::post('/sql/team', [WorldCupController::class, 'updateTeam']);

Route::get('/sql/tournament', [WorldCupController::class, 'LoadTour']);
Route::get('/sql/outcome', [WorldCupController::class, 'LoadOutcome']);
Route::get('/sql/group', [WorldCupController::class, 'LoadGroup']);


Route::get('/sql/team_from_group',[WorldCupController::class, 'updateTeamFromGroup']);
Route::get('/sql/team_from_knock',[WorldCupController::class, 'updateTeamFromKnock']);
Route::post('/sql/team_from_group',[WorldCupController::class, 'updateTeamFromGroup']);
Route::post('/sql/team_from_knock',[WorldCupController::class, 'updateTeamFromKnock']);

Route::get('/sql/search', [WorldCupController::class, 'Search']);
Route::post('/sql/search',[WorldCupController::class, 'Search']);
