<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        if(Auth::user()){
            return redirect(route('home'));
        }
        return view('auth.login');
    }

    public function index()
    {
        $users = User::where('role','<>', 'super-admin')->paginate(5);
        return view('user.index',['users' => $users]);
    }

    public function create()
    {
        $parents = User::addSelect('id', 'name')->where('role', 'supervisor')->get();
        $programs = Program::addSelect('id', 'name')->where('status', 'A')->get();
        return view('user.create', [
            'parents' => $parents,
            'programs' => $programs,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
            'role' => 'required|max:255',
        ]);
        if($validatedData){
            $user = new User();
            $user->name = $request->post('name');
            $user->email = $request->post('email');
            $user->password =Hash::make($request->post('password'));
            $user->role = $request->post('role');

            if(!empty($request->post('parent'))){
                $user->parent_id = $request->post('parent');
            }else{
                $user->parent_id = 1;
            }
            if(!empty($request->post('program'))){
                $user['program_id']= $request->post('program');
            }else{
                $user['program_id']= null;
            }

            $user->save();
            return redirect('/user')->with(['type'=>'success', 'msg'=>'User is successfully added.']);
        }
    }

    public function show()
    {
        $user = User::findOrFail(Auth::id());
        return view('user.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $parents = User::addSelect('id', 'name')->where('role', 'supervisor')->get();
        $user = User::findOrFail($id);
        $programs = Program::addSelect('id', 'name')->where('status', 'A')->get();
        return view('user.edit', ['user' => $user, 'parents'=>$parents, 'programs' => $programs]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|max:255',
        ]);
        if($validatedData){
            $user['name'] = $request->post('name');
            $user['email'] = $request->post('email');
            $user['role'] = $request->post('role');
            if(!empty($request->post('password'))){
                $user['password'] =Hash::make($request->post('password'));
            }

            if(!empty($request->post('parent'))){
                $user['parent_id']= $request->post('parent');
            }else{
                $user['parent_id'] = 1;
            }

            if(!empty($request->post('program'))){
                $user['program_id']= $request->post('program');
            }else{
                $user['program_id']= null;
            }

            User::findOrFail($id)->update($user);
            return redirect('/user')->with(['type'=>'success', 'msg'=>'User is successfully updated.']);
        }


    }

    public function destroy(Request $request, $id)
    {
        try{
            User::findOrFail($id)->delete();
            return redirect('/user')->with(['type'=>'success', 'msg'=>'User is successfully deleted.']);
        }catch (\Exception $e){
            return redirect('/user')->with(['type'=>'error', 'msg'=>'Failed to delete the user due to data dependency']);
        }

    }

    public function profile()
    {
        $user = User::findOrFail(Auth::id());
        if(!file_exists($user->image)){
            $user->image = 'assets/images/avatar.png';
        }
        return view('user.profile', ['user' => $user]);
    }

    public function profileEdit()
    {
        $user = User::findOrFail(Auth::id());
        return view('user.profile_edit', ['user' => $user]);
    }

    public function profileUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'image' =>  $request->file('image')?'required|mimes:jpeg,jpg,png|max:30000':'',
        ]);
        if($validatedData){

            if($request->file('image')){
                try {
                    $destinationPath = 'uploads/profile'; // upload path
                    $extension =  $request->file('image')->getClientOriginalExtension();
                    $fileName = Auth::id() . '.' . $extension;
                    $upload_success = $request->file('image')->move($destinationPath, $fileName);
                    if ($upload_success) {
                        $user['image'] = $destinationPath.'/'.$fileName;
                    }
                }catch (\Exception $e){}
            }


            $user['name'] = $request->post('name');
            $user['email'] = $request->post('email');
            if(!empty($request->post('password'))){
                $user['password'] =Hash::make($request->post('password'));
            }


            if(!empty($request->post('parent'))){
                $user['parent_id']= $request->post('parent');
            }

            User::findOrFail(Auth::id())->update($user);
            return redirect('/user/profile')->with(['type'=>'success', 'msg'=>'User is successfully updated.']);
        }


    }

}
