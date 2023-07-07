<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class AddCardModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        "name","student_id","phone","staff_id"
    ];
    protected $table='addcards';
}
