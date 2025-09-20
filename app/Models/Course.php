<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Course extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title', 'description'];

    protected $guarded = ['id'];


    public function lessons() {
        return $this->hasMany(Lesson::class);
    }

    public function getTypeCourse() {
        if ($this->type == 'free') {
            return 'free';
        } else {
            return 'paid';
        }
    }

}




class CourseTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['title', 'description'];
}
