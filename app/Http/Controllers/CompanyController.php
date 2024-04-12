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

        $company->fname = $request->fname;
        $company->lname =  $request->lname;
        $company->email = $request->email;
        $company->company_id = $request->cID;
        $company->password = $request->password;
        $company->phone = $request->phone;
       $save = $company->save(); 
        if($save){
            
            return redirect('/home')->with('updateMessage', 'company updated successfully');
        }else{
    
        }
      



    }
    }

