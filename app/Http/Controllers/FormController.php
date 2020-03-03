<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Form;
use App\Country;
use App\Education;
use App\Education_des;
use App\Education_frs;
use App\EducationTypes;
use App\EducationTypes_fr;

class FormController extends Controller
{
    public function index(){

        $forms = Form::all();
        return view('forms.index',compact('forms'));
    }

    public function create(){
        $educations = Education::all()->pluck('name', 'id')->prepend(trans('Wat is het niveau van de opleiding'));
        $educations_de = Education_des::all()->pluck('name', 'id')->prepend(trans('Wat is het niveau van de opleiding'));
        $educations_fr = Education_frs::all()->pluck('name', 'id')->prepend(trans('Wat is het niveau van de opleiding'));
        $type_educations = EducationTypes::all()->pluck('name', 'id')->prepend(trans('Vul hier de soort opleiding / studie'));
        $type_educations_fr = EducationTypes_fr::all()->pluck('name', 'id')->prepend(trans('Vul hier de soort opleiding / studie'));
        $countries = Country::all()->pluck('name', 'id')->prepend(trans('Selecteer land'));
        return view('forms.create', compact('countries','educations', 'type_educations', 'educations_de', 'educations_fr', 'type_educations_fr'));
    }

    public function storeForm(){

        $forms = new Form();

        $forms->country = request('country');
        $forms->name_school = request('name_school');
        $forms->education = request('education');
        $forms->kind_of_education = request('kind_of_education');
        $forms->description = request('description');
        $forms->date = request('date');
        $forms->diploma = request('diploma');

        $forms->save();

        return redirect('/thanks');
    }

    public function thanks(){
        return view('forms.thanks');
    }
}