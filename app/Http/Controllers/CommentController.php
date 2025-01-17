<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    public function storeComment(Request $request)
    {
        // Création d'une nouvelle instance du modèle Comment
        $comment = new Comment();

        // Récupération du contenu du commentaire depuis la requête
        // et assignation à l'attribut content du modèle
        $comment->content = $request->input('comment');

        // Récupération de l'ID de l'utilisateur connecté depuis la session
        // et assignation à l'attribut user_id du modèle
        $comment->user_id = session('logged_in_user')->id;

        // Sauvegarde du commentaire dans la base de données
        $comment->save();

        // Redirection vers la route nommée 'home' après l'enregistrement
        return redirect()->route('home');
    }
}
