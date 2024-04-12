<?php

namespace App\Http\Controllers;


use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    
    $employees = Employee::with('company')->latest()->paginate(10);

    
    return view('emp.empTable', ['employees' => $employees]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $compaines = DB::table('companies')->get();
        
        return view('emp.addEmp',['companies'=> $compaines]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'email'=> 'required|email|max:200|unique:users',
            'password' => 'required|min:5',
            'cId' => 'required',
            'phone' => 'required',
        ]);

        $employee = new employee;
        $employee->first_name = $request->fname;
        $employee->last_name = $request->lname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->password = $request->password;
        $employee->company_id = $request->cId;

        $employee->save();

        return back()->withSuccess('Employee Added');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = employee::find($id); 
        $data = compact('employee');
        return view('emp.updateEmp')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        date_default_timezone_set('Asia/Kolkata');
     
        $employee = employee::find($id);

        $employee->fname = $request->fname;
        $employee->lname =  $request->lname;
        $employee->email = $request->email;
        $employee->company_id = $request->cID;
        $employee->password = $request->password;
        $employee->phone = $request->phone;
       $save = $employee->save(); 
        if($save){
            
            return redirect('/emp')->with('updateMessage', 'Employee updated successfully');
        }else{
    
        }
      



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
