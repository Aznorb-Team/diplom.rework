<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'application';

    protected $fillable = [
        'title',
        'user_id',
        'employee_id',
        'status_application_id',
        'mode_id',
        'type_id',
        'direction_id',
        'teaching_materials_id',
        'anti_plagiarism_id',
        'certificate_of_department_id',
        'status_work_id'
    ];
    protected $hidden =[
        'updated_at',
        'created_at'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }
    public function employee(){
        return $this->hasOne(User::class, 'id','employee_id');
    }
    public function authors(){
        return $this->belongsToMany(User::class, 'application_author', 'application_id', 'authors_id');
    }
    public function reviews(){
        return $this->belongsToMany(Review::class, 'application_review', 'application_id', 'review_id');
    }
    public function status_application()
    {
        return $this->hasOne(Status_Application::class, 'id');
    }
    public function status_work()
    {
        return $this->hasOne(Status_Work::class, 'id');
    }
    public function mode()
    {
        return $this->hasOne(Mode::class, 'id');
    }
    public function type()
    {
        return $this->hasOne(Type::class, 'id');
    }
    public function direction()
    {
        return $this->hasOne(Direction::class, 'id');
    }
    public function teaching_materials(){
        return $this->hasOne(Teaching_Material::class, 'id');
    }
    public function anti_plagiarisms(){
        return $this->hasOne(Anti_Plagiarism::class, 'id');
    }
    public function certificate_of_departments(){
        return $this->hasOne(Certificate_Of_Department::class, 'id');
    }
    public function app_survey()
    {
        return $this->belongsTo(App_Survey::class, 'application_id', 'id');
    }
}
