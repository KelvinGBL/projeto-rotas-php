<?php
    namespace app\controllers;

    class HomeController{

        public function index(){
            Controller::view("home");
        }
    }