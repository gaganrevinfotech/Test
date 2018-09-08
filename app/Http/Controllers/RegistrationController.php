<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class RegistrationController extends Controller
{
	public function create()
	{
		return view('registration.create');
	}
	public function fileUpload(Request $request)
	{

		$this->validate($request, [
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);


		$image = $request->file('image'); 
		$post = $request->post();

		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
		$destinationPath = public_path('/images');
		$image->move($destinationPath, $input['imagename']);



		DB::table('users')->insert([
			['name' => $post['name'], 'email' => $post['email'],'image'=> $input['imagename']]
		]);

		return redirect('/view-data');
	}
	public function fileUploadEdit(Request $request)
	{

		$this->validate($request, [
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);


		$image = $request->file('image'); 
		
		$post = $request->post();

		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
		$destinationPath = public_path('/images');
		$image->move($destinationPath, $input['imagename']);

		$user = User::find($post['id']);

		$user->name = $post['name'];
		$user->email = $post['email'];
		$user->image = $input['imagename'];

		$user->save();

	
		return redirect('/view-data');
	}
	public function view_data()
	{
		$users = DB::table('users')->get();
		return view('registration.view_data')->with('users',$users);
	}
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		$users = DB::table('users')->get();
	 	return redirect('/view-data');
	}
	public function edit($id)
	{
		$user = User::find($id);
		return view('registration.view_data_edit')->with('user',$user);
		
	}
}
