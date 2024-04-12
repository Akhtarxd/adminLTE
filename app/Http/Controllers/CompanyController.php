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

        public function update(Request $request, $id)
        {
            // $request->validate([
            //     'CompName'=>'min:3|max:255',
            //     'CompEmail'=>'email|unique:companies,email',
            //     'CompUrl'=>'url|unique:companies,company_url',
            //     'Complogo'=>'mimes:jpeg,jpg,png,gif,hvif'
            // ]);
            date_default_timezone_set('Asia/Kolkata');
        
            $company = companies::where('id',$id)->first();
        
            if(isset($request->Complogo)){
                $imageName = time().'.'.$request->Complogo->extension();
                $request->Complogo->move(public_path('Complogo'),$imageName);
                $company->logo = $imageName;

            }

            $company->name = $request->CompName;
            $company->email = $request->CompEmail;
            $company->company_url = $request->CompUrl;

            $company->save();

            return redirect()->route('home')->withSuccess('Company Updated');
        }
        

    public function destroy($id)
    {
        $item = companies::findOrFail($id);
        $item->delete();

        return redirect()->route('home')->with('success', 'Item deleted successfully');
    }
    }

