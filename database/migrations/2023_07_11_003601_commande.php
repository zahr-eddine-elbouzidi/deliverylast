<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->longText('adresse_enlevement');
            $table->text('nom_complet_enlevement');
            $table->text('societe_enlevement')->nullable();
            $table->text('tel_enlevement');
            $table->text('email_enlevement');
            $table->longText('description_enlevement')->nullable();
            $table->longText('adresse_livraison');
            $table->text('nom_complet_livraison');
            $table->text('societe_livraison')->nullable();
            $table->text('tel_livraison');
            $table->text('email_livraison');
            $table->longText('description_livraison')->nullable();
            $table->text('type_colis');
            $table->text('image_colis');
            $table->text('largeur');
            $table->text('hauteur');
            $table->text('profondeur');
            $table->text('poids');
            $table->boolean('etat_commande')->default(-1);
            $table->boolean('etat_paiement')->default(-1);
            $table->float('montant_colis')->default(0);;
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
