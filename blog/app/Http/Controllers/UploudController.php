<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UploadController extends Controller
{
    function form()
    {
        return view('form-upload');
    }
}