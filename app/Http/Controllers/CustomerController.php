<?php

namespace App\Http\Controllers;

//  --link--  model_name
use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //              method
    public function index()
    {   //          model_name

        $customer = Customer::all();
        return view('Form', ['cust' => $customer]);
        //         view_name
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // validate data
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:40000'
        ]);

        //upload image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload'), $imageName);

        $customer = new Customer;
        // dd($request->all());

        //   column_name       htmlform_name
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->gender = $request->gender;
        $customer->image = $imageName;
        $customer->save();
        return redirect(route('show'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $customer  = Customer::all();
        // $customer = customer::find(1); 

        return view('show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('editform', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload'), $imageName);

        $customer = customer::find($id);
        //   column_name       htmlform_name
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->gender = $request->gender;
        $customer->image = $imageName;
        $customer->save();
        return redirect(route('show'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect(route('show'));
    }
}
