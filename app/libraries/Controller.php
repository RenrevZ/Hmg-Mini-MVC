<?php
    /*
     * Based controller
     * loads the models and views
     */

class Controller{
    // load the model
    public function model($model)
    {
        //require model file
        require_once '../app/models/'. $model.'.php';

        // instantiate model
        return new $model();
    }

    // load the view
    public function view($view,$data = [])
    {
        // check for the view file if it exist
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        }else{
            // means view doesnt exist
            die('View does not exist');
        }
    }
}