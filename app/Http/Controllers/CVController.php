<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\CertificateLevel;
use App\Models\ComputerSkill;
use App\Models\Cv;
use App\Models\CvCertificate;
use App\Models\CvComputerSkill;
use App\Models\CvEducation;
use App\Models\CvExperience;
use App\Models\CvLanguage;
use App\Models\Field;
use App\Models\Func;
use App\Models\Language;
use App\Models\Position;
use App\Models\Region;
use App\Models\Specialty;
use App\Models\University;
use Illuminate\Http\Request;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $unis         = University::all();
        $specialties  = Specialty::all();

        return view('front.cv.create', compact(
            'regions',
            'fields',
            'funcs',
            'positions',
            'skills',
            'certificates',
            'unis',
            'specialties'
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

        $cv                          = new Cv;
        $cv->firstname               = $request->firstname;
        $cv->lastname                = $request->lastname;
        $cv->middlename              = $request->middlename;
        $cv->nationality             = $request->nationality;
        $cv->region                  = $request->region;
        $cv->address                 = $request->address;
        $cv->gender                  = $request->gender;
        $cv->marital                 = $request->marital;
        $cv->military                = $request->military;
        $cv->driver_license          = $request->driver_license;
        $cv->driver_license_category = $request->driver_license_category;
        $cv->linkedin                = $request->linkedin;

        // Educations

        if($request->has('educations')){

            for($i = 0; $i < count($request->educations); $i++) {

                $cv_edu                  = new CvEducation;
                $cv_edu->cv_id           = $cv->id;
                $cv_edu->education       = $request->educations[$i];
                $cv_edu->exam_score      = $request->scores[$i];
                $cv_edu->university      = $request->universities[$i];
                $cv_edu->specialty       = $request->specialties[$i];
                $cv_edu->profession      = $request->professions[$i];
                $cv_edu->admission_year  = $request->admission_years[$i];
                $cv_edu->graduation_year = $request->graduation_years[$i];
                $cv_edu->save();
            }
        }

        // Experiences

        if($request->has('companies')){

            for($i = 0; $i < count($request->companies); $i++) {

                $cv_exp                                 = new CvExperience;
                $cv_exp->cv_id                          = $cv->id;
                $cv_exp->company                        = $request->companies[$i];
                $cv_exp->function                       = $request->functions[$i];
                $cv_exp->function_employment_duration   = $request->function_employment_durations[$i];
                $cv_exp->position                       = $request->positions[$i];
                $cv_exp->position_employment_duration   = $request->position_employment_durations[$i];
                $cv_exp->field                          = $request->fields[$i];
                $cv_exp->field_employment_duration      = $request->field_employment_durations[$i];
                $cv_exp->employment_date                    = $request->employment_dates[$i];
                $cv_exp->unemployment_date                  = $request->unemployment_dates[$i];
                $cv_exp->obligation                         = $request->obligations[$i];
                $cv_exp->save();
            }
        }

        // Languages

        if($request->has('languages')){
            $other_languages = [];
            $other_language_levels = [];

            for($i = 0; $i < count($request->languages); $i++) {
                if($request->languages[$i] == 'Digər') {

                    array_push($other_languages,            $request->languages[$i]);
                    array_push($other_language_levels,      $request->language_levels[$i]);

                } else {
                    $cv_lang                    = new CvLanguage;
                    $cv_lang->cv_id             = $cv->id;
                    $cv_lang->language          = $request->languages[$i];
                    $cv_lang->language_level    = $request->language_levels[$i];
                    $cv_lang->save();
                }
            }

            // If new languages need to be created

            if($request->has('new_languages')) {
                for($i = 0; $i < count($request->new_languages); $i++){

                    // Create new language
                    $l = new Language;
                    $l->name = $request->new_languages[$i];
                    $l->save();

                    // Create new vacancy language relation
                    $cv_lang              = new CvLanguage();
                    $cv_lang->cv_id       = $cv->id;
                    $cv_lang->level       = $other_language_levels[$i];
                    $cv_lang->language    = $l->name;
                    $cv_lang->save();
                }
            }
        }

        // Computer skills

        if($request->has('computer_skills')){
            $other_skills = [];
            $other_skill_levels = [];
            
                
            for($i = 0; $i < count($request->computer_skills); $i++) {
                if($request->computer_skills[$i] == 'Digər') {

                    array_push($other_skills,            $request->computer_skills[$i]);
                    array_push($other_skill_levels,      $request->computer_skill_levels[$i]);

                } else {

                    $cv_comp_skill                         = new CvComputerSkill;
                    $cv_comp_skill->cv_id                  = $cv->id;
                    $cv_comp_skill->computer_skill         = $request->computer_skills[$i];
                    $cv_comp_skill->computer_skill_level   = $request->computer_skill_levels[$i];
                    $cv_comp_skill->save();

                }
            }

            // If new computer skills need to be created

            if($request->has('new_computer_skills')) {
                for($i = 0; $i < count($request->new_computer_skills); $i++){

                    // Create new language
                    $skill = new ComputerSkill;
                    $skill->name = $request->new_computer_skills[$i];
                    $skill->save();

                    // Create new vacancy language relation
                    $cv_skill                 = new CvComputerSkill;
                    $cv_skill->cv_id          = $cv->id;
                    $cv_skill->level          = $other_skill_levels[$i];
                    $cv_skill->computer_skill = $skill->name;
                    $cv_skill->save();

                }
            }
        }

        // Certificates

        if($request->has('certificates')){
            $other_certificate_levels = [];
            $other_certificates = [];

            for($i = 0; $i < count($request->certificates); $i++) {

                if($request->certificates[$i] == 'Digər') {

                    array_push($other_certificate_levels,      $request->certificate_levels[$i]);
                    array_push($other_certificates,            $request->certificates[$i]);

                } else {

                    $cv_cert                 = new CvCertificate;
                    $cv_cert->cv_id          = $cv->id;
                    $cv_cert->level          = $request->certificate_levels[$i];
                    $cv_cert->certificate_id = $request->certificates[$i];
                    $cv_cert->save();

                }
                
            }

            // If new certificate and it's level need to be created

            if($request->has('new_certificates')) {
                for($i = 0; $i < count($request->new_certificates); $i++){

                    // Create new language
                    $cert = new Certificate;
                    $cert->name = $request->new_certificates[$i];
                    $cert->save();

                    // Create new certificate level
                    $level = new CertificateLevel;
                    $level->certificate_id = $cert->id;
                    $level->name = $request->new_certificate_levels[$i];
                    $level->save();

                    // Create new vacancy language relation
                    $cv_cert                    = new CvCertificate;
                    $cv_cert->cv          = $cv->id;
                    $cv_cert->level       = $level->name;
                    $cv_cert->certificate = $cert->name;
                    $cv_cert->save();

                }
            }
        }

        $cv->save();

        return redirect()->route('cv.edit', $cv->id)->with('success', 'Cv uğurla yaradıldı');
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
    public function edit(Cv $cv)
    {
        $regions      = Region::all();
        $fields       = Field::all();
        $funcs        = Func::all();
        $positions    = Position::all();
        $languges     = Language::all();
        $skills       = ComputerSkill::all();
        $certificates = Certificate::all();
        $unis         = University::all();

        return view('front.cv.edit', compact(
            'cv',
            'regions',
            'fields',
            'funcs',
            'positions',
            'skills',
            'certificates',
            'unis'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
