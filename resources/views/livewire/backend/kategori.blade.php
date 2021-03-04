<div>
    <div class="row">
        <div class="col-lg-12">
            <button type="button" class="btn btn-sm btn-secondary shadow" wire:click="Insert">Tambah Kategori</button>
        </div>
    </div>    

    <div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-datatables"   class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KATEGORI</th>
                                <th style="width: 400px" class="text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $e => $item)
                                <tr>
                                    <td>{{ $e + 1 }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td class="text-center" style="width: 200px">
                                        <button wire:click="EditKategori({{ $item->id }})"
                                            class="btn btn-sm btn-secondary btn-shadow mr-2 mt-2 mb-2 btn-edit">
                                            <i class="far fa-edit"></i>
                                            <span class="align-middle">EDIT</span>
                                        </button>
                                        <button wire:click="HapusKategori({{ $item->id }})"
                                            class="btn btn-sm btn-danger btn-shadow mr-2 mt-2 mb-2 btn-edit">
                                            <i class="fas fa-trash"></i>
                                            <span class="align-middle">HAPUS</span>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Insert-->
    <div wire:ignore.self id="insertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-sm shadow" wire:model="nama_kategori">
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

    {{-- Modal Edit --}}
    <div wire:ignore.self id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control form-control-sm shadow"  wire:model="nama_kategori">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="UpdateForm({{ $id_nama_kategori_edit }})">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>