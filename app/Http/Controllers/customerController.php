<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;

class customerController extends Controller
{
    public function index(){
        $url = url('/customer');
        $title = "Customer Registraation Form";
        $data = compact('url', 'title');
        
        return view('layouts.formCustomers')->with($data);
    }
    public function register(){
        return view('layouts.RegisterCustomer');
    }
    public function store(Request $request){
        $customer = new customers;
  
        $customer->name = $request['name'];
        $customer->fatherName = $request['fatherName'];
        $customer->motherName = $request['motherName'];
        $customer->address = $request['address'];
        $customer->inlineRadioOptions = $request['inlineRadioOptions'];
        $customer->state = $request['state'];
        $customer->city = $request['city'];
        $customer->dob = $request['dob'];
        $customer->postalCode = $request['postalCode'];
        $customer->course = $request['course'];
        $customer->email = $request['email'];
        $customer->save();

        return redirect('customer/view');
    }
    public function view(Request $request){

        $search = $request['search'] ?? "";
        
        if($search != ""){
            $customer = customers::where('name', 'LIKE', "%$search%")->orwhere('fatherName', 'LIKE', "%$search%")->get();
        }else{
            $customer = customers::paginate(10);
        } 
            $data = compact('customer', 'search');
        return view('layouts.customer-view')->with($data);
    }
    public function delete($id){
        // customers::find($id)->delete();
        
        $customer = customers::find($id);
        if (!is_null($customer)){ 
            $customer->delete();
        }
        return redirect()->back();  
    }
    public function edit($id){
        $customer = customers::find($id);
        if(is_null($customer)){
            return redirect('/customer/view');
        }
            $url = url('/customer/update')."/".($id);
            $title = "Update Record";
            $data = compact('url', 'customer', 'title');
            return view('layouts.formCustomers')->with($data);
    }
    public function update($id, Request $request){
        $customer = customers::find($id);
        
        $customer->name = $request['name'];
        $customer->fatherName = $request['fatherName'];
        $customer->motherName = $request['motherName'];
        $customer->address = $request['address'];
        $customer->inlineRadioOptions = $request['inlineRadioOptions'];
        $customer->dob = $request['dob'];
        $customer->postalCode = $request['postalCode'];
        $customer->course = $request['course'];
        $customer->email = $request['email'];
        $customer->save();
        return redirect('/customer/view');
    }
}
