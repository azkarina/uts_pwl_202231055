<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->departement=$request->departement;
        $data->status='In progress';
        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }
        
        $data->save();

        return redirect()->back()->with('message','Appointment Request Successful');
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();
            return view('home.my_appointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }



    public function cancel_appoint($id)
{
    $data = Appointment::find($id);
    
    if($data && $data->user_id == Auth::user()->id) {
        $data->delete();
        return redirect()->back()->with('success', 'Appointment cancelled successfully');
    }
    
    return redirect()->back()->with('error', 'Appointment not found');
}

    public function edit_appoint($id)
    {  
        $appointment = Appointment::find($id);
        return view('home.edit_appointment', compact('appointment'));
        if (!$appointment || $appointment->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Unauthorized access or appointment not found.');
        }
        
    }

    public function update_appoint(Request $request, $id)
    {
        // Validasi
        $request->validate([
            'date' => 'required|date',
            'message' => 'required|string',
            'departement' => 'required|in:psychiatry,mental' // Pastikan sesuai value
        ]);

        $appointment = Appointment::findOrFail($id);
        
        // Pastikan hanya pemilik yang bisa update
        // if ($appointment->user_id !== Auth::id()) {
        //     return back()->with('error', 'Unauthorized action.');
        // }

        // Update data
        $appointment->update([
            'date' => $request->date,
            'message' => $request->message,
            'departement' => $request->departement
        ]);

        return redirect()->route('myappointment')->with('success', 'Appointment updated!');
    }


}
