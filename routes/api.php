<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Entretien;
use App\Http\Controllers\AuthController;



Route::middleware('auth:sanctum')->group(function () {
// ================= Personel =================
Route::get('/personels', [Entretien::class, 'getPersonels']);
Route::post('/personels', [Entretien::class, 'ajouterPer']);
Route::put('/personels/{id}', [Entretien::class, 'modifierPer']);
Route::delete('/personels/{id}', [Entretien::class, 'supprimerPer']);

// ================= Technique =================
Route::get('/techniques', [Entretien::class, 'getTechniques']);
Route::post('/techniques', [Entretien::class, 'ajouterTech']);
Route::put('/techniques/{id}', [Entretien::class, 'modifierTech']);
Route::delete('/techniques/{id}', [Entretien::class, 'supprimerTech']);

// ================= Students =================
Route::get('/students', [Entretien::class, 'getStudents']);
Route::post('/students', [Entretien::class, 'ajouterStu']);
Route::put('/students/{id}', [Entretien::class, 'modifierStu']);
Route::delete('/students/{id}', [Entretien::class, 'supprimerStu']);

// ================= Resultats =================
Route::get('/resultats', [Entretien::class, 'getResultats']);
Route::post('/resultats', [Entretien::class, 'ajouterResu']);

// ================= Gestion spéciale =================
// ✅ تحديث حالة الطلاب (Top 12 نجاح والباقي انتظار)
Route::post('/students/update-status', [Entretien::class, 'updateStatusTop12']);
Route::get('/students/{id}/detail', [Entretien::class, 'getStudentDetail']);
Route::get('/top-students/{filiere}', [Entretien::class, 'topStudentsByFiliere']);


// ✅ جلب الطلاب في حالة انتظار مع النقاط
Route::get('/students/waiting', [Entretien::class, 'getWaitingStudents']);
});
Route::get('/students/{id}', [Entretien::class, 'show']); // للحصول على بيانات الطالب (بما فيها filiere)

Route::get('/techniques', [Entretien::class, 'index']); // يدعم ?filiere=

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
