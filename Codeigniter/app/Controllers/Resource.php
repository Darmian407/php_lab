<?php

namespace App\Controllers;

class Resource extends BaseController {
    public function index() {
        
    }

    public function createResource() {
        return view('Resources/createResource');
    }
}