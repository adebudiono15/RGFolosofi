<?php

namespace App\Http\Livewire\Backend;

use App\Models\Barang as ModelsBarang;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Barang extends Component
{
    use WithFileUploads;
    public $nama, $kategori_id, $harga,$deskripsi,$gambar_carousel,$gambar_carousel2,$gambar_carousel3,$gambar_spesifikasi,$gambar_spesifikasi2,$gambar_spesifikasi3,$gambar_spesifikasi4,$gambar_ukuran,$gambar_ukuran2,$gambar_bahan,$gambar_warna;
    public 
    $gambar_carouselDetail,
    $gambar_carousel2Detail,
    $gambar_carousel3Detail,
    $gambar_spesifikasiDetail,
    $gambar_spesifikasi2Detail,
    $gambar_spesifikasi3Detail,
    $gambar_spesifikasi4Detail,
    $gambar_ukuranDetail,
    $gambar_ukuran2Detail,
    $gambar_bahanDetail,
    $gambar_warnaDetail;

    public function render()
    {
        $kategori =  Kategori::get();
        $barang = ModelsBarang::get();
        return view('livewire.backend.barang', [
            'kategori' => $kategori,
            'barang' => $barang
        ]);
    }

    public function Insert()
    {
        $this->dispatchBrowserEvent('openModal');
    }

    public function InsertForm()
    {
        try {
            $gambar_carousel = md5($this->gambar_carousel . microtime()) . '.' . $this->gambar_carousel->extension();
            $gambar_carousel2 = md5($this->gambar_carousel2 . microtime()) . '.' . $this->gambar_carousel2->extension();
            $gambar_carousel3 = md5($this->gambar_carousel3 . microtime()) . '.' . $this->gambar_carousel3->extension();
            $gambar_spesifikasi = md5($this->gambar_spesifikasi . microtime()) . '.' . $this->gambar_spesifikasi->extension();
            $gambar_spesifikasi2 = md5($this->gambar_spesifikasi2 . microtime()) . '.' . $this->gambar_spesifikasi2->extension();
            $gambar_spesifikasi3 = md5($this->gambar_spesifikasi3 . microtime()) . '.' . $this->gambar_spesifikasi3->extension();
            $gambar_spesifikasi4 = md5($this->gambar_spesifikasi4 . microtime()) . '.' . $this->gambar_spesifikasi4->extension();
            $gambar_ukuran = md5($this->gambar_ukuran . microtime()) . '.' . $this->gambar_ukuran->extension();
            $gambar_ukuran2 = md5($this->gambar_ukuran2 . microtime()) . '.' . $this->gambar_ukuran2->extension();
            $gambar_bahan = md5($this->gambar_bahan . microtime()) . '.' . $this->gambar_bahan->extension();
            $gambar_warna = md5($this->gambar_warna . microtime()) . '.' . $this->gambar_warna->extension();

            Storage::putFileAs(
                'public/images',
                $this->gambar_carousel,
                $gambar_carousel,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_carousel2,
                $gambar_carousel2,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_carousel3,
                $gambar_carousel3,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_carousel2,
                $gambar_carousel2,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_carousel3,
                $gambar_carousel3,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_spesifikasi,
                $gambar_spesifikasi,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_spesifikasi2,
                $gambar_spesifikasi2,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_spesifikasi3,
                $gambar_spesifikasi3,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_spesifikasi4,
                $gambar_spesifikasi4,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_ukuran,
                $gambar_ukuran,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_ukuran2,
                $gambar_ukuran2,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_bahan,
                $gambar_bahan,
            );
            Storage::putFileAs(
                'public/images',
                $this->gambar_warna,
                $gambar_warna,
            );
            $data = ModelsBarang::create([
                "nama" => $this->nama,
                "kategori_id" => $this->kategori_id,
                "harga" => $this->harga,
                "deskripsi" => $this->deskripsi,
                "carousel" => $gambar_carousel,
                "carousel2" => $gambar_carousel2,
                "carousel3" => $gambar_carousel3,
                "gambar_spesifikasi" => $gambar_spesifikasi,
                "gambar_spesifikasi2" => $gambar_spesifikasi2,
                "gambar_spesifikasi3" => $gambar_spesifikasi3,
                "gambar_spesifikasi4" => $gambar_spesifikasi4,
                "gambar_ukuran" => $gambar_ukuran,
                "gambar_ukuran2" => $gambar_ukuran2,
                "gambar_bahan" => $gambar_bahan,
                "gambar_warna" => $gambar_warna,
            ]);

            $this->dispatchBrowserEvent('swal', [
                'title' => '😍',
                'text' => 'Sukses Tambah Barang',
                'timer' => 1500,
                'icon' => false,
                'showConfirmButton' => false,
                'position' => 'center'
            ]);
            $this->dispatchBrowserEvent('closeModal');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function Detail($id)
    {
        $barang = ModelsBarang::find($id);
            $this->nama = $barang->nama;
            $this->kategori_id = $barang->kategori_id;
            $this->harga = $barang->harga;
            $this->deskripsi = $barang->deskripsi;
            $this->gambar_carouselDetail = $barang->carousel;
            $this->gambar_carousel2Detail = $barang->carousel2;
            $this->gambar_carousel3Detail = $barang->carousel3;
            $this->gambar_spesifikasiDetail = $barang->gambar_spesifikasi;
            $this->gambar_spesifikasi2Detail = $barang->gambar_spesifikasi2;
            $this->gambar_spesifikasi3Detail = $barang->gambar_spesifikasi3;
            $this->gambar_spesifikasi4Detail = $barang->gambar_spesifikasi4;
            $this->gambar_ukuranDetail = $barang->gambar_ukuran;
            $this->gambar_ukuran2Detail = $barang->gambar_ukuran2;
            $this->gambar_bahanDetail = $barang->gambar_bahan;
            $this->gambar_warnaDetail = $barang->gambar_warna;
            $this->dispatchBrowserEvent('openDetailModal');
    }

    public function Delete($id){
        $barang = ModelsBarang::find($id);
        $barang->delete();
        $this->dispatchBrowserEvent('swal', [
            'title' => '😔',
            'text' => 'Sukses Hapus Barang',
            'timer' => 1500,
            'icon' => false,
            'showConfirmButton' => false,
            'position' => 'center'
        ]);
    }
}
