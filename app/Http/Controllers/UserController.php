<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function showArtists()
    {
        $artists = User::all();
        return view('profile', ["artists" => $artists]);
    }

    public function afflogin()
    {
        return view("login");
    }

    public function login(Request $req)
    {
        $User = User::all();

        $email = $req->input('email');
        $password = $req->input('password');



        foreach ($User as $user) {
            if ($user->email == $email) {
                if ($user->password == $password)
                    //on va stocker l'utilisateur dans une session 
                    session(['logged_in_user' => $user]);
                return redirect('/Home');
            }
        }



        return redirect()->route('login')->with('error', 'Invalid email or password');
    }

    public function affsignup()
    {
        return view("signup");
    }

    public function signup(Request $req)
    {
        $validatedData = $req->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image upload
        ]);

        // on va stocker le mot de passe tel quel est.
        $validatedData['password'] = $validatedData['password'];

        // l'upload des images
        if ($req->hasFile('profile_image') && $req->file('profile_image')->isValid()) {
            $image = $req->file('profile_image');
            $path = $image->store('profile_images', 'public'); // la definition du path ou on va stocker les images
            $validatedData['profile_image'] = $path; //enregistrer le path dans la base de donnees
        }

        User::create($validatedData);

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    public function affhome()
    {
        $Comments = Comment::all()->sortByDesc('created_at'); // Get all comments and sort them
        $Users = User::all(); // Get all users

        $comment = [];
        foreach ($Comments as $Comment) {
            foreach ($Users as $user) {
                if ($Comment->user_id == $user->id) { // Match comment to the correct user
                    $comment[] = [
                        "content" => $Comment->content,
                        "user" => $user->nom,
                        'created_at' => $Comment->created_at->timestamp,
                    ];
                }
            }
        }

        $temps = now()->timestamp;
        return view("welcome", ["Comments" => $comment, 'temps' => $temps]);
    }


    // NEW: Show user profile
    public function show()
    {
        // Retrieve the logged-in user from the session
        $user = session('logged_in_user');

        // Check if the user exists in the session
        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to log in first.');
        }

        return view('user', compact('user')); // Pass the user to the view
    }

    public function logout(Request $req)
    {
        $req->session()->flush();


        return redirect()->route('login');
    }
}
