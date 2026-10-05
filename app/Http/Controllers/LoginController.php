<?php

namespace App\Http\Controllers;

use App\Mail\StudentRegistrationMail;
use App\Models\categoryModel;
use App\Models\FetchSubCategory;
use App\Models\StudentRegistrationModel;
use App\Models\subCategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;


class LoginController extends Controller
{
    public function for_student()
    {
        // $categories = CategoryModel::all();
        return view('website.login-register.for-student');
    }


    public function for_student_registration(Request $request)
    {
        // ✅ 1. VALIDATION
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'religion' => 'required|string',
            'category' => 'required|string',
            'caste' => 'required|string',
            'aadhaar' => 'required|digits:12',
            'pan_card' => 'required|string',
            'blood' => 'nullable|string',
            'maritul_status' => 'required|string',
            'nationality' => 'required|string',
            'p_address' => 'required|string',
            'c_address' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'pin' => 'required|string|max:6',
            'mobile' => 'required|string|max:15',
            'alt_mobile' => 'string|max:15',
            'email' => 'required|email',
            'parent_email' => 'required|email',
            'courses' => 'required|string',
            'sub_courses' => 'required|string',
            'admission_mode' => 'required|string',
            'year_semester' => 'required|string',
            // 'exam_10' => 'required|string',
            // 'board_10' => 'required|string',
            // 'school_10' => 'required|string',
            // 'passing_year_10' => 'required|string',
            // 'percentage_10' => 'required|string',
            // 'roll_10' => 'required|string',
            // 'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            // 'signature' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            // 'aadhar_card' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'pan_card_certificate' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'bank_passbook' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'income_certificate' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'caste_certificate' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'domicile_certificate' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'transfer_certificate' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'migration_certificate' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'marksheet_10' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'marksheet_12' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'marksheet_grad' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'entrance_scorecard' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'account_holder_name' => 'required|string',
            // 'bank_name' => 'required|string',
            // 'account_number' => 'required|string',
            // 'ifsc_code' => 'required|string',
            // 'branch_name' => 'required|string',
            // 'declaration' => 'required|in:on',
            // 'digital_signature' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            // 'g-recaptcha-response' => 'required|captcha'

        ]);
        // // ✅ 2. GOOGLE RECAPTCHA SERVER VERIFICATION
        // $recaptcha = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret' => config('services.recaptcha.secret_key'),
        //     'response' => $request->input('g-recaptcha-response'),
        //     'remoteip' => $request->ip(),
        // ]);

        // $recaptchaBody = $recaptcha->json();

        // if (!($recaptchaBody['success'] ?? false)) {
        //     return back()->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed.'])->withInput();
        // }

        try {

            // ✅ 2. FILE UPLOAD TO PUBLIC/
            // $photo = $request->file('photo')->move(public_path('uploads/photos'), time() . '_' . $request->file('photo')->getClientOriginalName());
            // $signature = $request->file('signature')->move(public_path('uploads/signatures'), time() . '_' . $request->file('signature')->getClientOriginalName());
            // $aadhar = $request->file('aadhar_card')->move(public_path('uploads/aadhar'), time() . '_' . $request->file('aadhar_card')->getClientOriginalName());
            // $pan_card_certificate = $request->file('pan_card_certificate')->move(public_path('uploads/pan'), time() . '_' . $request->file('pan_card_certificate')->getClientOriginalName());
            // $bank = $request->file('bank_passbook')->move(public_path('uploads/bank'), time() . '_' . $request->file('bank_passbook')->getClientOriginalName());
            // $income = $request->file('income_certificate')->move(public_path('uploads/income'), time() . '_' . $request->file('income_certificate')->getClientOriginalName());
            // $caste = $request->file('caste_certificate')->move(public_path('uploads/caste'), time() . '_' . $request->file('caste_certificate')->getClientOriginalName());
            // $domicile = $request->file('domicile_certificate')->move(public_path('uploads/domicile'), time() . '_' . $request->file('domicile_certificate')->getClientOriginalName());
            // $transfer = $request->file('transfer_certificate')->move(public_path('uploads/transfer'), time() . '_' . $request->file('transfer_certificate')->getClientOriginalName());
            // $migration = $request->file('migration_certificate')->move(public_path('uploads/migration'), time() . '_' . $request->file('migration_certificate')->getClientOriginalName());
            // $marksheet_10 = $request->file('marksheet_10')->move(public_path('uploads/marksheet10'), time() . '_' . $request->file('marksheet_10')->getClientOriginalName());
            // $marksheet_12 = $request->file('marksheet_12')->move(public_path('uploads/marksheet12'), time() . '_' . $request->file('marksheet_12')->getClientOriginalName());
            // $marksheet_grad = $request->file('marksheet_grad')->move(public_path('uploads/marksheetgrad'), time() . '_' . $request->file('marksheet_grad')->getClientOriginalName());
            // $entrance_scorecard = $request->file('entrance_scorecard')->move(public_path('uploads/entrance_scorecard'), time() . '_' . $request->file('entrance_scorecard')->getClientOriginalName());
            // $digital_signature = $request->file('digital_signature')->move(public_path('uploads/digital_signature'), time() . '_' . $request->file('digital_signature')->getClientOriginalName());

            DB::table('for_student_registration')->insert([
                'full_name' => $validated['full_name'],
                'father_name' => $validated['father_name'],
                'mother_name' => $validated['mother_name'],
                'dob' => $validated['dob'],
                'gender' => $validated['gender'],
                'religion' => $validated['religion'],
                'category' => $validated['category'],
                'caste' => $validated['caste'],
                'aadhaar' => $validated['aadhaar'],
                'pan_card' => $validated['pan_card'],
                'blood' => $validated['blood'] ?? null,
                'maritul_status' => $validated['maritul_status'],
                'nationality' => $validated['nationality'],
                'p_address' => $validated['p_address'],
                'c_address' => $validated['c_address'],
                'state' => $validated['state'],
                'city' => $validated['city'],
                'pin' => $validated['pin'],
                'mobile' => $validated['mobile'],
                // 'alt_mobile' => $validated['alt_mobile'],
                'email' => $validated['email'],
                'parent_email' => $validated['parent_email'],
                'courses' => $validated['courses'],
                'sub_courses' => $validated['sub_courses'],
                'admission_mode' => $validated['admission_mode'],
                'year_semester' => $validated['year_semester'],
                // 'exam_10' => $validated['exam_10'],
                // 'board_10' => $validated['board_10'],
                // 'school_10' => $validated['school_10'],
                // 'passing_year_10' => $validated['passing_year_10'],
                // 'percentage_10' => $validated['percentage_10'],
                // 'roll_10' => $validated['roll_10'],
                // 'photo' => 'uploads/photos/' . basename($photo),
                // 'signature' => 'uploads/signatures/' . basename($signature),
                // 'aadhar_card' => 'uploads/aadhar/' . basename($aadhar),
                // 'pan_card_certificate' => 'uploads/pan/' . basename($pan_card_certificate),
                // 'bank_passbook' => 'uploads/bank/' . basename($bank),
                // 'income_certificate' => 'uploads/income/' . basename($income),
                // 'caste_certificate' => 'uploads/caste/' . basename($caste),
                // 'domicile_certificate' => 'uploads/domicile/' . basename($domicile),
                // 'transfer_certificate' => 'uploads/transfer/' . basename($transfer),
                // 'migration_certificate' => 'uploads/migration/' . basename($migration),
                // 'marksheet_10' => 'uploads/marksheet10/' . basename($marksheet_10),
                // 'marksheet_12' => 'uploads/marksheet12/' . basename($marksheet_12),
                // 'marksheet_grad' => 'uploads/marksheetgrad/' . basename($marksheet_grad),
                // 'entrance_scorecard' => 'uploads/entrance_scorecard/' . basename($entrance_scorecard),
                // 'account_holder_name' => $validated['account_holder_name'],
                // 'bank_name' => $validated['bank_name'],
                // 'account_number' => $validated['account_number'],
                // 'ifsc_code' => $validated['ifsc_code'],
                // 'branch_name' => $validated['branch_name'],
                'declaration' => $request->has('declaration') ? 1 : 0,
                'submission_date' => now(),
                // 'recaptcha_verified' => true, // Optional: track verification
                'created_at' => now(), // if timestamps exist
                'updated_at' => now(), // if timestamps exist
            ]);

            $data = [
                'full_name' => $request->full_name,
                'father_name' => $request->father_name,
                'dob' => $request->dob,
                'email' => $request->email,
                'p_address' => $request->p_address,
                'courses' => $request->courses,
                'sub_courses' => $request->sub_courses,
                'year_semester' => $request->year_semester,
            ];

            Mail::to($request->email)->send(new StudentRegistrationMail($data));

            return back()->with('success', 'Student registered successfully!');
        } catch (\Exception $e) {
            // 🐞 Log the error
            Log::error('Student Registration Failed: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    public function student_registration_view()
    {
        $registrations = StudentRegistrationModel::all();
        return view('website.login-register.student-registration-view', compact('registrations'));
    }

    public function studentshow($id)
    {
        $registrations = StudentRegistrationModel::findOrFail($id);
        return view('website.login-register.student-records-show', compact('registrations'));
    }

    public function student_records_delete($id)
    {
        $student = StudentRegistrationModel::findOrFail($id);
        $student->delete();
        return redirect()->route('student.registration.view');
    }

    public function for_faculty()
    {
        return view('website.login-register.for-faculty');
    }
}
