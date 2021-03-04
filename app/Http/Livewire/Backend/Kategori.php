<?php

namespace App\Http\Livewire\Backend;

use App\Models\Kategori as ModelsKategori;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Kategori extends Component
{
    public $nama_kategori, $id_nama_kategori_edit;
    

    public function render()
    {
        $kategori = ModelsKategori::get();
        return view('livewire.backend.kategori', [
            'kategori' => $kategori
        ]);
    }


    public function Insert()
    {
        $this->dispatchBrowserEvent('openModal');
    }

    public function InsertForm()
    {

        try {
           $data = ModelsKategori::create([
            "nama" => $this->nama_kategori
           ]);

            $this->dispatchBrowserEvent('swal', [
                'title' => '😎',
                'text' => 'Sukses Download',
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

    public function EditKategori($id)
    {
        $this->dispatchBrowserEvent('openEditModal');
        $kategori = ModelsKategori::find($id);
        $this->nama_kategori = $kategori->nama;
        $this->id_nama_kategori_edit = $kategori->id;
    }

    public function UpdateForm($id)
    {
        $kategori = ModelsKategori::find($id);
        $kategori->nama = $this->nama_kategori;
        $kategori->save();
        $this->dispatchBrowserEvent('closeEditModal');
        redirect('/kategori');
    }

    public function HapusKategori($id)
    {
        $kategori = ModelsKategori::find($id);
        $kategori->delete();
        redirect('/kategori');
    }
}
