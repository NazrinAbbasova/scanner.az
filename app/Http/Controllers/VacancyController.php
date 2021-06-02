<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacancyRequest;
use App\Models\Certificate;
use App\Models\CertificateLevel;
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
        // return $request->all();
        $max_score = 0;
        $v = new Vacancy;
        $v->company_id = auth()->user()->id;

        $v->title       = $request->title;
        $v->description = $request->description;
        $v->obligations = $request->obligations;
        $v->guarantees  = $request->guarantees;
        
        $age_importance = $request->age_importance == 'choose' ? 0 : $request->age_importance;
        $v->age_importance = $age_importance ;
        $max_score += $age_importance;
        
        if($request->age_importance > 0) {
            $v->min_age   = $request->min_age;
            $v->max_age   = $request->max_age;
        }
        
        $nationality_importance = $request->nationality_importance == 'choose' ? 0 : $request->nationality_importance;
        $v->nationality_importance  = $nationality_importance;
        $max_score += $nationality_importance;

        $request->nationality_importance 
            ? $v->nationality = $request->nationality 
            : $v->nationality = null;

        $region_importance = $request->region_importance == 'choose' ? 0 : $request->region_importance;

        $v->region_importance  = $region_importance;
        $max_score += $region_importance;

        $request->region_importance > 0
            ? $v->region = $request->region 
            : $v->region = null;

        $gender_importance = $request->gender_importance == 'choose' ? 0 : $request->gender_importance;
        $v->gender_importance = $gender_importance;
        $max_score += $gender_importance;

        $request->gender_importance > 0
            ? $v->gender = $request->gender 
            : $v->gender = null;

        $military_importance = $request->military_importance == 'choose' ? 0 : $request->military_importance; 
        $v->military_importance = $military_importance;   
        $max_score += $military_importance;

        $request->military_importance > 0
            ? $v->military = $request->military 
            : $v->military = null;

        $marital_importance = $request->marital_importance == 'choose' ? 0 : $request->marital_importance; 
        $v->marital_importance = $marital_importance;
        $max_score += $marital_importance;

        $request->marital_importance > 0
            ? $v->marital = $request->marital 
            : $v->marital = null;

        $driver_license_importance = $request->driver_license_importance == 'choose' ? 0 : $request->driver_license_importance; 
        $v->driver_license_importance = $driver_license_importance;
        $max_score += $driver_license_importance;

        if($request->driver_license_importance > 0) {
            $v->driver_license           = $request->driver_license;
            $v->driver_license_category  = $request->driver_license_category;
        }

        $education_importance = $request->education_importance == 'choose' ? 0 : $request->education_importance; 
        $v->education_importance = $education_importance;
        $max_score += $education_importance;

        $request->education_importance > 0
            ? $v->education = $request->education 
            : $v->education = null;

        $exam_score_importance = $request->score_importance == 'choose' ? 0 : $request->score_importance; 
        $v->exam_score_importance = $exam_score_importance;
        $max_score += $exam_score_importance;

        $request->score_importance > 0
            ? $v->exam_score = $request->score 
            : $v->exam_score = null;


        $field_importance = $request->field_importance == 'choose' ? 0 : $request->field_importance; 
        $v->field_importance = $field_importance;
        $max_score += $field_importance;

        if($request->field_importance > 0) {
            $v->field                      = $request->field;
            $v->field_employment_duration  = $request->field_employment_duration;
        }

        $function_importance = $request->function_importance == 'choose' ? 0 : $request->function_importance; 
        $v->function_importance = $function_importance;
        $max_score += $function_importance;

        if($request->function_importance > 0) {
            $v->function                      = $request->function;
            $v->function_employment_duration  = $request->function_employment_duration;
        }

        $position_importance = $request->position_importance == 'choose' ? 0 : $request->position_importance; 
        $v->position_importance = $position_importance;
        $max_score += $position_importance;

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

        $v->max_score = $max_score;
        $v->save();

        // Languages

        if($request->has('languages')){
            $other_language_importances = [];
            $other_language_levels = [];
            $other_languages = [];

            for($i = 0; $i < count($request->languages); $i++) {
                if($request->languages[$i] == 'Digər') {

                    array_push($other_language_importances, $request->language_importances[$i]);
                    array_push($other_language_levels,      $request->language_levels[$i]);
                    array_push($other_languages,            $request->languages[$i]);

                } else {

                    $v_lang = VacancyLanguage::updateOrCreate([
                        'language_id'   => $request->languages[$i],
                    ],[
                        'vacancy_id'   => $v->id,
                        'importance'   => $request->language_importances[$i],
                        'level'        => $request->language_levels[$i],
                        'language_id'  => $request->languages[$i],
                    ]);

                    $max_score += $request->language_importances[$i];

                }
            }

            // If new languages need to be created

            if($request->has('new_languages')) {
                for($i = 0; $i < count($request->new_languages); $i++){

                    $check = Language::where('name', 'LIKE', "%{$request->new_languages[$i]}%") ->first();
                    if($check) $l = $check;
                    else {
                        // Create new language
                        $l = new Language;
                        $l->name = $request->new_languages[$i];
                        $l->save();
                    }

                    // Create new vacancy language relation
                    $v_lang              = new VacancyLanguage;
                    $v_lang->vacancy_id  = $v->id;
                    $v_lang->importance  = $other_language_importances[$i];
                    $v_lang->level       = $other_language_levels[$i];
                    $v_lang->language_id = $l->id;
                    $v_lang->save();
                }
            }
        }

        // Computer skills

        if($request->has('computer_skills')){
            $other_skill_importances = [];
            $other_skill_levels = [];
            $other_skills = [];
            
                
            for($i = 0; $i < count($request->computer_skills); $i++) {
                if($request->computer_skills[$i] == 'Digər') {

                    array_push($other_skill_importances, $request->computer_skill_importances[$i]);
                    array_push($other_skill_levels,      $request->computer_skill_levels[$i]);
                    array_push($other_skills,            $request->computer_skills[$i]);

                } else {

                    $v_comp_skill = VacancyComputerSkill::updateOrCreate([
                        'computer_skill_id'   => $request->computer_skills[$i],
                    ],[
                        'vacancy_id'         => $v->id,
                        'importance'         => $request->computer_skill_importances[$i],
                        'level'              => $request->computer_skill_levels[$i],
                        'computer_skill_id'  => $request->computer_skills[$i],
                    ]);

                    $max_score += $request->computer_skill_importances[$i];

                }
            }

            // If new computer skills need to be created

            if($request->has('new_computer_skills')) {
                for($i = 0; $i < count($request->new_computer_skills); $i++){

                    $check = ComputerSkill::where('name', 'LIKE', "%{$request->new_computer_skills[$i]}%") ->first();
                    if($check) $skill = $check;
                    else {
                        // Create new language
                        $skill = new ComputerSkill;
                        $skill->name = $request->new_computer_skills[$i];
                        $skill->save();
                    }
                    

                    // Create new vacancy language relation
                    $v_skill                    = new VacancyComputerSkill;
                    $v_skill->vacancy_id        = $v->id;
                    $v_skill->importance        = $other_skill_importances[$i];
                    $v_skill->level             = $other_skill_levels[$i];
                    $v_skill->computer_skill_id = $skill->id;
                    $v_skill->save();

                    $max_score += $other_skill_importances[$i];
                }
            }
        }

        // Certificates

        if($request->has('certificates')){
            $other_certificate_importances = [];
            $other_certificate_levels = [];
            $other_certificates = [];

            for($i = 0; $i < count($request->certificates); $i++) {

                if($request->certificates[$i] == 'Digər') {

                    array_push($other_certificate_importances, $request->certificate_importances[$i]);
                    array_push($other_certificate_levels,      $request->certificate_levels[$i]);
                    array_push($other_certificates,            $request->certificates[$i]);

                } else {

                    $v_cert = VacancyCertificate::updageOrCreate([
                        'certificate_id'   => $request->certificates[$i],
                    ],[
                        'vacancy_id'         => $v->id,
                        'importance'         => $request->certificate_importances[$i],
                        'level'              => $request->certificate_levels[$i],
                        'certificate_id'     => $request->certificates[$i],
                    ]);

                    $max_score += $request->certificate_importances[$i];

                }
                
            }

            // If new certificate and it's level need to be created

            if($request->has('new_certificates')) {
                for($i = 0; $i < count($request->new_certificates); $i++){

                    $check = Certificate::where('name', 'LIKE', "%{$request->new_certificates[$i]}%") ->first();

                    if($check) $cert = $check;
                    else {
                        // Create new language
                        $cert = new Certificate;
                        $cert->name = $request->new_certificates[$i];
                        $cert->save();
                    }

                    $check = CertificateLevel::where('name', 'LIKE', "%{$request->new_certificate_levels[$i]}%") ->first();

                    if($check) $level = $check;
                    else {   
                        // Create new certificate level
                        $level = new CertificateLevel;
                        $level->certificate_id = $cert->id;
                        $level->name = $request->new_certificate_levels[$i];
                        $level->save();
                    }

                    // Create new vacancy language relation
                    $v_cert                    = new VacancyCertificate;
                    $v_cert->vacancy_id        = $v->id;
                    $v_cert->importance        = $other_certificate_importances[$i];
                    $v_cert->level             = $level->name;
                    $v_cert->certificate_id = $cert->id;
                    $v_cert->save();

                    $max_score += $other_certificate_importances[$i];
                }
            }
        }

        $v->max_score = $max_score;
        $v->save();

        return redirect()->route('vacancies.edit', $v->id)->with('success', 'Vakansiya uğurla yaradıldı');
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
        $vacancy      = Vacancy::with('languages', 'computer_skills', 'certificates')->find($id);
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
        // return $request->all();
        $max_score = 0;

        $v->title       = $request->title;
        $v->description = $request->description;
        $v->obligations = $request->obligations;
        $v->guarantees  = $request->guarantees;
        
        $age_importance = $request->age_importance == 'choose' ? 0 : $request->age_importance;
        $v->age_importance = $age_importance ;
        $max_score += $age_importance;
        
        if($request->age_importance > 0) {
            $v->min_age   = $request->min_age;
            $v->max_age   = $request->max_age;
        }
        
        $nationality_importance = $request->nationality_importance == 'choose' ? 0 : $request->nationality_importance;
        $v->nationality_importance  = $nationality_importance;
        $max_score += $nationality_importance;

        $request->nationality_importance 
            ? $v->nationality = $request->nationality 
            : $v->nationality = null;

        $region_importance = $request->region_importance == 'choose' ? 0 : $request->region_importance;

        $v->region_importance  = $region_importance;
        $max_score += $region_importance;

        $request->region_importance > 0
            ? $v->region = $request->region 
            : $v->region = null;

        $gender_importance = $request->gender_importance == 'choose' ? 0 : $request->gender_importance;
        $v->gender_importance = $gender_importance;
        $max_score += $gender_importance;

        $request->gender_importance > 0
            ? $v->gender = $request->gender 
            : $v->gender = null;

        $military_importance = $request->military_importance == 'choose' ? 0 : $request->military_importance; 
        $v->military_importance = $military_importance;   
        $max_score += $military_importance;

        $request->military_importance > 0
            ? $v->military = $request->military 
            : $v->military = null;

        $marital_importance = $request->marital_importance == 'choose' ? 0 : $request->marital_importance; 
        $v->marital_importance = $marital_importance;
        $max_score += $marital_importance;

        $request->marital_importance > 0
            ? $v->marital = $request->marital 
            : $v->marital = null;

        $driver_license_importance = $request->driver_license_importance == 'choose' ? 0 : $request->driver_license_importance; 
        $v->driver_license_importance = $driver_license_importance;
        $max_score += $driver_license_importance;

        if($request->driver_license_importance > 0) {
            $v->driver_license           = $request->driver_license;
            $v->driver_license_category  = $request->driver_license_category;
        }

        $education_importance = $request->education_importance == 'choose' ? 0 : $request->education_importance; 
        $v->education_importance = $education_importance;
        $max_score += $education_importance;

        $request->education_importance > 0
            ? $v->education = $request->education 
            : $v->education = null;

        $exam_score_importance = $request->score_importance == 'choose' ? 0 : $request->score_importance; 
        $v->exam_score_importance = $exam_score_importance;
        $max_score += $exam_score_importance;

        $request->score_importance > 0
            ? $v->exam_score = $request->score 
            : $v->exam_score = null;


        $field_importance = $request->field_importance == 'choose' ? 0 : $request->field_importance; 
        $v->field_importance = $field_importance;
        $max_score += $field_importance;

        if($request->field_importance > 0) {
            $v->field                      = $request->field;
            $v->field_employment_duration  = $request->field_employment_duration;
        }

        $function_importance = $request->function_importance == 'choose' ? 0 : $request->function_importance; 
        $v->function_importance = $function_importance;
        $max_score += $function_importance;

        if($request->function_importance > 0) {
            $v->function                      = $request->function;
            $v->function_employment_duration  = $request->function_employment_duration;
        }

        $position_importance = $request->position_importance == 'choose' ? 0 : $request->position_importance; 
        $v->position_importance = $position_importance;
        $max_score += $position_importance;

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

        $v->max_score = $max_score;
        $v->save();

       // Languages

       if($request->has('languages')){
        $other_language_importances = [];
        $other_language_levels = [];
        $other_languages = [];

        for($i = 0; $i < count($request->languages); $i++) {
            if($request->languages[$i] == 'Digər') {

                array_push($other_language_importances, $request->language_importances[$i]);
                array_push($other_language_levels,      $request->language_levels[$i]);
                array_push($other_languages,            $request->languages[$i]);

            } else {
                
                $v_lang = VacancyLanguage::where('vacancy_id', $v->id)->where('language_id', $request->languages[$i])->first();
                
                if($v_lang) {
                    $v_lang->importance = $request->language_importances[$i];
                    $v_lang->level      = $request->language_levels[$i];
                } else {
                    $v_lang = new VacancyLanguage;
                    $v_lang->vacancy_id  = $v->id;
                    $v_lang->language_id = $request->languages[$i];
                    $v_lang->importance  = $request->language_importances[$i];
                    $v_lang->level       = $request->language_levels[$i];
                }

                $v_lang->save();

                $max_score += $request->language_importances[$i];

            }
        }

        // If new languages need to be created

        if($request->has('new_languages')) {
            for($i = 0; $i < count($request->new_languages); $i++){

                $check = Language::where('name', 'LIKE', "%{$request->new_languages[$i]}%") ->first();
                if($check) $l = $check;
                else {
                    // Create new language
                    $l = new Language;
                    $l->name = $request->new_languages[$i];
                    $l->save();
                }

                // Create new vacancy language relation
                $v_lang              = new VacancyLanguage;
                $v_lang->vacancy_id  = $v->id;
                $v_lang->importance  = $other_language_importances[$i];
                $v_lang->level       = $other_language_levels[$i];
                $v_lang->language_id = $l->id;
                $v_lang->save();
            }
        }
    }

    // Computer skills

    if($request->has('computer_skills')){
        $other_skill_importances = [];
        $other_skill_levels = [];
        $other_skills = [];
        
            
        for($i = 0; $i < count($request->computer_skills); $i++) {
            if($request->computer_skills[$i] == 'Digər') {

                array_push($other_skill_importances, $request->computer_skill_importances[$i]);
                array_push($other_skill_levels,      $request->computer_skill_levels[$i]);
                array_push($other_skills,            $request->computer_skills[$i]);

            } else {

                $v_comp_skill = VacancyComputerSkill::where('vacancy_id', $v->id)->where('computer_skill_id', $request->computer_skills[$i])->first();
                if($v_comp_skill) {
                    $v_comp_skill->importance = $request->computer_skill_importances[$i];
                    $v_comp_skill->level = $request->computer_skill_levels[$i];
                } else {
                    $v_comp_skill = new VacancyComputerSkill;
                    $v_comp_skill->vacancy_id = $v->id;
                    $v_comp_skill->computer_skill_id = $request->computer_skills[$i];
                    $v_comp_skill->importance = $request->computer_skill_importances[$i];
                    $v_comp_skill->level = $request->computer_skill_levels[$i];
                }

                $v_comp_skill->save();

                $max_score += $request->computer_skill_importances[$i];

            }
        }

        // If new computer skills need to be created

        if($request->has('new_computer_skills')) {
            for($i = 0; $i < count($request->new_computer_skills); $i++){

                $check = ComputerSkill::where('name', 'LIKE', "%{$request->new_computer_skills[$i]}%") ->first();
                if($check) $skill = $check;
                else {
                    // Create new language
                    $skill = new ComputerSkill;
                    $skill->name = $request->new_computer_skills[$i];
                    $skill->save();
                }
                

                // Create new vacancy language relation
                $v_skill                    = new VacancyComputerSkill;
                $v_skill->vacancy_id        = $v->id;
                $v_skill->importance        = $other_skill_importances[$i];
                $v_skill->level             = $other_skill_levels[$i];
                $v_skill->computer_skill_id = $skill->id;
                $v_skill->save();

                $max_score += $other_skill_importances[$i];
            }
        }
    }

    // Certificates

    if($request->has('certificates')){
        $other_certificate_importances = [];
        $other_certificate_levels = [];
        $other_certificates = [];

        for($i = 0; $i < count($request->certificates); $i++) {

            if($request->certificates[$i] == 'Digər') {

                array_push($other_certificate_importances, $request->certificate_importances[$i]);
                array_push($other_certificate_levels,      $request->certificate_levels[$i]);
                array_push($other_certificates,            $request->certificates[$i]);

            } else {

                $v_cert = VacancyCertificate::where('vacancy_id', $v->id)->where('certificate_id', $request->certificates[$i])->first();

                if($v_cert) {
                    $v_cert->importance = $request->certificate_importances[$i];
                    $v_cert->level      = $request->certificate_levels[$i];
                } else {
                    $v_cert = new VacancyCertificate;
                    $v_cert->vacancy_id     = $v->id;
                    $v_cert->certificate_id = $request->certificates[$i];
                    $v_cert->importance     = $request->certificate_importances[$i];
                    $v_cert->level          = $request->certificate_levels[$i];
                }
                
                $v_cert->save();

                $max_score += $request->certificate_importances[$i];

            }
            
        }

        // If new certificate and its level need to be created

        if($request->has('new_certificates')) {
            for($i = 0; $i < count($request->new_certificates); $i++){

                $check = Certificate::where('name', 'LIKE', "%{$request->new_certificates[$i]}%") ->first();

                if($check) $cert = $check;
                else {
                    // Create new language
                    $cert = new Certificate;
                    $cert->name = $request->new_certificates[$i];
                    $cert->save();
                }

                $check = CertificateLevel::where('name', 'LIKE', "%{$request->new_certificate_levels[$i]}%") ->first();

                if($check) $level = $check;
                else {   
                    // Create new certificate level
                    $level = new CertificateLevel;
                    $level->certificate_id = $cert->id;
                    $level->name = $request->new_certificate_levels[$i];
                    $level->save();
                }

                // Create new vacancy language relation
                $v_cert                    = new VacancyCertificate;
                $v_cert->vacancy_id        = $v->id;
                $v_cert->importance        = $other_certificate_importances[$i];
                $v_cert->level             = $level->name;
                $v_cert->certificate_id = $cert->id;
                $v_cert->save();

                $max_score += $other_certificate_importances[$i];
            }
        }
    }
        

        return redirect()->back()->with('success', 'Vakansiya uğurla yeniləndi');
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
