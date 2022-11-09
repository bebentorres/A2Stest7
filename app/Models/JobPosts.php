<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class JobPosts extends Model
{
    use HasFactory, Searchable;
    protected $table = 'job_posts';
    protected $primaryKey = 'job_id';
    protected $fillable = [
                            'cnum',
                            'company_name',
                            'job_title',
                            'job_description',
                            'job_salary',
                            'job_location',
                            'job_setup',
                            'job_post_date',
                            'job_type',
                            'exp_level',
                            'employer_id',
                            ];

    public function toSearchableArray()
    {
        return [
            'job_title' => $this->job_title,
            'company_name' => $this->company_name,
            'job_location' => $this->job_location,
            'job_setup' => $this->job_setup,
            'job_title' => $this->job_title,
            'job_type' => $this->job_type,

        ]
    }
}
