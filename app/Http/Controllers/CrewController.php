<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Crew;

use Session;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CrewController extends Controller
{
    function add(Request $request){
         //validate inputs
        $this->validate($request, [
            'full_name' => 'required|min:2',  
            'crew_title' => 'required|min:2',
            'full_address' => 'required|min:3',  
            'phone' => 'numeric|required|min:5',
            'emergency_phone' => 'numeric|min:5',  
            'driver_license' => 'alpha_num|required|min:5',
            'social_security' => 'alpha_num|min:5',  
            'i9_number' => 'alpha_num|min:3',
            'imdb_experience' => 'required',  
            'w2_employee' => 'required',
            'union' => 'required',  
            
        ]);
        
        $model = Crew::where('name', '=', $request->input('full_name'))->count();
        if($model >= 1){
            Session::flash('message', 'Oops, this person is already in the system!');
            return redirect()->back();
        }
        //fill the data in the model
        $crew = new Crew;
        
        $crew->name = $this->check_null($request->input('full_name'));
        $crew->crew_title = $this->check_null($request->input('crew_title'));
        $crew->address = $this->check_null($request->input('full_address'));
        $crew->emergency_contact =$this->check_null( $request->input('emergency_phone'));
        $crew->phone = $this->check_null($request->input('phone'));
        $crew->driver_license = $this->check_null($request->input('driver_license'));
        $crew->social_security = $this->check_null($request->input('social_security'));
        $crew->i9_number = $this->check_null($request->input('i9_number'));
        $crew->imdb_experience = $this->check_null($request->input('imdb_experience'));
        $crew->w2_employee = $this->check_null($request->input('w2_employee'));
        $crew->union = $this->check_null($request->input('union'));
           
     
        
         //check if the upload went through id it did then does the fuction
        if ($request->hasFile('resume')) {
           
            $filename = preg_replace("/\s+/","",$request->input('full_name').$request->file('resume')->getClientOriginalName());
            $crew->resume =$filename;
            Storage::disk('local')->put($filename, File::get($request->file('resume')));
            
        }else{
             $crew->resume ='NONE';
        }
        
        //insert data
        $crew->save();
        
        
        Session::flash('complete', 'Crew Added to the System!!');
        //redirect    
        return redirect()->route('crew_management');
        
    }
    
    function downloadFile($filename){
        $file = storage_path('app') . '/' . $filename; // or wherever you have stored your files
        return response()->download($file);
    }
    
    function index(){
        return view('crew_management', ['crew'=>$this->selectData()]);
    }
    
    function selectData(){
        $crew = Crew::all();
        return $crew;
    }
    
    function deleteData($data){
        $flight = Crew::find($data);
        $flight->delete();
        Session::flash('delete', 'Crew deleted from the System!!');
        return redirect()->route('crew_management');
    }
    
    function update(Request $request){
        
          //validate inputs
        $this->validate($request, [
            'full_name' => 'required|min:2',  
            'crew_title' => 'required|min:2',
            'full_address' => 'required|min:3',  
            'phone' => 'numeric|required|min:5',
            'emergency_phone' => 'numeric|min:5',  
            'driver_license' => 'alpha_num|required|min:5',
            'social_security' => 'alpha_num|min:5',  
            'i9_number' => 'alpha_num|min:3',
            'imdb_experience' => 'required',  
            'w2_employee' => 'required',
            'union' => 'required',  
            
        ]);
        
        $crew = Crew::find($request->input('id'));
        
        $crew->name = $this->check_null($request->input('full_name'));
        $crew->crew_title = $this->check_null($request->input('crew_title'));
        $crew->address = $this->check_null($request->input('full_address'));
        $crew->emergency_contact =$this->check_null( $request->input('emergency_phone'));
        $crew->phone = $this->check_null($request->input('phone'));
        $crew->driver_license = $this->check_null($request->input('driver_license'));
        $crew->social_security = $this->check_null($request->input('social_security'));
        $crew->i9_number = $this->check_null($request->input('i9_number'));
        $crew->imdb_experience = $this->check_null($request->input('imdb_experience'));
        $crew->w2_employee = $this->check_null($request->input('w2_employee'));
        $crew->union = $this->check_null($request->input('union'));
        
        //check if the upload went through id it did then does the fuction
        if ($request->hasFile('resume')) {
            //delete file in the system
            Storage::delete($crew->resume);
           
            $filename = preg_replace("/\s+/","",$request->input('full_name').$request->file('resume')->getClientOriginalName());
            $crew->resume =$filename;
            Storage::disk('local')->put($filename, File::get($request->file('resume')));
            
        }
        //apply changes
        $crew->save();
        
          Session::flash('update', 'Crew Updated to the System!!');
        
        return redirect()->route('crew_management');
    }
    
    function check_null($value){
        if(isset($value)){
            return $value;
        }else{
            return 'NONE';
        }
    }
}