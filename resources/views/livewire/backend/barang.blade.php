<div>
    <div class="row">
        <div class="col-lg-12">
            <button type="button" class="btn btn-sm btn-secondary shadow" wire:click="Insert">Tambah Barang</button>
        </div>
    </div>

    <div class="row mt-5 justify-content-center">
        <h3>LIST PRODUK</h3>
    </div>
    <div class="row mt-5 justify-content-center">
        @foreach ($barang as $item)
            <div class="col-ld-4 text-center">
                <div class="card ml-3 shadow" style="width: 18rem;">
                    <img class="card-img-top" style="max-height: 270px" src="{{ asset('storage/images/' . $item->gambar_spesifikasi) }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <p class="card-text">Harga Mulai <b>Rp. {{ number_format($item->harga) }}</b></p>
                        <button type="button" class="btn btn-secondary btn-sm shadow"
                            wire:click="Detail({{ $item->id }})"><b>DETAIL</b></button>
                        <button type="button" class="btn btn-primary btn-sm shadow"><b>EDIT</b></button>
                        <button type="button" class="btn btn-danger btn-sm shadow"
                            wire:click="Delete({{ $item->id }})"><b>HAPUS</b></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- insert --}}
    <div wire:ignore.self id="insertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" placeholder="Tulis Disini..."
                                    class="form-control form-control-sm shadow" wire:model="nama">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" placeholder="Tulis Disini..."
                                    class="form-control form-control-sm shadow" wire:model="harga">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="my-select">Kategori</label>
                                <select class="form-control form-control-sm" wire:model="kategori_id">
                                    <option value="-" selected>Pilih Kategori Barang</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea cols="100" placeholder="Deskripsi Barang" rows="10" wire:model="deskripsi" class="form-control shadow"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <label class="ml-3" for="my-input"><b>Gambar Carousel</b></label>
                                <div class="form-group">
                                    <input type="file" wire:model="gambar_carousel">
                                    @if ($gambar_carousel)
                                        <img class="img-fluid shadow mt-3" src="{{ $gambar_carousel->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="my-input"></label>
                                    <input type="file" wire:model="gambar_carousel2">
                                    @if ($gambar_carousel2)
                                        <img class="img-fluid shadow mt-3"
                                            src="{{ $gambar_carousel2->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="my-input"></label>
                                    <input type="file" wire:model="gambar_carousel3">
                                    @if ($gambar_carousel3)
                                        <img class="img-fluid shadow mt-3"
                                            src="{{ $gambar_carousel3->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <label class="ml-3" for="my-input"><b>Gambar Spesifikasi</b></label>
                                <div class="form-group">
                                    <input type="file" wire:model="gambar_spesifikasi">
                                    @if ($gambar_spesifikasi)
                                        <img class="img-fluid shadow mt-3"
                                            src="{{ $gambar_spesifikasi->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="my-input"></label>
                                    <input type="file" wire:model="gambar_spesifikasi2">
                                    @if ($gambar_spesifikasi2)
                                        <img class="img-fluid shadow mt-3"
                                            src="{{ $gambar_spesifikasi2->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="my-input"></label>
                                    <input type="file" wire:model="gambar_spesifikasi3">
                                    @if ($gambar_spesifikasi3)
                                        <img class="img-fluid shadow mt-3"
                                            src="{{ $gambar_spesifikasi3->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="my-input"></label>
                                    <input type="file" wire:model="gambar_spesifikasi4">
                                    @if ($gambar_spesifikasi4)
                                        <img class="img-fluid shadow mt-3"
                                            src="{{ $gambar_spesifikasi4->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <label class="ml-3" for="my-input"><b>Gambar Ukuran</b></label>
                                <div class="form-group">
                                    <input type="file" wire:model="gambar_ukuran">
                                    @if ($gambar_ukuran)
                                        <img class="img-fluid shadow mt-3" src="{{ $gambar_ukuran->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="my-input"></label>
                                    <input type="file" wire:model="gambar_ukuran2">
                                    @if ($gambar_ukuran2)
                                        <img class="img-fluid shadow mt-3" src="{{ $gambar_ukuran2->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="ml-3" for="my-input"><b>Gambar Bahan</b></label>
                                    <input type="file" wire:model="gambar_bahan">
                                    @if ($gambar_bahan)
                                        <img class="img-fluid shadow mt-3" src="{{ $gambar_bahan->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="my-input">Gambar Warna</label>
                                    <input type="file" wire:model="gambar_warna">
                                    @if ($gambar_warna)
                                        <img class="img-fluid shadow mt-3" src="{{ $gambar_warna->temporaryUrl() }}">
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="InsertForm()">Tambah</button>
                </div>
            </div>
        </div>
    </div>

    {{-- detail --}}
    <div wire:ignore.self id="detailModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-4">
                            <p><b>Nama :</b> <br>{{ $nama }}</p>
                        </div>
                        <div class="col-md-4">
                            <p><b>Katrgori :</b><br>{{ $kategori_id }}</p>
                        </div>
                        <div class="col-md-4">
                            <p><b>Harga :</b><br> Rp. {{ number_format($harga, 0) }}</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <label for=""><b>Deskripsi Produk</b></label>
                                <p>{{  $deskripsi  }}</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <label for="my-input"><b>Gambar Carousel</b></label>
                            <div class="form-group">
                                    <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_carouselDetail) }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="my-input"></label>
                                 <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_carousel2Detail) }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="my-input"></label>
                               <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_carousel3Detail) }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <label for="my-input"><b>Gambar Spesifikasi</b></label>
                            <div class="form-group">
                                    <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_spesifikasiDetail) }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="my-input"></label>
                                    <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_spesifikasi2Detail) }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="my-input"></label>
                                    <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_spesifikasi3Detail) }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="my-input"></label>
                                    <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_spesifikasi4Detail) }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <label for="my-input"><b>Gambar Ukuran</b></label>
                            <div class="form-group">
                                    <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_ukuranDetail) }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="my-input"></label>
                                    <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_ukuran2Detail) }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <label for="my-input"><b>Gambar Bahan</b></label>
                            <div class="form-group">
                                    <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_bahanDetail) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <label for="my-input"><b>Gambar Warna</b></label>
                            <div class="form-group">
                                    <img class="img-fluid shadow mt-3" src="{{ asset('storage/images/' . $gambar_warnaDetail) }}">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>
