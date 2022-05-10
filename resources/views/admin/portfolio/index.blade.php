@extends('layouts.app')
@section('title','Ghani | Dashboard')
@section('container')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Portfolio</h2>
                                    <a href="{{route('portfolio.create')}}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus fa-sm"></i> Tambah
                                    </a> 
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach ($portfolio as $index => $prtf)
                                            <tr>
                                                <td>{{$index + 1}}</td>
                                                <td>{{$prtf->nama}}</td>
                                                <td>{{$prtf->deskripsi}}</td>
                                                <td>
                                                    <img src="{{asset('admin/images/portfolio/'. $prtf->gambar)}}" alt="{{$prtf->gambar}}" width="250px">
                                                </td>
                                                <td>
                                                    <a href="{{route('portfolio.edit', $prtf->id)}}"><i class="fas fa-edit"></i></a>
                                                    |
                                                    <a href="{{route('portfolio.destroy', $prtf->id)}}"><i class="fas fa-trash" style="color : red"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    {{-- {{$contacts->links()}} --}}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection