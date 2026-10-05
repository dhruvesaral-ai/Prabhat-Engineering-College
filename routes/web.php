<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\subCategoryConntroller;
use Database\Seeders\adminSeeder;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;




Route::get('', [homeController::class, 'index'])->name('index');
     Route::group(['middleware' => ['admin']], function () {
     Route::get('category', [categoryController::class, 'category'])->name('category');
     Route::POST('category-store',[categoryController::class, 'category_store'])->name('category.store');
 // Change from parameterized route to query parameter route
 // In routes/web.php

     Route::POST('sub-category-store', [categoryController::class, 'subcategory_store'])->name('sub.category.store');
     Route::get('dashboard', [adminController::class, 'admin_dashboard'])->name('admin.dashboard');
     Route::get('admission-enquiry', [AdmissionController::class, 'admission_enquiry_view'])->name('admission.enquiry.view');
     Route::get('online-registration-view', [AdmissionController::class, 'online_registration_view'])->name('online.registration.view');
     Route::get('faculty-feedback-view', [HeaderController::class, 'faculty_feed_view'])->name('faculty.feedback.view');
     Route::get('student-feedback-view', [HeaderController::class, 'student_feed_view'])->name('student.feedback.view');
     Route::get('student-feedback-delete/{id}', [HeaderController::class, 'student_feedback_delete'])->name('student.feedback.delete');
});


Route::post('admin-loggedin', [adminController::class, 'admin_loggedin'])->name('admin.login.submit');
Route::get('admin-logout', [adminController::class, 'admin_logout'])->name('admin.logout');
Route::post('contact-store', [homeController::class, 'contact_store'])->name('contact.store');
Route::get('about-us', [AboutController::class, 'about_us'])->name('about.college');
Route::get('director-message', [AboutController::class, 'director_message'])->name('director.message');
Route::get('chairman-message', [AboutController::class, 'chairman_message'])->name('chairman.message');
Route::get('administrator', [AboutController::class, 'administrator'])->name('administrator.message');
Route::get('pricipal-message', [AboutController::class, 'pricipal_message'])->name('principal.message');
Route::get('pharmacy-principal-message', [AboutController::class, 'pharmacy_principal_message'])->name('pharmacy.principal.message');

Route::get('fee-structure', [AdmissionController::class, 'fee_structure'])->name('fee.structure');
Route::post('admission-store', [AdmissionController::class, 'admission_store'])->name('admission.store');
Route::get('admission-enquiry-delete/{id}', [AdmissionController::class, 'enquiry_delete'])->name('enquiry.delete');


Route::get('online-student-registration', [AdmissionController::class, 'online_registration'])->name('online.registration');
Route::post('online-registration-store', [AdmissionController::class, 'online_registration_store'])->name('online.registration.store');
Route::delete('online-registration-delete/{id}', [AdmissionController::class, 'online_registration_delete'])->name('online.registration.delete');
Route::get('admission-cell', [AdmissionController::class, 'admission_cell'])->name('admission.cell');



Route::get('placement-cell', [AdmissionController::class, 'placement_cell'])->name('placement.cell');
Route::get('placement-records', [AdmissionController::class, 'placement_records'])->name('placement.records');


Route::get('computer-engineering', [CoursesController::class, 'computer_engineering'])->name('computer.engineering');
Route::get('elcetronic-engineering', [CoursesController::class, 'electronic_engineering'])->name('electronic.engineering');
Route::get('science-humanities', [CoursesController::class, 'science_humanities'])->name('science.humanities');
Route::get('electrical-engineering', [CoursesController::class, 'electrical_engineering'])->name('electrical.engineering');
Route::get('mechanical-engineering', [CoursesController::class, 'mechanical_engineering'])->name('mechanical.engineering');
Route::get('civil-engineering', [CoursesController::class, 'civil_engineering'])->name('civil.engineering');
Route::get('polytechnic', [CoursesController::class, 'polytechnic'])->name('polytechnic');

Route::get('polytechnic-me', [CoursesController::class, 'polytechnic_me'])->name('polytechnic.me');
Route::get('polytechnic-me-p', [CoursesController::class, 'polytechnic_me_p'])->name('polytechnic.me.p');
Route::get('polytechnic-ce', [CoursesController::class, 'polytechnic_ce'])->name('polytechnic.ce');
Route::get('polytechnic-ee', [CoursesController::class, 'polytechnic_ee'])->name('polytechnic.ee');

Route::get('b-pharma', [CoursesController::class, 'b_pharm'])->name('b.pharm');
Route::get('d-pharma', [CoursesController::class, 'd_pharm'])->name('d.pharm');


Route::get('mba', [CoursesController::class, 'mba'])->name('mba');


Route::get('mba-finance', [CoursesController::class, 'mba_finance'])->name('mba.finance');
Route::get('mba-marketing', [CoursesController::class, 'mba_marketing'])->name('mba.marketing');
Route::get('mba-hrm', [CoursesController::class, 'mba_hrm'])->name('mba.hrm');
Route::get('mba-it', [CoursesController::class, 'mba_it'])->name('mba.it');
Route::get('mba-internation-business', [CoursesController::class, 'mba_internation_business'])->name('mba.internation.business');
Route::get('mba-operation-management', [CoursesController::class, 'mba_operation_management'])->name('mba.operation.management');


Route::get('feedback', [HeaderController::class, 'feedback'])->name('feedback');
Route::get('online-payment', [HeaderController::class, 'online_payment'])->name('online.payment');
Route::post('store-fee', [HeaderController::class, 'storeFee'])->name('store.fee');
Route::get('thank-you', [HeaderController::class, 'thanks'])->name('thank.you');
Route::get('payment-records', [HeaderController::class, 'payment_view'])->name('payment.records');
Route::delete('payment-records-delete/{id}', [HeaderController::class, 'payment_delete'])->name('payment.delete');
Route::get('careers', [HeaderController::class, 'careers'])->name('careers');
Route::get('faculty-career-form', [HeaderController::class, 'faculty_career_form'])->name('faculty.career.form');
Route::post('faculty-career-store', [HeaderController::class, 'faculty_career_store'])->name('faculty.career.store');
Route::get('faculty-career-view', [HeaderController::class, 'faculty_career_view'])->name('faculty.view');
Route::get('/faculty-download-resume/{id}', [HeaderController::class, 'faculty_download_resume'])
     ->name('faculty.resume.download');

Route::get('/faculty-view-resume/{id}', [HeaderController::class, 'faculty_view_resume'])
     ->name('faculty.view.resume');

Route::delete('faculty-records-delete/{id}', [HeaderController::class, 'faculty_records_delete'])->name('faculty.records.delete');


Route::get('for-staff-form', [HeaderController::class, 'for_staff_form'])->name('for.staff.forms');
Route::post('staff-form-store', [HeaderController::class, 'staff_store'])->name('staff.store');
Route::get('staff-form-view', [HeaderController::class, 'for_staff_view'])->name('staff.view');
Route::get('staff-form-resume/{id}', [HeaderController::class, 'staff_view_resume'])->name('staff.view.resume');


Route::get('/download-resume/{id}', [HeaderController::class, 'downloadResume'])->name('staff.resume.download');

Route::delete('staff-records-delete/{id}', [HeaderController::class, 'staff_records_delete'])->name('staff.records.delete');


Route::get('faculty-feedback', [HeaderController::class, 'faculty_feedback'])->name('faculty.feedback');
Route::post('faculty-feedback-store', [HeaderController::class, 'faculty_feedback_store'])->name('faculty.feedback.store');
Route::delete('faculty-feedback-delete/{id}', [HeaderController::class, 'faculty_feed_delete'])->name('faculty.feedback.delete');


Route::get('student-feedback', [HeaderController::class, 'student_feedback'])->name('student.feedback');
Route::post('student-feedback-store', [HeaderController::class, 'student_feedback_store'])->name('student.feedback.store');




Route::get('contact-us', [ContactController::class, 'contact_us'])->name('contact.us');
Route::get('gallery-records', [ContactController::class, 'gallery_records'])->name('gallery.records');

Route::get('for-student', [LoginController::class, 'for_student'])->name('for.student');
Route::post('for-student-registration', [LoginController::class, 'for_student_registration'])->name('for.student.registration');
Route::get('student-registration-view', [LoginController::class, 'student_registration_view'])->name('student.registration.view');
Route::get('student-record-show/{id}', [LoginController::class, 'studentshow'])->name('student.records.show');
Route::delete('student-records-delete/{id}', [LoginController::class, 'student_records_delete'])->name('student.records.delete');




Route::get('for-faculty', [LoginController::class, 'for_faculty'])->name('for.faculty');


Route::get('login', [adminController::class, 'admin_login'])->name('admin.login');
Route::post('admin-logedin', [adminController::class, 'admin_logedin'])->name('admin.logedin');
Route::get('student-login', [studentController::class, 'student_login'])->name('student.login');
Route::post('student-logedin', [studentController::class, 'student_logedin'])->name('student.logedin');
