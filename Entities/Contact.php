<?php namespace Modules\Contact\Entities;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['name', 'themes', 'email', 'telephone', 'message', 'status'];

    public function getStatusName($status){
    	$statusName = [
    		1 => 'Nie przeczytany',
    		2 => 'Przeczytany'
    	];

    	return $statusName[$this->status];
    }

}
