<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model

{
        protected $table = "resultat";
    protected $primaryKey = "id";
    protected $fillable = ["id_stu", "scoreP", "scoreT", "scoreS","total"];
        public function Students()
    {
        return $this->belongsTo(Students::class, "id_stu", "id_stu");
    }
}
