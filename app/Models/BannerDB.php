<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerDB extends Model
{
    use HasFactory;
	
	protected $table = 'banners';
	
    protected $fillable = [
        'active', 'title', 'description', 'window_type', 'content_type', 'view_order', 'internal_link', 'external_link', 'internal_content', 'content_html', 'banner_img_fileurl', 'permission_users', 'permission_location', 'permission_school', 'date_start', 'date_end'
    ];
}
