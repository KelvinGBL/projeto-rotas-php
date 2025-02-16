<?php
    namespace app\controllers;

    class ApplicationsController{

        public function index(){
            Controller::view("applications");
        }
    }