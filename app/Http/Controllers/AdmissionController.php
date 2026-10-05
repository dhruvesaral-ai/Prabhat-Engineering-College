<?php

namespace App\Http\Controllers;

use App\Mail\AdmissionConfirmationMail;
use App\Mail\NewAdmissionNotificationMail;
use App\Mail\onlineRegistrationMail;
use App\Mail\OnlineRegistrationMail as MailOnlineRegistrationMail;
use App\Models\AdmissionEnquiryModel;
use App\Models\OnlineRegistrationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class AdmissionController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

public function admission_store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'required|string|digits:10',
        'email' => 'required|string|email',
        'courses' => 'required|string|max:255',
    ]);

    try {
        // Store the enquiry
        DB::table('admission_enquiry')->insert([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'courses' => $request->courses,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'courses' => $request->courses,
        ];

        // Send confirmation email to the user
        Mail::to($request->email)->send(new AdmissionConfirmationMail($data));

        // Send notification email to the college
        Mail::to('info@prabhateng.co.in')->send(new NewAdmissionNotificationMail($data));

        return redirect()->back()->with('success', 'Admission Enquiry Registered Successfully.');
    } catch (\Exception $e) {
        Log::error('Admission Store Error: ' . $e->getMessage(), [
            'request_data' => $request->all(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
        ]);
        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }
}

    public function admission_enquiry_view()
    {
        $enquiries = AdmissionEnquiryModel::all();
        return view('website.admissions.enquiry-view', compact('enquiries'));
    }

    public function enquiry_delete($id)
    {
        try {
            $delete = AdmissionEnquiryModel::findOrFail($id);
            $delete->delete();
             return redirect()->back()->with('success','Admission Enquiry Deleted Successfully');

        
        } catch (\Exception $e) {
            return redirect()->back()->with('error','Something Went Wrong Please try again...');
        }
    }




    public function fee_structure()
    {
        return view('website.admissions.fee-structure');
    }

    public function online_registration()
    {
        return view('website.admissions.online-student-ragistration');
    }

    
    public function admission_cell()
    {
        return view('website.admissions.admission-cell');
    }

    public function online_registration_store(Request $request)
    {
        $request->validate([
            'courses' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|string|email',
            'contact_phone' => 'required|string|digits:10',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'caste' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'pin' => 'required|string|max:10',
            'father_name' => 'required|string|max:255',
            'father_mobile' => 'required|string|digits:10',
            'father_occupation' => 'nullable|string|max:255',
            'mothers_name' => 'required|string|max:255',
            'academic' => 'required|string|max:255',
            'institute_name' => 'required|string|max:255',
            'percentage_grade' => 'required|string|max:10',
            'examination_board' => 'required|string|max:255',
        ]);
        try {
            $fileName = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '_' . $file->getClientOriginalName(); // Create a unique name
                $file->move(public_path('registration_files'), $fileName); // Save in public/
            }

            DB::table('online_registrations')->insert([
                'courses' => $request->courses,
                'contact_name' => $request->contact_name,
                'contact_email' => $request->contact_email,
                'contact_phone' => $request->contact_phone,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'caste' => $request->caste,
                'file' => $fileName,
                'address' => $request->address,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'pin' => $request->pin,
                'father_name' => $request->father_name,
                'father_mobile' => $request->father_mobile,
                'father_occupation' => $request->father_occupation,
                'mothers_name' => $request->mothers_name,
                'academic' => $request->academic,
                'institute_name' => $request->institute_name,
                'percentage_grade' => $request->percentage_grade,
                'examination_board' => $request->examination_board,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            
        $data = [
             'contact_name' => $request->contact_name,
             'contact_email' => $request->contact_email,
             'contact_phone' => $request->contact_phone,
             'courses' => $request->courses,
        ];

        // Send confirmation email to the user
        Mail::to($request->contact_email)->send(new MailOnlineRegistrationMail($data));


            return redirect()->back()->with('success', 'Online Registration Successfully Submitted.');
        } catch (\Exception $e) {
            Log::error('Online Registration Store Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all(),
            ]);
            return redirect()->back()->with('error', 'Something Went Wrong. Please Try Agian');
        }
    }

    public function online_registration_view()
    {
        $registrations =  OnlineRegistrationModel::all();
        return view('website.admissions.online-registration-view', compact('registrations'));
    }

    public function online_registration_delete($id){
        try{
              $registrations=OnlineRegistrationModel::findOrFail($id);
              $registrations->delete();
            //   Alert::success('Success','Online Registration Successfully Submitted...');
            return redirect()->back()->with('success','Online Registration Deleted Successfully');
        }
        catch(\Exception $e){
            // Alert::error('Error','Something Went wrong please try again...');
                        return redirect()->back()->with('error','Something Went Wrong please Try again...');

            // return redirect()->back();
        }
    }


    public function placement_cell()
    {
        return view('website.training.placement-cell');
    }
    public function placement_records()
    {
        return view('website.training.placement-records');
    }
}
