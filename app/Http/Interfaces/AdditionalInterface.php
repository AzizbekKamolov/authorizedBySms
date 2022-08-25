<?php
namespace App\Http\Interfaces;


interface AdditionalInterface extends Added, New1
{

    function getImage();
    public function getUser();
    public function _construct();
    public function getAll();
    public function getUserByName();
}

interface Added
{
    function new();
}
interface New1
{
    function calc();
}
trait New3
{
    protected function query()
    {
        return 216516;
    }
}
trait New4
{
    protected $a = 'a ninng qiymati';
    private $b = 'b ninng qiymati';
    protected function query2()
    {
        return '216516';
    }
}
