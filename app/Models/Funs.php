<?php 
namespace App\Models;
use CodeIgniter\Model;

    class Funs extends Model
    {
    public function sayHello(){
	$answer = "I say hello";
	return $answer;
}

    }