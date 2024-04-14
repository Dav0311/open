<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\StudentController;

class MailController extends Controller
{

    // public static function sendEmail()
    // {
    //     $email = $request->input('email');
    //     $reg_number = $request->input('reg_number');
    //     $password = $request->input('password');

    //     // Assuming you pass student_id in the request
    //     $studentId = $request->input('student_id');
       
    //     $student = Student::find($studentId);
        

    //     $data = [
    //         'email' => $email,
    //         'password' => $password,
    //         'reg_number' => $reg_number
    //     ];
        
    //   dd($data);

    //     if($data)
    //     {
    //         Mail::to($email)->send(new WelcomeEmail($data));
    //         echo "sent mail";
    //         return true;
    //     }else {
    //         echo "failed to send ";
    //         Log::error($e->getMessage());
    //         return false;
    //     }

      
    // }


    public function sendEmail()
    {
        // Retrieve data from the database
        $students = User::all();
    
        // Prepare email content
        $title = 'Welcome to UICT Open Library system';
        $body = 'Please use these as your Mobile application login Credentials';
    
        // Send email
        try {
            foreach ($students as $student) {
                Mail::to($student->email)->send(new WelcomeEmail($title, $body, $student));
            }
            return "Email sent successfully";
        } catch (\Exception $e) {
            // Handle email sending failure
            return "Failed to send email: " . $e->getMessage();
        }
    }
    
    

}
