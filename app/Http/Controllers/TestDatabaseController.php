<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestDatabaseController extends Controller
{
    public function testConnection()
    {
        try {
            DB::connection()->getPdo();
            return "Connexion à la base de données réussie !";
        } catch (\Exception $e) {
            return "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    }
}
