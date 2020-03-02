<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Form;

class FormController extends Controller
{
    public function index(){

        $forms = Form::all();

        return view('forms.index',compact('forms'));
    }

    public function create(){
        return view('forms.create');
    }

    public function storeForm(){

        $forms = new Form();

        $forms->country = request('country');
        $forms->education = request('education');
        $forms->kind_of_education = request('kind_of_education');
        $forms->name_school = request('name_school');
        $forms->description = request('description');
        $forms->date = request('date');
        $forms->diploma = request('diploma');

        $forms->save();

        return redirect('/form');

    }

}