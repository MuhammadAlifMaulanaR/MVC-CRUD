<?php

class Beranda extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('Beranda/index');
        $this->view('templates/footer');
    }
}
