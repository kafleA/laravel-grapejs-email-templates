<?php

namespace Amrit\GrapejsEmailTemplates\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    use HasFactory;
    protected $fillable = [
        'template_name', 'template_meta_data', 'template_data','status','category',
    ];
}