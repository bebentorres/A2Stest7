<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosts extends Model
{
    use HasFactory;
    protected $table = 'job_posts';
    protected $primaryKey = 'job_id';
    protected $fillable = [
                            'cnum',
                            'job_title',
                            'job_description',
                            'job_salary',
                            'job_location',
                            'job_setup',
                            'job_post_date',
                            'job_type',
                            'exp_level',
                            ];
}
