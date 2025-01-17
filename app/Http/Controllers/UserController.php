<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    // Méthode pour afficher tous les artistes
    public function showArtists()
    {
        $artists = User::all();  // Récupère tous les utilisateurs
        return view('profile', ["artists" => $artists]);
    }

    // Méthode pour afficher la page de connexion
    public function afflogin()
    {
        return view("login");
    }

    // Méthode de traitement de la connexion
    public function login(Request $req)
    {
        $User = User::all();  // Récupère tous les utilisateurs
        $email = $req->input('email');
        $password = $req->input('password');

        // Vérifie les identifiants
        foreach ($User as $user) {
            if ($user->email == $email && $user->password == $password) {
                session(['logged_in_user' => $user]);  
                /*
                C'est comme si on créait une "boîte" personnelle (la session) pour chaque utilisateur qui se connecte au site. 
                Dans cette boîte, on range une étiquette 'logged_in_user' qui contient toutes les informations de l'utilisateur.
                */
                return redirect('/Home');
            }
        }

        // Redirection en cas d'échec avec message d'erreur
        return redirect()->route('login')->with('error', 'Invalid email or password');
    }

    // Méthode pour afficher le formulaire d'inscription
    public function affsignup()
    {
        return view("signup");
    }

    // Méthode de traitement de l'inscription
    public function signup(Request $req)
    {
        // Validation des données du formulaire
        $validatedData = $req->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Gestion de l'upload de l'image de profil
        if ($req->hasFile('profile_image') && $req->file('profile_image')->isValid()) {
            $image = $req->file('profile_image');
            $path = $image->store('profile_images', 'public');
            $validatedData['profile_image'] = $path;
        }

        // Création de l'utilisateur
        User::create($validatedData);

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    // Méthode pour afficher la page d'accueil avec les commentaires
    public function affhome()
    {
        $Comments = Comment::all()->sortByDesc('created_at');
        $Users = User::all();

        // Construction du tableau des commentaires avec les infos utilisateurs
        $comment = [];
        foreach ($Comments as $Comment) {
            foreach ($Users as $user) {
                if ($Comment->user_id == $user->id) {
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

    // Méthode pour afficher le profil utilisateur
    public function show()
    {
        $user = session('logged_in_user');

        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to log in first.');
        }

        return view('user', compact('user'));
    }

    // Méthode de déconnexion
    public function logout(Request $req)
    {
        $req->session()->flush();  // Vide la session
        return redirect()->route('login');
    }
}
