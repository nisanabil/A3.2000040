<?php
/**
 * 
 * 
 * 
 * 
 */
namespace App\Models;

/**blog aku
 * 
 * 
 * 
 */

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image', 'title', 'content'
    ];
}