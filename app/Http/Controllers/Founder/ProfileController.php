<?php

namespace App\Http\Controllers\Founder;

use App\Http\Controllers\Controller;
use App\Http\Requests\FounderProfileRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\FounderProfile;
use App\Models\ProjectPost;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Facades\Storage; 

class ProfileController extends Controller
{

    public function index() {
        // return view('founder.profile.index');
        $profiles = FounderProfile::all();
        return view('founder.profile.index', array('user' => Auth::user()), compact('profiles'));
    }

    public function store(Request $request) {
    
        $founderprofile = new FounderProfile();
        
        $founderprofile->user_id=Auth::user()->id;

        $founderprofile->founder_name= $request->founder_name;

        $founderprofile->founder_surname= $request->founder_surname;

        $founderprofile->founder_position= $request->founder_position;

        $founderprofile->founder_organization= $request->founder_organization;

        $founderprofile->founder_telephone=$request->founder_telephone;

        $founderprofile->founder_insta_link=$request->founder_insta_link;
        
        $founderprofile->founder_face_link=$request->founder_face_link;

        $founderprofile->founder_linked_link=$request->founder_linked_link;

        $founderprofile->founder_description=$request->founder_description;

        

        if($request->hasFile('founder_avatar'))
        {
            // dd($$founderprofile->founder_avatar);
            $destination_path = 'public/avatars/founders';
            $founder_avatar = $request->file('founder_avatar');
            $founder_avatar_name = $founder_avatar->getClientOriginalName();
            $path = $request->file('founder_avatar')->storeAs($destination_path, $founder_avatar_name);
            $founderprofile->founder_avatar = $founder_avatar_name;
        }
        $founderprofile->save();

        // return redirect('/dashboard/profile')->with('message', 'Profile Created Successfully');
        return redirect('/dashboard/profile/founder')->with('message', 'Profile Created Successfully');
    }

    public function edit(FounderProfile $founderprofile)
    {
        return view('founder.profile.edit', compact('founderprofile'));
    }

    public function editAccount(User $user)
    {
        return view('founder.profile.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $founderprofile = FounderProfile::find($id);
        $founderprofile->founder_name = $request->input('founder_name');
        $founderprofile->founder_surname = $request->input('founder_surname');
        $founderprofile->founder_position = $request->input('founder_position');
        $founderprofile->founder_organization = $request->input('founder_organization');
        $founderprofile->founder_telephone = $request->input('founder_telephone');
        $founderprofile->founder_insta_link = $request->input('founder_insta_link');
        $founderprofile->founder_face_link = $request->input('founder_face_link');
        $founderprofile->founder_linked_link = $request->input('founder_linked_link');
        $founderprofile->founder_description = $request->input('founder_description');
        // $founderprofile->founder_avatar = $request->input('founder_avatar');

        
        if($request->file('founder_avatar'))
        {
            $destination_path = 'public/avatars/founders';
            // dd($destination_path);
            
                // if(File::exists($destination_path))
                // {
                //     File::delete($destination_path);
            
                // }
            
            $founder_avatar = $request->file('founder_avatar');
            $founder_avatar_name = $founder_avatar->getClientOriginalName();
            $path = $request->file('founder_avatar')->storeAs($destination_path, $founder_avatar_name);
            $founderprofile->founder_avatar = $founder_avatar_name;
        }

        $founderprofile->update();

        // if($request->hasFile('founder_avatar'))
        // {
        //     $destination_path = 'public/avatars/founders';
        //     $founder_avatar = $request->file('founder_avatar');
        //     $founder_avatar_name = $founder_avatar->getClientOriginalName();
        //     $path = $request->file('founder_avatar')->storeAs($destination_path, $founder_avatar_name);
        //     $founderprofile->founder_avatar = $founder_avatar_name;
        // }

        // $founderprofile->update($request->validated());

        // return redirect()->route('dashboard-profile', compact('founderprofile'))->with('message', 'Profile Updated Successfully');

        return redirect()->route('dashboard-profile')->with('message', 'User Updated Succesfully');
    }

    public function updateAccount(UserUpdateRequest $request, User $user) {
        $user->update($request->validated());
        return redirect()->route('dashboard-profile', compact('user'))->with('message', 'Profile Updated Successfully');
    }

    public function show(FounderProfile $profile) {
        $posts = ProjectPost::all();
        return view('founder.profile.showProfile', compact('profile', 'posts'));
    }
}
