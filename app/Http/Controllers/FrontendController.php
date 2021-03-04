<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $wa = "https://api.whatsapp.com/send?phone=6285715555488&text=Halo%20Admin%20Saya%20Mau%20Order";
        $konsul = "https://api.whatsapp.com/send?phone=6285715555488&text=Halo%20Admin%20Saya%20Mau%20Konsultasi%20Design";
        $barang = DB::table('barang')->limit(5)->get();
        return view('layouts.frontend.home.index', compact('barang','wa','konsul'));
    }

    public function detail($nama){
        $wa = "https://api.whatsapp.com/send?phone=6285715555488&text=Halo%20Admin%20Saya%20Mau%20Order";
        $order = "https://api.whatsapp.com/send?phone=6285715555488&text=Halo%20Admin%20Saya%20Mau%20";
        $konsul = "https://api.whatsapp.com/send?phone=6285715555488&text=Halo%20Admin%20Saya%20Mau%20Konsultasi%20Design";
        $spesifikasi = "https://api.whatsapp.com/send?phone=6285715555488&text=Halo%20Admin%20Saya%20Mau%20Tanya%20Spesifikasi%20";
        $barang = Barang::where('nama', $nama)->get()->first();
        return view('layouts.frontend.home.detail', compact('barang','wa','order','konsul','spesifikasi'));
    }
}
