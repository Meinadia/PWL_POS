<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        $row = DB::insert('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);

        return 'Update data berhasil. Jumlah data yang di update: ' . $row . ' baris';
    }
}