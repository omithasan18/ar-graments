<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $fillable = ['id','about_title','about_note','management_title','management_note','certification_title',
        'certification_note','collection_title','collection_note','client_title','client_note','career_title',
        'career_note','contact_title','contact_note','industry_title','industry_note','blog_title','blog_note',
        'key_title','key_note','footer_title','footer_note','status'];
}
