<?php

namespace App\Http\Controllers;


use App\Http\Interfaces\AdditionalInterface;
use App\Http\Interfaces\New3;
use App\Http\Interfaces\New4;

class SubjectController extends Controller implements AdditionalInterface
{
    use New3, New4;

    public function index()
    {
        echo $this->query2() . '<br>';
        echo $this->a . '<br>';
        echo $this->b . '<br>';
        return $this->query();
    }

    public function getUser()
    {
        // TODO: Implement getUser() method.
    }

    public function _construct()
    {
        echo "salom bu additional interface dan implement qilingan method";
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getUserByName()
    {
        // TODO: Implement getUserByName() method.
    }

    function getImage()
    {
        // TODO: Implement getImage() method.
    }

    function new()
    {
        // TODO: Implement new() method.
    }

    function calc()
    {
        // TODO: Implement calc() method.
    }
}
class Dopol extends SubjectController
{
    public function hjk(){
        return 'lkdnfoe';
    }
    public function newsdcs(){
        static::hjk();
    }
}
