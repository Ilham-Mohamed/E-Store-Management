<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function index()
    {
        return redirect('home');
    }

    public function getemployee()
    {
        $items = DB::table('users')
        ->where('role','employee')
        ->get();
        return view('employee.dashboard',compact('items'));
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/users/',$filename);
            $user->picture = $filename;
        }
    
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        

        if($res)
        {
            return back()->with('success','You have Registerd Successfuly');
        }
        else
        {
            return back()->with('fail','Somthing Wrong');
        }
    }


    public function user_detail()
    {
        $id = Auth::user()->id;

        $user = User::find($id);
        return view('admin.user_details',compact('user'));
    }

    public function emp_registration()
    {
        return view('employee.register');
    }

    //

    public function employee_delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('employee-dashboard');
    }

    public function employee_edit($id)
    {
        $data = User::find($id);
        return view('employee.edit',['data'=>$data]);
    }

    public function employee_update(Request $request)
    {
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/users/',$filename);
            $data->picture = $filename;
        }
        $res = $data->save();

        if($res)
        {
            return back()->with('success','Updated Successfuly');
        }
        else
        {
            return back()->with('fail','Somthing Wrong');
        }
    }


    public function employee_detail($id)
    {
        $user = User::find($id);
        return view('admin.user_details',compact('user'));
    }


    public function finalorder(Request $request)
    {

        $id = Auth::user()->id;
        $user = User::find($id);
        $item = new order();

        $item->productname = $request->productname;
        $item->detail = $request->detail;
        $item->price = $request->price;
        $item->customername = $user['name'];
        $item->address = $user['address'];
        $item->mobile = $user['mobile'];
        $item->employeeid = $request->employeeid;
        $item->delivery = 'Yes';
        $item->picture = $request->picture;
       
        $res = $item->save();


       return redirect('order');
    if($res)
    {
        return back()->with('success','Order Accepted');
    }
    else
    {
        return back()->with('fail','Somthing Wrong');
    }

    }

    public function placeorder()
    {
        $items = product::all();
        return view('customer.placeorder',compact('items'));
    }

    public function select_employee($id)
    {
        $product = DB::table('products')
        ->where('id',$id)
        ->get();
      
        $employees = DB::table('users')
        ->where('role','employee')
        ->get();
        return view('customer.order',compact('employees','product'));
    }

    public function employee_order_details()
    {
        $id = Auth::user()->id;
        $items = DB::table('orders')
        ->where('employeeid',$id)
        ->get();
        return view('employee.orderdetails',compact('items'));
    }

    public function cutomer_order_view()
    {
        $items =  DB::table('users')
        ->join('orders','users.id',"=",'orders.employeeid')
        ->get();

        return view('customer.customer_order_view',compact('items'));

    }

    public function Order_status(Request $request)
    {
        $order = order::find($request->orderid);

        $order->productname = $order['productname'];
        $order->detail = $order['detail'];
        $order->price = $order['price'];
        $order->customername = $order['customername'];
        $order->address = $order['address'];
        $order->mobile = $order['mobile'];
        $order->employeeid = $order['employeeid'];
        $order->delivery = $request->btn;
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/',$filename);
            $order->picture = $filename;
        }
        $res = $order->save();


    //    return redirect('customer-myorder');
    if($res)
    {
        return back()->with('success','Order Accepted');
    }
    else
    {
        return back()->with('fail','Somthing Wrong');
    }

    }

    
}
