<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacancyRequest;
use App\Models\Certificate;
use App\Models\ComputerSkill;
use App\Models\Field;
use App\Models\Func;
use App\Models\Language;
use App\Models\Position;
use App\Models\Region;
use App\Models\User;
use App\Models\Vacancy;
use App\Models\VacancyCertificate;
use App\Models\VacancyComputerSkill;
use App\Models\VacancyLanguage;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = User::with('vacancies')->where('type', 'company')->find(auth()->user()->id);

        if($company) return view('front.vacancy.index', compact('company'));
        else return redirect()->route('home');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions      = Region::all();
        $fields       = Field::all();
        $funcs        = Func::all();
        $positions    = Position::all();
        $languges     = Language::all();
        $skills       = ComputerSkill::all();
        $certificates = Certificate::all();

        return view("front.vacancy.create", compact(
            'regions',
            'fields',
            'funcs',
            'positions',
            'skills',
            'certificates'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
        return $request->all();
        $v = new Vacancy;
        $v->company_id = auth()->user()->id;

        $v->title       = $request->title;
        $v->description = $request->description;
        $v->obligations = $request->obligations;
        $v->guarantees  = 'test';
        // $v->guarantees  = $request->guarantees;
        
        $v->age_importance = $request->age_importance;
        if($request->age_importance > 0) {
            $v->min_age   = $request->min_age;
            $v->max_age   = $request->max_age;
        }
        
        $v->nationality_importance  = $request->nationality_importance;

        $request->nationality_importance 
            ? $v->nationality = $request->nationality 
            : $v->nationality = null;

        $v->region_importance  = $request->region_importance;

        $request->region_importance 
            ? $v->region = $request->region 
            : $v->region = null;

        $v->gender_importance = $request->gender_importance;
        $request->gender_importance > 0
            ? $v->gender = $request->gender 
            : $v->gender = null;

        $v->military_importance = $request->military_importance;   
        $request->military_importance > 0
            ? $v->military = $request->military 
            : $v->military = null;

        $v->marital_importance = $request->marital_importance;
        $request->marital_importance > 0
            ? $v->marital = $request->marital 
            : $v->marital = null;

        $v->driver_license_importance = $request->driver_license_importance;
        if($request->driver_license_importance > 0) {
            $v->driver_license           = $request->driver_license;
            $v->driver_license_category  = $request->driver_license_category;
        }

        $v->education_importance = $request->education_importance;
        $request->education_importance > 0
            ? $v->education = $request->education 
            : $v->education = null;

        $v->exam_score_importance = $request->score_importance;
        $request->score_importance > 0
            ? $v->exam_score = $request->score 
            : $v->exam_score = null;


        $v->field_importance = $request->field_importance;
        if($request->field_importance > 0) {
            $v->field                      = $request->field;
            $v->field_employment_duration  = $request->field_employment_duration;
        }

        $v->function_importance = $request->function_importance;
        if($request->function_importance > 0) {
            $v->function                      = $request->function;
            $v->function_employment_duration  = $request->function_employment_duration;
        }

        $v->position_importance = $request->position_importance;
        if($request->position_importance > 0) {
            $v->position                      = $request->position;
            $v->position_employment_duration  = $request->position_employment_duration;
        }

        $v->min_salary_expectation  = $request->min_salary_expectation;
        $v->max_salary_expectation  = $request->max_salary_expectation;

        $request->isActive 
            ? $v->isActive = 1 
            : $v->isActive = 0;

        $request->send_resumes 
            ? $v->send_resumes = 1 
            : $v->send_resumes = 0;

        $v->expiration_date = $request->expiration_date;

        $v->save();

        for($i = 0; $i < count($request->languages); $i++) {
            $v_lang             = new VacancyLanguage;
            $v_lang->vacancy_id = $v->id;
            $v_lang->importance = $request->language_importances[$i];
            $v_lang->level      = $request->language_levels[$i];
            $v_lang->language_id = $request->languages[$i];

            $v_lang->save();
        }
            
        for($i = 0; $i < count($request->computer_skills); $i++) {
            $v_comp_skill                    = new VacancyComputerSkill();
            $v_comp_skill->vacancy_id        = $v->id;
            $v_comp_skill->level             = $request->computer_skill_levels[$i];
            $v_comp_skill->importance        = $request->computer_skill_importances[$i];
            $v_comp_skill->computer_skill_id = $request->computer_skills[$i];
            $v_comp_skill->save();
        }

        for($i = 0; $i < count($request->certificates); $i++) {
            $v_cert                 = new VacancyCertificate;
            $v_cert->vacancy_id     = $v->id;
            $v_cert->level          = $request->certificate_levels[$i];
            $v_cert->importance     = $request->certificate_importances[$i];
            $v_cert->certificate_id = $request->certificates[$i];
            $v_cert->save();
        }

        return 'asd';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacancy = Vacancy::with('languages', 'computer_skills', 'certificates')->find($id);
        $regions      = Region::all();
        $fields       = Field::all();
        $funcs        = Func::all();
        $positions    = Position::all();
        $languges     = Language::all();
        $skills       = ComputerSkill::all();
        $certificates = Certificate::all();
        return view('front.vacancy.edit', compact(
            'vacancy',
            'regions',
            'fields',
            'funcs',
            'positions',
            'skills',
            'certificates'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $v)
    {
        return $v;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $v)
    {
        $v->delete();

        return redirect()->back()->with('success', 'Vakansiya uğurla silindi');
    }


    public function applicants(){
        return view('front.vacancy.applicants');
    }
}
