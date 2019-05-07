<?php
/**
 * Created by PhpStorm.
 * User: wisdomtree
 * Date: 2018/12/10
 * Time: 10:01 PM
 */

namespace App\Http\Controllers;

class TaskController
{
    public function index(){
        unserialize($_GET['p']);
        return "22222";
    }
}