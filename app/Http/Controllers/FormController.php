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

        $form = new Form();

        $form->country = request('country');
        $form->education = request('education');
        $form->kind_of_education = request('kind_of_education');
        $form->name_school = request('name_school');
        $form->description = request('description');
        $form->date = request('date');
        $form->diploma = request('diploma');

        $form->save();

        return redirect('/form');

    }

}