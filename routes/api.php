<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntretienController;

// ================= Personel =================
Route::get('/personels', [EntretienController::class, 'getPersonels']);
Route::post('/personels', [EntretienController::class, 'ajouterPer']);
Route::put('/personels/{id}', [EntretienController::class, 'modifierPer']);
Route::delete('/personels/{id}', [EntretienController::class, 'supprimerPer']);

// ================= Technique =================
Route::get('/techniques', [EntretienController::class, 'getTechniques']);
Route::post('/techniques', [EntretienController::class, 'ajouterTech']);
Route::put('/techniques/{id}', [EntretienController::class, 'modifierTech']);
Route::delete('/techniques/{id}', [EntretienController::class, 'supprimerTech']);

// ================= Students =================
Route::get('/students', [EntretienController::class, 'getStudents']);
Route::post('/students', [EntretienController::class, 'ajouterStu']);
Route::put('/students/{id}', [EntretienController::class, 'modifierStu']);
Route::delete('/students/{id}', [EntretienController::class, 'supprimerStu']);

// ================= Resultats =================
Route::get('/resultats', [EntretienController::class, 'getResultats']);
Route::post('/resultats', [EntretienController::class, 'ajouterResu']);

// ================= Gestion spéciale =================
// ✅ تحديث حالة الطلاب (Top 12 نجاح والباقي انتظار)
Route::post('/students/update-status', [EntretienController::class, 'updateStatusTop12']);

// ✅ جلب الطلاب في حالة انتظار مع النقاط
Route::get('/students/waiting', [EntretienController::class, 'getWaitingStudents']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
