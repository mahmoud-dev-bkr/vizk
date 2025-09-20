<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Lesson extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title'];

    protected $guarded = ['id'];

    public function course() {
        return $this->belongsTo(Course::class);
    }


}




class LessonTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['title'];
}
