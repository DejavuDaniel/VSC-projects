<?php
include "./models/UrmoBaze.php";

class urmoBazeController
{
    public static function index()
    {
        $urmoBaze = UrmoBaze::all();
        return $urmoBaze;
    }

    public static function show()
    {
        $urmoBaze = UrmoBaze::find($_POST['id']);
        return $urmoBaze;
    }
    
    public static function store()
    {
        UrmoBaze::create();
    }
    
    public static function edit()
    {

    }

    public static function sort()
    {
        return UrmoBaze::sort();
    }
    
    public static function update()
    {
        $urmoBaze = new UrmoBaze();
        $urmoBaze->id = $_POST['id'];
        $urmoBaze->brand = $_POST['name'];
        $urmoBaze->item = $_POST['sales_field'];
        $urmoBaze->descript = $_POST['accepts_card'];
        $urmoBaze->price = $_POST['items_quantity'];
        $urmoBaze->update();

    }
    
    public static function destroy()
    {
        UrmoBaze::destroy($_POST['id']);
    }
}
