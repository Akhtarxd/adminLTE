<?php

namespace App\Http\Controllers;
use App\Models\companies;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('company.companyAdd');
    }

        public function store(Request $request){
            //validation
            $request->validate([
                'CompName'=>'required',
                'CompEmail'=>'required',
                'CompUrl'=>'required',
                'Complogo'=>'required|mimes:jpeg,jpg,png,gif,hvif'
            ]);
    
    
            //upload image
            $Complogo = time().'.'.$request->Complogo->extension();
            $request->Complogo->move(public_path('Complogo'), $Complogo);
    
            $Company = new companies;
            $Company->logo = $Complogo;
            $Company->name = $request->CompName;
            $Company->email = $request->CompEmail;
            $Company->company_url = $request->CompUrl;
            
    
            $Company->save();
    
            return back()->withSuccess('Product created !!!!');
        }

        public function edit($id)
        {
            $company = companies::find($id); 
            $data = compact('company');
            return view('company.editCompany')->with($data);
        }

        public function update(Request $request, string $id)
    {
      
        date_default_timezone_set('Asia/Kolkata');
     
        $company = companies::find($id);

        if ($request->hasFile('CompLogo')) {
            $Complogo = $request->file('CompLogo');
            $logoPath = '';
    
            // Generate a unique name for the logo file
            $logoName = time() . '.' . $Complogo->getClientOriginalExtension();
    
            // Move the uploaded file to the specified path
            $Complogo->move($logoPath, $logoName);
    
            // Update the company logo path in the database
            $company->logo = $logoPath . '/' . $logoName;
        }

        $company->logo = $Complogo;
        $company->name = $request->CompName;
        $company->email = $request->CompEmail;
        $company->company_url = $request->CompUrl;
       $save = $company->save(); 
        if($save){
            
            return redirect('/home')->with('updateMessage', 'company updated successfully');
        }else{
    
        }
      



    }
    }

