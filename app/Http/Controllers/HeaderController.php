<?php

namespace App\Http\Controllers;

use App\Mail\FacultyRegistrationMail;
use App\Mail\StaffRegistrationMail;
use App\Models\FacultyCareerModel;
use App\Models\FacultyModel;
use App\Models\OnlineFeeModel;
use App\Models\StaffFormModel;
use App\Models\StudentFeedbackModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Ramsey\Uuid\Codec\OrderedTimeCodec;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;


class HeaderController extends Controller
{
    public function online_payment()
    {
        return view('website.login-register.online-payment');
    }
public function storeFee(Request $request)
{
    try {
        // Log raw input for debugging
        Log::info('Incoming Fee Request', ['raw_input' => $request->getContent()]);

        // Decode JSON input
        $data = $request->json()->all();

        // Log parsed data
        Log::info('Parsed JSON Data', $data);

        // Validate JSON data
        $validator = Validator::make($data, [
            'contact_name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|string',
            'course' => 'required|string',
            'roll_no' => 'required|string',
            'amount' => 'required|numeric',
            'razorpay_payment_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            Log::error('Validation Failed', ['errors' => $validator->errors()]);
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        // Save data
        OnlineFeeModel::create([
            'contact_name' => $data['contact_name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'course' => $data['course'],
            'roll_no' => $data['roll_no'],
            'amount_inr' => $data['amount'] / 100,
            'razorpay_payment_id' => $data['razorpay_payment_id'],
        ]);

        Log::info('Fee saved successfully', ['email' => $data['email']]);

        return response()->json(['success' => true]);

    } catch (\Exception $e) {
        Log::error('Exception occurred while saving fee', ['message' => $e->getMessage()]);
        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
}


public function thanks(){
    return view('website.login-register.thank-you');
}
public function payment_view()
{
    $fees=OnlineFeeModel::all();
    return view('website.login-register.payment-view',compact('fees'));
}

public function payment_delete($id)
{
  $fee_delete= OnlineFeeModel::findOrFail($id);
  $fee_delete->delete();
  return redirect()->back()->with('success','Payment SuccessFully Deleted');
}


    public function careers()
    {
        return view('website.login-register.career');
    }

    public function faculty_career_form(){
        return view('website.login-register.faculty-career-form');
    }


    public function faculty_career_store(Request $request)
    {
       $request->validate([
            'post_applied' => 'required|string',
            'department' => 'required|string',
            'full_name' => 'required|string',
            'email' => 'required|email|unique:faculty_career_form,email',
            'experience' => 'required|integer|min:0',
            'highest_degree' => 'required|string',
            'phone' => 'required|digits:10',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);
        try {
            // dd($request->all());
            // Store file
                   $resumeFile = $request->file('resume');
                   $resumeName = time() . '_' . $resumeFile->getClientOriginalName();
                   $resumeFile->move(public_path('resumes'), $resumeName);
                   $resumePath = 'resumes/' . $resumeName;

            // Save data
         DB::table('faculty_career_form')->insert([
                'post_applied' => $request->post_applied,
                'department' => $request->department,
                'full_name' => $request->full_name,
                'email' => $request->email,
                'experience' => $request->experience,
                'highest_degree' => $request->highest_degree,
                'phone' => $request->phone,
                'resume' => $resumePath, 
            ]);

            $data=[
                'post_applied'=>$request->post_applied,
                'department'=>$request->department,
                'full_name'=>$request->full_name,
                'email'=>$request->email,
                'highest_degree'=>$request->highest_degree,
            ];

            Mail::to($request->email)->send(new FacultyRegistrationMail($data));

            return back()->with('success', 'Application submitted successfully.');
        } catch (\Exception $e) {
            Log::error('Faculty Career Form Submission Failed: ' . $e->getMessage(), [
                'line' => $e->getLine(),
                'file' => $e->getFile(),
                'trace' => $e->getTraceAsString()
            ]);

            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    
     public function faculty_career_view(){
        $faculties=FacultyCareerModel::all();
        return view('website.login-register.faculty-career-view',compact('faculties'));
    }

    public function faculty_download_resume($id)
{
    $faculty = FacultyCareerModel::findOrFail($id);

    $filePath = public_path($faculty->resume); // e.g., resumes/file.pdf

    if (file_exists($filePath)) {
        return response()->download($filePath);
    } else {
        return back()->with('error', 'Resume file not found.');
    }
}

public function faculty_view_resume($id)
{
    $faculty = FacultyCareerModel::findOrFail($id);

    $filePath = public_path($faculty->resume); // e.g., resumes/file.pdf

    if (file_exists($filePath)) {
        return response()->file($filePath, [
            'Content-Type' => 'application/pdf'
        ]);
    } else {
        return back()->with('error', 'Resume file not found.');
    }
}




    public function faculty_records_delete($id)
{
    try {
        $delete = FacultyCareerModel::findOrFail($id);
        $delete->delete();
        return redirect()->route('faculty.view');

        // Log success message
        Log::info("Faculty record deleted successfully. ID: {$id}");
    } catch (Exception $e) {
        // Log error message
        Log::error("Failed to delete faculty record. ID: {$id}. Error: " . $e->getMessage());
    }
}
    public function for_staff_form(){
        return view('website.login-register.for-staff-form');
    }

    
public function staff_store(Request $request)
{
    try {
        $request->validate([
            'post_applied' => 'required|string',
            'full_name' => 'required|string',
            'email' => 'required|email|unique:staff_form,email',
            'experience' => 'required|integer|min:0',
            'highest_degree' => 'required|string',
            'phone' => 'required|digits:10',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Resume upload
        $resumeFile = $request->file('resume');
        $resumeName = time() . '_' . $resumeFile->getClientOriginalName();
        $resumeFile->move(public_path('resumes'), $resumeName);
        $resumePath = 'resumes/' . $resumeName;

        // Insert into DB
        DB::table('staff_form')->insert([
            'post_applied' => $request->post_applied,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'experience' => $request->experience,
            'highest_degree' => $request->highest_degree,
            'phone' => $request->phone,
            'resume' => $resumePath,
        ]);

        // Send mail
        $data = [
            'post_applied' => $request->post_applied,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'highest_degree' => $request->highest_degree,
        ];
        Mail::to($request->email)->send(new StaffRegistrationMail($data));

        return back()->with('success', 'Application submitted successfully.');

    } 
    catch (ValidationException $ve) 
    {
        Log::error('Validation Error: ' . json_encode($ve->errors()));
        return back()->withErrors($ve->errors())->withInput();
    } 
    catch (\Exception $e) 
    {
        Log::error('Staff Form Submission Failed: ' . $e->getMessage(), [
            'line' => $e->getLine(),
            'file' => $e->getFile(),
            'trace' => $e->getTraceAsString(),
        ]);
        return back()->with('error', 'Something went wrong. Please try again.');
    }
}
public function downloadResume($id)
{
    $staff = StaffFormModel::findOrFail($id);

    $filePath = public_path($staff->resume); // assuming $staff->resume = 'resumes/file.pdf'

    if (file_exists($filePath)) {
        return response()->download($filePath);
    } else {
        return back()->with('error', 'Resume file not found.');
    }
}

public function staff_records_delete($id)
{
   try {
        $delete = StaffFormModel::findOrFail($id);
        $delete->delete();

        return redirect()->route('staff.view');

        // Log success message
        Log::info("Faculty record deleted successfully. ID: {$id}");
    } catch (Exception $e) {
        // Log error message
        Log::error("Failed to delete faculty record. ID: {$id}. Error: " . $e->getMessage());
    }
}

    public function for_staff_view(){
        $staffs=StaffFormModel::all();
        return view('website.login-register.staff-form-view',compact('staffs'));
    }

    public function staff_view_resume($id)
    {
          $faculty = StaffFormModel::findOrFail($id);

    $filePath = public_path($faculty->resume); // e.g., resumes/file.pdf

    if (file_exists($filePath)) {
        return response()->file($filePath, [
            'Content-Type' => 'application/pdf'
        ]);
    } else {
        return back()->with('error', 'Resume file not found.');
    }

    }

    // public function print_pdf($id){
    //     $data= Order::find($id);
    //     $pdf=Pdf::loadView('pdf.invoice',$data);
    //     return $pdf->download('invoice.pdf');
    // }


    public function faculty_feedback()
    {
        return view('website.pages.faculty-feedback');
    }

    public function faculty_feedback_store(Request $request)
    {
        $request->validate([
            'contact_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'suggestions' => 'required|string|max:255'
        ]);
        try {
            DB::table('faculty_feedback')->insert([
                'contact_name' => $request->contact_name,
                'department' => $request->department,
                'designation' => $request->designation,
                'suggestions' => $request->suggestions,
                'created_at'=>now(),
                'updated_at'=>now(),

            ]);
        
            return redirect()->back()->with('success','Faculty Feedback Registered Successfully');
        } catch (\Exception $e) {
            Log::error(
                "Admission Store Error:" . $e->getMessage(),
                [
                    'request_data' => $request->all(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                ]
            );
        
            return redirect()->back()->with('error','Something Went Wrong please try again...');
        }
    }
    public function faculty_feed_view(){
        $faculties=FacultyModel::all();
        return view('website.pages.faculty-feedback-view',compact('faculties'));
    }

    public function faculty_feed_delete($id){
        try{
             $facultyFeed=FacultyModel::findOrFail($id);
             $facultyFeed->delete();
        
            return redirect()->back()->with('success','Faculty Deleted Successfully');
        }
        catch(\Exception $e){
          return redirect()->back()->with('error','Somethig Went Wrong Please try again...');
        }
        
    }



    public function student_feedback()
    {
        return view('website.pages.student-feedback');
    }

    public function student_feedback_store(Request $request)
    {
        $request->validate([
            'contact_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'suggestions' => 'required|string|max:255'
        ]);
        try {
            DB::table('student_feedback')->insert([
                'contact_name' => $request->contact_name,
                'department' => $request->department,
                'designation' => $request->designation,
                'suggestions' => $request->suggestions,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
    
            return redirect()->back()->with('success','Student Feedback Registered Successfully');
        } catch (\Exception $e) {
            Log::error([
                'request_data' => $request->all(),
                'file' => $e->getFile(),
                'file' => $e->getLine(),
            ]);
        
            return redirect()->back()->with('error','Something Went Wrong please try again');
        }
    }

    public function student_feed_view(){
        $students=StudentFeedbackModel::all();
        return view('website.pages.student-feedback-view',compact('students'));
    }

    public function student_feedback_delete($id){
       try{
         $stuFeed=StudentFeedbackModel::findOrFail($id);
        $stuFeed->delete();
        Alert::success('Success','Student Feedback Deleted Successfully...');
            return redirect()->back()->with('success','Student Feedback Deleted Successfully');
       }
       catch(\Exception $e){
        
                    return redirect()->back()->with('error','Something Went Wrong please try again...');
       }

    }


}
