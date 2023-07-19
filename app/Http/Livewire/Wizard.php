<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Wizard extends Component
{
    
    public $currentStep = 1;
    public $type_colis, $adresse_enlevement, $nom_complet_enlevement,$societe_enlevement,
    $tel_enlevement,$email_enlevement,$description_enlevement,$adresse_livraison,$nom_complet_livraison,
    $societe_livraison,$tel_livraison,$email_livraison,$description_livraison,
    $image_colis,$largeur,$hauteur,$profondeur,$poids,$etat_commande = -1,$etat_paiement = -1,$montant_colis = 0;
    public $successMessage = '';
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'type_colis' => 'required',
            'adresse_enlevement' => 'required',
            'nom_complet_enlevement' => 'required',
            'societe_enlevement' => 'nullable',
            'tel_enlevement' => 'required',
            'email_enlevement' => 'required',
            'description_enlevement' => 'nullable',
        ]);
 
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'adresse_livraison' => 'required',
            'nom_complet_livraison' => 'required',
            'societe_livraison' => 'required',
            'tel_livraison' => 'required',
            'email_livraison' => 'required',
            'description_livraison' => 'required',
        ]);
  
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'image_colis' => 'required',
            'largeur' => 'numeric|required',
            'hauteur' => 'numeric|required',
            'profondeur' => 'numeric|required',
            'poids' => 'numeric|required',

        ]);
  
        $this->currentStep = 4;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        Commande::create([
            'type_colis' => $this->type_colis,
            'adresse_enlevement' => $this->adresse_enlevement,
            'nom_complet_enlevement' => $this->nom_complet_enlevement,
            'societe_enlevement' => $this->societe_enlevement,
            'tel_enlevement' => $this->tel_enlevement,
            'email_enlevement' => $this->email_enlevement,
            'description_enlevement' => $this->description_enlevement,

            'adresse_livraison' => $this->adresse_livraison,
            'nom_complet_livraison' => $this->nom_complet_livraison,
            'societe_livraison' => $this->societe_livraison,
            'tel_livraison' => $this->tel_livraison,
            'email_livraison' => $this->email_livraison,
            'description_livraison' => $this->description_livraison,

            'image_colis' => $this->image_colis,
            'largeur' => $this->largeur,
            'hauteur' => $this->hauteur,
            'profondeur' => $this->profondeur,
            'poids' => $this->poids,
            'user_id' => 1
        ]);
  
        $this->successMessage = 'Order Created Successfully.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->type_colis = '';
        $this->adresse_enlevement = '';
        $this->nom_complet_enlevement = '';
        $this->societe_enlevement = '';
        $this->tel_enlevement= '';
        $this->email_enlevement = '';
        $this->description_enlevement = '';
        $this->adresse_livraison= '';
        $this->nom_complet_livraison='';
        $this->societe_livraison= '';
        $this->tel_livraison = '';
        $this->email_livraison = '';
        $this->description_livraison = '';
        $this->image_colis='';
        $this->largeur = '';
        $this->hauteur = '';
        $this->profondeur = '';
        $this->poids = '';
   
    }
}
