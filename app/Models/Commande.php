<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [

        'type_colis',
        'adresse_enlevement',
        'nom_complet_enlevement',
        'societe_enlevement',
        'tel_enlevement',
        'email_enlevement',
        'description_enlevement',
        'adresse_livraison',
        'nom_complet_livraison',
        'societe_livraison',
        'tel_livraison',
        'email_livraison',
        'description_livraison',
        'image_colis',
        'largeur',
        'hauteur',
        'profondeur',
        'poids',
        'etat_commande',
        'etat_paiement',
        'montant_colis',
        'user_id'
    ];

}

?>