<?php
    namespace app\controllers;

    class UsersController{

        public function index(){
            Controller::view("users");
        }
    }