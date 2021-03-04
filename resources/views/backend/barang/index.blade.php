@extends('backend.layouts.master')

@section('title', 'Barang')

@section('content')
    <div class="content">
        <div class="panel-header bg-secondary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">@yield('title')</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2 justify-content-center">
                <div class="col-md-12">
                    <div class="card full-height">
                        <div class="card-body">
                            <livewire:backend.barang />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
