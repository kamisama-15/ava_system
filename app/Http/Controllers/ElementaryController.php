<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ElementaryController extends Controller
{
    //
    public function gradeOne()
    {
        $grade_one_students = DB::table('grade_one')
            ->where('grade_one_active', '1')
            ->get();
          
        $teachers = DB::table('teachers')
            ->get();
    
        $gr_one_sections = DB::table('gr_one_section')
            ->get();
    
        return view('elementary.gradeone.gradeone', compact('grade_one_students', 'teachers', 'gr_one_sections'));
    }
    
    public function addGradeOne(){
        
        $teachers = DB::table('teachers')
        ->get();
        $gr_one_sections = DB::table('gr_one_section')
        ->get();

        return view('elementary.gradeone.add_gradeone',compact('gr_one_sections','teachers'));
    }
    public function insertGradeOneStudent(Request $request){

        $last_name = $request->last_name;
        $first_name = $request->first_name;
        $middle_name = $request->middle_name;
        $gr_one_section_id = $request->gr_one_section_id;
        $tc_id = $request->tc_id;

        DB::table('grade_one')
        ->insert([
            // 'gr_one_uuid' => generateuuid(),
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_one_section_id' =>  $gr_one_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeOne');
    }
    public function deleteGradeOne($gr_one_student_id){
        DB::table('grade_one')
        ->where('gr_one_student_id', '=' ,$gr_one_student_id )
        ->update([
            'grade_one_active' => '0'
        ]);
        return redirect()->action('ElementaryController@gradeOne');
    }

    public function editGradeOne($gr_one_student_id){
        $teachers = DB::table('teachers')
        ->get();
        $gr_one_sections = DB::table('gr_one_section')
        ->get();
        $grade_one_students = DB::table('grade_one')
        ->where('gr_one_student_id', '=' ,$gr_one_student_id)
        ->first();
        return view('elementary.gradeone.edit_gradeone',compact('grade_one_students','teachers','gr_one_sections'));
    }

    public function updateGradeOneStudent(Request $request){
        $gr_one_student_id = $request->input('gr_one_student_id');
        $last_name = $request->input('last_name');
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $gr_one_section_id = $request->input('gr_one_section_id');
        $tc_id = $request->input('tc_id');

        DB::table('grade_one')
        ->where('gr_one_student_id', $gr_one_student_id)
        ->update([

            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_one_section_id' =>  $gr_one_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeOne');
    }


    public function viewGradeOne($gr_one_student_id){

        $grade_one_students = DB::table('grade_one')
        ->where('gr_one_student_id', '=' ,$gr_one_student_id)
        ->first();

        $family_types = DB::table('family_types')
        ->get();

        $citizenships = DB::table('citizenships')
        ->get();

        $blood_types = DB::table('blood_types')
        ->get();

        $civil_statuses = DB::table('civil_statuses')
        ->get();

        $gr_one_family = DB::table('gr_one_family')
        ->where('gr_one_student_id' , $gr_one_student_id)
        ->get();

        $total_grade_one_students = DB::table('grade_one')
        ->where('grade_one_active', '1')
        ->count();

        return view('elementary.gradeone.view_gradeone',compact('grade_one_students','family_types','citizenships','blood_types','civil_statuses','gr_one_family','total_grade_one_students'));
    }

    public function viewUpdateGradeOne(Request $request ){
        $gr_one_student_id =$request->input('gr_one_student_id');
        $gr_one_email = $request->input('gr_one_email');
        $gr_one_address = $request->input('gr_one_address');
        $gr_one_hobbies = $request->input('gr_one_hobbies');
        $gr_one_motto = $request->input('gr_one_motto');
        $gr_one_birthdate = $request->input('gr_one_birthdate');
        $gr_one_birth_place = $request->input('gr_one_birth_place');
        $gr_one_sex = $request->input('gr_one_sex');
        $civil_statuses = $request->input('civil_statuses');
        $gr_one_height = $request->input('gr_one_height');
        $gr_one_weight = $request->input('gr_one_weight');
        $citizenship_id = $request->input('citizenship_id');
        $bld_id = $request->input('bld_id');
        $gr_one_dual_citizenship = $request->input('gr_one_dual_citizenship');
        $gr_one_mobile_num = $request->input('gr_one_mobile_num');

        DB::table('grade_one')
        ->where('gr_one_student_id', '=' ,$gr_one_student_id)
        ->update([
            'gr_one_email' => $gr_one_email,
            'gr_one_address' => $gr_one_address,
            'gr_one_hobbies' => $gr_one_hobbies,
            'gr_one_motto' => $gr_one_motto,
            'gr_one_birthdate' => $gr_one_birthdate,
            'gr_one_birth_place' => $gr_one_birth_place,
            'gr_one_sex' => $gr_one_sex,
            'civil_statuses' => $civil_statuses,
            'gr_one_height' => $gr_one_height,
            'gr_one_weight' => $gr_one_weight,
            'citizenship_id' => $citizenship_id,
            'bld_id' => $bld_id,
            'gr_one_dual_citizenship' => $gr_one_dual_citizenship,
            'gr_one_mobile_num' => $gr_one_mobile_num
        ]);
        return redirect()->action('ElementaryController@viewGradeOne', ['gr_one_student_id' => $gr_one_student_id]);
    }

    public function gradeOneAddFamily(Request $request){

        $gr_one_student_id = $request->input('gr_one_student_id');
        $ftyp_id = $request->ftyp_id;
        $gr_one_last_name = $request->gr_one_last_name;
        $gr_one_first_name = $request->gr_one_first_name;
        $gr_one_middle_name = $request->gr_one_middle_name;
        $gr_one_ext_name = $request->gr_one_ext_name;
        $gr_one_birth_date = $request->gr_one_birth_date;
        $gr_one_occupation = $request->gr_one_occupation;
        $gr_one_address = $request->gr_one_address;
        $gr_one_mobile_num = $request->gr_one_mobile_num;

        DB::table('gr_one_family')
        ->insert([
            'gr_one_student_id' => $gr_one_student_id,
            'ftyp_id' => $ftyp_id,
            'gr_one_last_name' => $gr_one_last_name,
            'gr_one_first_name' => $gr_one_first_name,
            'gr_one_middle_name' => $gr_one_middle_name,
            'gr_one_ext_name' => $gr_one_ext_name,
            'gr_one_birth_date' => $gr_one_birth_date,
            'gr_one_occupation' => $ftyp_id,
            'gr_one_address' => $gr_one_address,
            'gr_one_mobile_num' => $gr_one_mobile_num
        ]);

        return redirect()->action('ElementaryController@viewGradeOne', ['gr_one_student_id' => $gr_one_student_id]);
    }

    public function gradeTwo(){
        $gr_two_sections = DB::table('gr_two_section')
        ->get();
        $teachers = DB::table('teachers')
        ->get();
        $grade_two_students = DB::table('grade_two')
        ->where('grade_two_active', '1')
        ->get();
        return view('elementary.gradetwo.gradetwo',compact('grade_two_students','gr_two_sections','teachers'));
    }

    public function addGradeTwo(){
        $gr_two_sections = DB::table('gr_two_section')
        ->get();
        $teachers = DB::table('teachers')
        ->get();

        return view('elementary.gradetwo.add_gradetwo',compact('teachers','gr_two_sections'));
    }
    public function insertGradeTwoStudent(Request $request){

        $last_name = $request->last_name;
        $first_name = $request->first_name;
        $middle_name = $request->middle_name;
        $gr_two_section_id = $request->gr_two_section_id;
        $tc_id = $request->tc_id;

        DB::table('grade_two')
        ->insert([
            // 'gr_two_uuid' => generateuuid(),
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_two_section_id' =>  $gr_two_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeTwo');
    }

    public function deleteGradeTwo($gr_two_student_id){
        DB::table('grade_two')
        ->where('gr_two_student_id', '=' ,$gr_two_student_id )
        ->update([
            'grade_two_active' => '0'
        ]);
        return redirect()->action('ElementaryController@gradeTwo');
    }

    public function editGradeTwo($gr_two_student_id){
        $gr_two_sections = DB::table('gr_two_section')
        ->get();
        $teachers = DB::table('teachers')
        ->get();
        $grade_two_students = DB::table('grade_two')
        ->where('gr_two_student_id', '=' ,$gr_two_student_id)
        ->first();
        return view('elementary.gradetwo.edit_gradetwo',compact('grade_two_students','gr_two_sections','teachers'));
    }

    public function updateGradeTwoStudent(Request $request){
        $gr_two_student_id = $request->input('gr_two_student_id');
        $last_name = $request->input('last_name');
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $gr_two_section_id = $request->input('gr_two_section_id');
        $tc_id = $request->input('tc_id');

        DB::table('grade_two')
        ->where('gr_two_student_id', $gr_two_student_id)
        ->update([
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_two_section_id' =>  $gr_two_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeTwo');
    }

    public function viewGradeTwo($gr_two_student_id){

        $grade_two_students = DB::table('grade_two')
        ->where('gr_two_student_id', '=' ,$gr_two_student_id)
        ->first();

        $family_types = DB::table('family_types')
        ->get();

        $citizenships = DB::table('citizenships')
        ->get();

        $blood_types = DB::table('blood_types')
        ->get();

        $civil_statuses = DB::table('civil_statuses')
        ->get();

        $gr_two_family = DB::table('gr_two_family')
        ->where('gr_two_student_id' , $gr_two_student_id)
        ->get();

        $total_grade_two_students = DB::table('grade_two')
        ->where('grade_two_active', '1')
        ->count();

        return view('elementary.gradetwo.view_gradetwo',compact('grade_two_students','family_types','citizenships','blood_types','civil_statuses','gr_two_family','total_grade_two_students'));
    }

    public function viewUpdateGradeTwo(Request $request ){
        $gr_two_student_id =$request->input('gr_two_student_id');
        $gr_two_email = $request->input('gr_two_email');
        $gr_two_address = $request->input('gr_two_address');
        $gr_two_hobbies = $request->input('gr_two_hobbies');
        $gr_two_motto = $request->input('gr_two_motto');
        $gr_two_birthdate = $request->input('gr_two_birthdate');
        $gr_two_birth_place = $request->input('gr_two_birth_place');
        $gr_two_sex = $request->input('gr_two_sex');
        $civil_statuses = $request->input('civil_statuses');
        $gr_two_height = $request->input('gr_two_height');
        $gr_two_weight = $request->input('gr_two_weight');
        $citizenship_id = $request->input('citizenship_id');
        $bld_id = $request->input('bld_id');
        $gr_two_dual_citizenship = $request->input('gr_two_dual_citizenship');
        $gr_two_mobile_num = $request->input('gr_two_mobile_num');

        DB::table('grade_two')
        ->where('gr_two_student_id', '=' ,$gr_two_student_id)
        ->update([
            'gr_two_email' => $gr_two_email,
            'gr_two_address' => $gr_two_address,
            'gr_two_hobbies' => $gr_two_hobbies,
            'gr_two_motto' => $gr_two_motto,
            'gr_two_birthdate' => $gr_two_birthdate,
            'gr_two_birth_place' => $gr_two_birth_place,
            'gr_two_sex' => $gr_two_sex,
            'civil_statuses' => $civil_statuses,
            'gr_two_height' => $gr_two_height,
            'gr_two_weight' => $gr_two_weight,
            'citizenship_id' => $citizenship_id,
            'bld_id' => $bld_id,
            'gr_two_dual_citizenship' => $gr_two_dual_citizenship,
            'gr_two_mobile_num' => $gr_two_mobile_num
        ]);
        return redirect()->action('ElementaryController@viewGradeTwo', ['gr_two_student_id' => $gr_two_student_id]);
    }

    public function gradeTwoAddFamily(Request $request){

        $gr_two_student_id = $request->input('gr_two_student_id');
        $ftyp_id = $request->ftyp_id;
        $gr_two_last_name = $request->gr_two_last_name;
        $gr_two_first_name = $request->gr_two_first_name;
        $gr_two_middle_name = $request->gr_two_middle_name;
        $gr_two_ext_name = $request->gr_two_ext_name;
        $gr_two_birth_date = $request->gr_two_birth_date;
        $gr_two_occupation = $request->gr_two_occupation;
        $gr_two_address = $request->gr_two_address;
        $gr_two_mobile_num = $request->gr_two_mobile_num;

        DB::table('gr_two_family')
        ->insert([
            'gr_two_student_id' => $gr_two_student_id,
            'ftyp_id' => $ftyp_id,
            'gr_two_last_name' => $gr_two_last_name,
            'gr_two_first_name' => $gr_two_first_name,
            'gr_two_middle_name' => $gr_two_middle_name,
            'gr_two_ext_name' => $gr_two_ext_name,
            'gr_two_birth_date' => $gr_two_birth_date,
            'gr_two_occupation' => $ftyp_id,
            'gr_two_address' => $gr_two_address,
            'gr_two_mobile_num' => $gr_two_mobile_num
        ]);

        return redirect()->action('ElementaryController@viewGradeTwo', ['gr_two_student_id' => $gr_two_student_id]);
    }

    public function gradeThree(){
        $gr_three_sections = DB::table('gr_three_section')
        ->get();
        $teachers = DB::table('teachers')
        ->get();
        $grade_three_students = DB::table('grade_three')
        ->where('grade_three_active', '1')
        ->get();
        return view('elementary.gradethree.gradethree',compact('grade_three_students','gr_three_sections','teachers'));
    }

    public function addGradeThree(){
        $gr_three_sections = DB::table('gr_three_section')
        ->get();
        $teachers = DB::table('teachers')
        ->get();
        return view('elementary.gradethree.add_gradethree',compact('teachers','gr_three_sections'));
    }

    public function insertGradeThreeStudent(Request $request){

        $last_name = $request->last_name;
        $first_name = $request->first_name;
        $middle_name = $request->middle_name;
        $gr_three_section_id = $request->gr_three_section_id;
        $tc_id = $request->tc_id;

        DB::table('grade_three')
        ->insert([
            // 'gr_three_uuid' => generateuuid(),
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_three_section_id' =>  $gr_three_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeThree');
    }

    public function deleteGradeThree($gr_three_student_id){
        DB::table('grade_three')
        ->where('gr_three_student_id', '=' ,$gr_three_student_id )
        ->update([
            'grade_three_active' => '0'
        ]);
        return redirect()->action('ElementaryController@gradeThree');
    }

    public function editGradeThree($gr_three_student_id){
        $gr_three_sections = DB::table('gr_three_section')
        ->get();
        $teachers = DB::table('teachers')
        ->get();

        $grade_three_students = DB::table('grade_three')
        ->where('gr_three_student_id', '=' ,$gr_three_student_id)
        ->first();
        return view('elementary.gradethree.edit_gradethree',compact('grade_three_students','gr_three_sections','teachers'));
    }

    public function updateGradeThreeStudent(Request $request){
        $gr_three_student_id = $request->input('gr_three_student_id');
        $last_name = $request->input('last_name');
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $gr_three_section_id = $request->input('gr_three_section_id');
        $tc_id = $request->input('tc_id');

        DB::table('grade_three')
        ->where('gr_three_student_id', '=' ,$gr_three_student_id)
        ->update([
            // 'gr_three_uuid' => generateuuid(),
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_three_section_id' =>  $gr_three_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeThree');
    }

    public function viewGradeThree($gr_three_student_id){

        $grade_three_students = DB::table('grade_three')
        ->where('gr_three_student_id', '=' ,$gr_three_student_id)
        ->first();

        $family_types = DB::table('family_types')
        ->get();

        $citizenships = DB::table('citizenships')
        ->get();

        $blood_types = DB::table('blood_types')
        ->get();

        $civil_statuses = DB::table('civil_statuses')
        ->get();

        $gr_three_family = DB::table('gr_three_family')
        ->where('gr_three_student_id' , $gr_three_student_id)
        ->get();

        $total_grade_three_students = DB::table('grade_three')
        ->where('grade_three_active', '1')
        ->count();

        return view('elementary.gradethree.view_gradethree',compact('grade_three_students','family_types','citizenships','blood_types','civil_statuses','gr_three_family','total_grade_three_students'));
    }

    public function viewUpdateGradeThree(Request $request ){
        $gr_three_student_id =$request->input('gr_three_student_id');
        $gr_three_email = $request->input('gr_three_email');
        $gr_three_address = $request->input('gr_three_address');
        $gr_three_hobbies = $request->input('gr_three_hobbies');
        $gr_three_motto = $request->input('gr_three_motto');
        $gr_three_birthdate = $request->input('gr_three_birthdate');
        $gr_three_birth_place = $request->input('gr_three_birth_place');
        $gr_three_sex = $request->input('gr_three_sex');
        $civil_statuses = $request->input('civil_statuses');
        $gr_three_height = $request->input('gr_three_height');
        $gr_three_weight = $request->input('gr_three_weight');
        $citizenship_id = $request->input('citizenship_id');
        $bld_id = $request->input('bld_id');
        $gr_three_dual_citizenship = $request->input('gr_three_dual_citizenship');
        $gr_three_mobile_num = $request->input('gr_three_mobile_num');

        DB::table('grade_three')
        ->where('gr_three_student_id', '=' ,$gr_three_student_id)
        ->update([
            'gr_three_email' => $gr_three_email,
            'gr_three_address' => $gr_three_address,
            'gr_three_hobbies' => $gr_three_hobbies,
            'gr_three_motto' => $gr_three_motto,
            'gr_three_birthdate' => $gr_three_birthdate,
            'gr_three_birth_place' => $gr_three_birth_place,
            'gr_three_sex' => $gr_three_sex,
            'civil_statuses' => $civil_statuses,
            'gr_three_height' => $gr_three_height,
            'gr_three_weight' => $gr_three_weight,
            'citizenship_id' => $citizenship_id,
            'bld_id' => $bld_id,
            'gr_three_dual_citizenship' => $gr_three_dual_citizenship,
            'gr_three_mobile_num' => $gr_three_mobile_num
        ]);
        return redirect()->action('ElementaryController@viewGradeThree', ['gr_three_student_id' => $gr_three_student_id]);
    }

    public function gradeThreeAddFamily(Request $request){

        $gr_three_student_id = $request->input('gr_three_student_id');
        $ftyp_id = $request->ftyp_id;
        $gr_three_last_name = $request->gr_three_last_name;
        $gr_three_first_name = $request->gr_three_first_name;
        $gr_three_middle_name = $request->gr_three_middle_name;
        $gr_three_ext_name = $request->gr_three_ext_name;
        $gr_three_birth_date = $request->gr_three_birth_date;
        $gr_three_occupation = $request->gr_three_occupation;
        $gr_three_address = $request->gr_three_address;
        $gr_three_mobile_num = $request->gr_three_mobile_num;

        DB::table('gr_three_family')
        ->insert([
            'gr_three_student_id' => $gr_three_student_id,
            'ftyp_id' => $ftyp_id,
            'gr_three_last_name' => $gr_three_last_name,
            'gr_three_first_name' => $gr_three_first_name,
            'gr_three_middle_name' => $gr_three_middle_name,
            'gr_three_ext_name' => $gr_three_ext_name,
            'gr_three_birth_date' => $gr_three_birth_date,
            'gr_three_occupation' => $ftyp_id,
            'gr_three_address' => $gr_three_address,
            'gr_three_mobile_num' => $gr_three_mobile_num
        ]);

        return redirect()->action('ElementaryController@viewGradeThree', ['gr_three_student_id' => $gr_three_student_id]);
    }





    public function gradeFour(){
        $grade_four_students = DB::table('grade_four')
        ->where('grade_four_active', '1')
        ->get();
        $gr_four_sections = DB::table('gr_four_section')
        ->get();
        $teachers = DB::table('teachers')
        ->get();


        return view('elementary.gradefour.gradefour',compact('grade_four_students','gr_four_sections','teachers'));
    }
    public function addGradeFour(){
        $teachers = DB::table('teachers')
        ->get();
        $gr_four_sections = DB::table('gr_four_section')
        ->get();

        return view('elementary.gradefour.add_gradefour',compact('gr_four_sections','gr_four_sections','teachers'));
    }
    public function insertGradeFourStudent(Request $request){

        $last_name = $request->last_name;
        $first_name = $request->first_name;
        $middle_name = $request->middle_name;
        $gr_four_section_id = $request->gr_four_section_id;
        $tc_id = $request->tc_id;

        DB::table('grade_four')
        ->insert([
            // 'gr_four_uuid' => generateuuid(),
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_four_section_id' =>  $gr_four_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeFour');
    }
    public function deleteGradeFour($gr_four_student_id){
        DB::table('grade_four')
        ->where('gr_four_student_id', '=' ,$gr_four_student_id )
        ->update([
            'grade_four_active' => '0'
        ]);
        return redirect()->action('ElementaryController@gradeFour');
    }

    public function editGradeFour($gr_four_student_id){

        $grade_four_students = DB::table('grade_four')
        ->where('gr_four_student_id', '=' ,$gr_four_student_id)
        ->first();
        $teachers = DB::table('teachers')
        ->get();
        $gr_four_sections = DB::table('gr_four_section')
        ->get();
        return view('elementary.gradefour.edit_gradefour',compact('grade_four_students','gr_four_sections','teachers'));
    }

    public function updateGradeFourStudent(Request $request){
        $gr_four_student_id = $request->input('gr_four_student_id');
        $last_name = $request->input('last_name');
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $gr_four_section_id = $request->input('gr_four_section_id');
        $tc_id = $request->input('tc_id');

        DB::table('grade_four')
        ->where('gr_four_student_id', '=' ,$gr_four_student_id)
        ->update([
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_four_section_id' =>  $gr_four_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeFour');
    }


    public function viewGradeFour($gr_four_student_id){

        $grade_four_students = DB::table('grade_four')
        ->where('gr_four_student_id', '=' ,$gr_four_student_id)
        ->first();

        $family_types = DB::table('family_types')
        ->get();

        $citizenships = DB::table('citizenships')
        ->get();

        $blood_types = DB::table('blood_types')
        ->get();

        $civil_statuses = DB::table('civil_statuses')
        ->get();

        $gr_four_family = DB::table('gr_four_family')
        ->where('gr_four_student_id' , $gr_four_student_id)
        ->get();

        $total_grade_four_students = DB::table('grade_four')
        ->where('grade_four_active', '1')
        ->count();

        return view('elementary.gradefour.view_gradefour',compact('grade_four_students','family_types','citizenships','blood_types','civil_statuses','gr_four_family','total_grade_four_students'));
    }

    public function viewUpdateGradeFour(Request $request ){
        $gr_four_student_id =$request->input('gr_four_student_id');
        $gr_four_email = $request->input('gr_four_email');
        $gr_four_address = $request->input('gr_four_address');
        $gr_four_hobbies = $request->input('gr_four_hobbies');
        $gr_four_motto = $request->input('gr_four_motto');
        $gr_four_birthdate = $request->input('gr_four_birthdate');
        $gr_four_birth_place = $request->input('gr_four_birth_place');
        $gr_four_sex = $request->input('gr_four_sex');
        $civil_statuses = $request->input('civil_statuses');
        $gr_four_height = $request->input('gr_four_height');
        $gr_four_weight = $request->input('gr_four_weight');
        $citizenship_id = $request->input('citizenship_id');
        $bld_id = $request->input('bld_id');
        $gr_four_dual_citizenship = $request->input('gr_four_dual_citizenship');
        $gr_four_mobile_num = $request->input('gr_four_mobile_num');

        DB::table('grade_four')
        ->where('gr_four_student_id', '=' ,$gr_four_student_id)
        ->update([
            'gr_four_email' => $gr_four_email,
            'gr_four_address' => $gr_four_address,
            'gr_four_hobbies' => $gr_four_hobbies,
            'gr_four_motto' => $gr_four_motto,
            'gr_four_birthdate' => $gr_four_birthdate,
            'gr_four_birth_place' => $gr_four_birth_place,
            'gr_four_sex' => $gr_four_sex,
            'civil_statuses' => $civil_statuses,
            'gr_four_height' => $gr_four_height,
            'gr_four_weight' => $gr_four_weight,
            'citizenship_id' => $citizenship_id,
            'bld_id' => $bld_id,
            'gr_four_dual_citizenship' => $gr_four_dual_citizenship,
            'gr_four_mobile_num' => $gr_four_mobile_num
        ]);
        return redirect()->action('ElementaryController@viewGradeFour', ['gr_four_student_id' => $gr_four_student_id]);
    }

    public function gradeFive(){

        $grade_five_students = DB::table('grade_five')
        ->where('grade_five_active', '1')
        ->get();
        $gr_five_sections = DB::table('gr_five_section')
        ->get();
        $teachers = DB::table('teachers')
        ->get();

        return view('elementary.gradefive.gradefive',compact('grade_five_students','gr_five_sections','teachers'));
    }

    public function addGradeFive(){

        $teachers = DB::table('teachers')
        ->get();
        $gr_five_sections = DB::table('gr_five_section')
        ->get();

        return view('elementary.gradefive.add_gradefive',compact('teachers','gr_five_sections'));
    }
    public function insertGradeFiveStudent(Request $request){

        $last_name = $request->last_name;
        $first_name = $request->first_name;
        $middle_name = $request->middle_name;
        $gr_five_section_id = $request->gr_five_section_id;
        $tc_id = $request->tc_id;

        DB::table('grade_five')
        ->insert([
            // 'gr_five_uuid' => generateuuid(),
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_five_section_id' =>  $gr_five_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeFive');
    }

    public function deleteGradeFive($gr_five_student_id){
        DB::table('grade_five')
        ->where('gr_five_student_id', '=' ,$gr_five_student_id )
        ->update([
            'grade_five_active' => '0'
        ]);
        return redirect()->action('ElementaryController@gradeFive');
    }

    public function editGradeFive($gr_five_student_id){

        $grade_five_students = DB::table('grade_five')
        ->where('gr_five_student_id', '=' ,$gr_five_student_id)
        ->first();
        $gr_five_sections = DB::table('gr_five_section')
        ->get();
        $teachers = DB::table('teachers')
        ->get();
        return view('elementary.gradefive.edit_gradefive',compact('grade_five_students','gr_five_sections','teachers'));
    }

    public function updateGradeFiveStudent(Request $request){
        $gr_five_student_id = $request->input('gr_five_student_id');
        $last_name = $request->input('last_name');
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $gr_five_section_id = $request->input('gr_five_section_id');
        $tc_id = $request->input('tc_id');

        DB::table('grade_five')
        ->where('gr_five_student_id', '=' ,$gr_five_student_id)
        ->update([
            // 'gr_five_uuid' => generateuuid(),
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_five_section_id' =>  $gr_five_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeFive');
    }

    public function viewGradeFive($gr_five_student_id){

        $grade_five_students = DB::table('grade_five')
        ->where('gr_five_student_id', '=' ,$gr_five_student_id)
        ->first();

        $family_types = DB::table('family_types')
        ->get();

        $citizenships = DB::table('citizenships')
        ->get();

        $blood_types = DB::table('blood_types')
        ->get();

        $civil_statuses = DB::table('civil_statuses')
        ->get();

        $gr_five_family = DB::table('gr_five_family')
        ->where('gr_five_student_id' , $gr_five_student_id)
        ->get();

        $total_grade_five_students = DB::table('grade_five')
        ->where('grade_five_active', '1')
        ->count();

        return view('elementary.gradefive.view_gradefive',compact('grade_five_students','family_types','citizenships','blood_types','civil_statuses','gr_five_family','total_grade_five_students'));
    }

    public function viewUpdateGradefive(Request $request ){
        $gr_five_student_id =$request->input('gr_five_student_id');
        $gr_five_email = $request->input('gr_five_email');
        $gr_five_address = $request->input('gr_five_address');
        $gr_five_hobbies = $request->input('gr_five_hobbies');
        $gr_five_motto = $request->input('gr_five_motto');
        $gr_five_birthdate = $request->input('gr_five_birthdate');
        $gr_five_birth_place = $request->input('gr_five_birth_place');
        $gr_five_sex = $request->input('gr_five_sex');
        $civil_statuses = $request->input('civil_statuses');
        $gr_five_height = $request->input('gr_five_height');
        $gr_five_weight = $request->input('gr_five_weight');
        $citizenship_id = $request->input('citizenship_id');
        $bld_id = $request->input('bld_id');
        $gr_five_dual_citizenship = $request->input('gr_five_dual_citizenship');
        $gr_five_mobile_num = $request->input('gr_five_mobile_num');

        DB::table('grade_five')
        ->where('gr_five_student_id', '=' ,$gr_five_student_id)
        ->update([
            'gr_five_email' => $gr_five_email,
            'gr_five_address' => $gr_five_address,
            'gr_five_hobbies' => $gr_five_hobbies,
            'gr_five_motto' => $gr_five_motto,
            'gr_five_birthdate' => $gr_five_birthdate,
            'gr_five_birth_place' => $gr_five_birth_place,
            'gr_five_sex' => $gr_five_sex,
            'civil_statuses' => $civil_statuses,
            'gr_five_height' => $gr_five_height,
            'gr_five_weight' => $gr_five_weight,
            'citizenship_id' => $citizenship_id,
            'bld_id' => $bld_id,
            'gr_five_dual_citizenship' => $gr_five_dual_citizenship,
            'gr_five_mobile_num' => $gr_five_mobile_num
        ]);
        return redirect()->action('ElementaryController@viewGradeFive', ['gr_five_student_id' => $gr_five_student_id]);
    }


    public function gradeSix(){
        $teachers = DB::table('teachers')
        ->get();
        $gr_six_sections = DB::table('gr_six_section')
        ->get();
        
        $grade_six_students = DB::table('grade_six')
        ->where('grade_six_active', '1')
        ->get();
        return view('elementary.gradesix.gradesix',compact('grade_six_students','teachers','gr_six_sections'));
    }

    public function addGradeSix(){

        $teachers = DB::table('teachers')
        ->get();
        $gr_six_sections = DB::table('gr_six_section')
        ->get();

        return view('elementary.gradesix.add_gradesix',compact('teachers','gr_six_sections'));
    }
    public function insertGradeSixStudent(Request $request){

        $last_name = $request->last_name;
        $first_name = $request->first_name;
        $middle_name = $request->middle_name;
        $gr_six_section_id = $request->gr_six_section_id;
        $tc_id = $request->tc_id;

        DB::table('grade_six')
        ->insert([
            // 'gr_six_uuid' => generateuuid(),
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_six_section_id' =>  $gr_six_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeSix');
    }

    public function deleteGradeSix($gr_six_student_id){
        DB::table('grade_six')
        ->where('gr_six_student_id', '=' ,$gr_six_student_id )
        ->update([
            'grade_six_active' => '0'
        ]);
        return redirect()->action('ElementaryController@gradeSix');
    }

    public function editGradeSix($gr_six_student_id){

        $grade_six_students = DB::table('grade_six')
        ->where('gr_six_student_id', '=' ,$gr_six_student_id)
        ->first();
        $gr_six_sections = DB::table('gr_six_section')
        ->get();
        $teachers = DB::table('teachers')
        ->get();
        return view('elementary.gradesix.edit_gradesix',compact('grade_six_students','gr_six_sections','teachers'));
    }

    public function updateGradeSixStudent(Request $request){
        $gr_six_student_id = $request->input('gr_six_student_id');
        $last_name = $request->input('last_name');
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $gr_six_section_id = $request->input('gr_six_section_id');
        $tc_id = $request->input('tc_id');

        DB::table('grade_six')
        ->where('gr_six_student_id', '=' ,$gr_six_student_id )
        ->update([
            // 'gr_six_uuid' => generateuuid(),
            'last_name' =>  $last_name,
            'first_name' =>  $first_name,
            'middle_name' =>  $middle_name,
            'gr_six_section_id' =>  $gr_six_section_id,
            'tc_id' =>  $tc_id
        ]);

        return redirect()->action('ElementaryController@gradeSix');
    }

    public function viewGradeSix($gr_six_student_id){

        $grade_six_students = DB::table('grade_six')
        ->where('gr_six_student_id', '=' ,$gr_six_student_id)
        ->first();

        $family_types = DB::table('family_types')
        ->get();

        $citizenships = DB::table('citizenships')
        ->get();

        $blood_types = DB::table('blood_types')
        ->get();

        $civil_statuses = DB::table('civil_statuses')
        ->get();

        $gr_six_family = DB::table('gr_six_family')
        ->where('gr_six_student_id' , $gr_six_student_id)
        ->get();

        $total_grade_six_students = DB::table('grade_six')
        ->where('grade_six_active', '1')
        ->count();

        return view('elementary.gradesix.view_gradesix',compact('grade_six_students','family_types','citizenships','blood_types','civil_statuses','gr_six_family','total_grade_six_students'));
    }

    public function viewUpdateGradeSix(Request $request ){
        $gr_six_student_id =$request->input('gr_six_student_id');
        $gr_six_email = $request->input('gr_six_email');
        $gr_six_address = $request->input('gr_six_address');
        $gr_six_hobbies = $request->input('gr_six_hobbies');
        $gr_six_motto = $request->input('gr_six_motto');
        $gr_six_birthdate = $request->input('gr_six_birthdate');
        $gr_six_birth_place = $request->input('gr_six_birth_place');
        $gr_six_sex = $request->input('gr_six_sex');
        $civil_statuses = $request->input('civil_statuses');
        $gr_six_height = $request->input('gr_six_height');
        $gr_six_weight = $request->input('gr_six_weight');
        $citizenship_id = $request->input('citizenship_id');
        $bld_id = $request->input('bld_id');
        $gr_six_dual_citizenship = $request->input('gr_six_dual_citizenship');
        $gr_six_mobile_num = $request->input('gr_six_mobile_num');

        DB::table('grade_six')
        ->where('gr_six_student_id', '=' ,$gr_six_student_id)
        ->update([
            'gr_six_email' => $gr_six_email,
            'gr_six_address' => $gr_six_address,
            'gr_six_hobbies' => $gr_six_hobbies,
            'gr_six_motto' => $gr_six_motto,
            'gr_six_birthdate' => $gr_six_birthdate,
            'gr_six_birth_place' => $gr_six_birth_place,
            'gr_six_sex' => $gr_six_sex,
            'civil_statuses' => $civil_statuses,
            'gr_six_height' => $gr_six_height,
            'gr_six_weight' => $gr_six_weight,
            'citizenship_id' => $citizenship_id,
            'bld_id' => $bld_id,
            'gr_six_dual_citizenship' => $gr_six_dual_citizenship,
            'gr_six_mobile_num' => $gr_six_mobile_num
        ]);
        return redirect()->action('ElementaryController@viewGradeSix', ['gr_six_student_id' => $gr_six_student_id]);
    }
}
