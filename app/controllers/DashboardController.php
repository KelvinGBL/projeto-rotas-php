<?php
    namespace app\controllers;

    class DashboardController{

        public function index(){
            Controller::view("dashboard");
        }
    }