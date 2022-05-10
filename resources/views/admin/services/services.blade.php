@extends('layouts.app')
@section('title','Ghani | Services')
@section('container')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Services</h2>
                                    <a href="{{route('services.create')}}" class="btn btn-primary btn-sm">
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
                                                <th>Ikon</th>
                                                <th>Pekerjaan</th>
                                                <th>Deskripsi Pekerjaan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @foreach($services as $index => $srvs)
                                        <tbody>
                                            <td>{{$index+1}}</td>
                                            <td><i class="fa fa-{{$srvs->ikon}}"></i></td>
                                            <td>{{$srvs->pekerjaan}}</td>
                                            <td>{{$srvs->desc_pekerjaan}}</td>
                                            <td style="width: 15%">
                                                <a href="{{route('services.edit', $srvs->id)}}"><i class="fas fa-edit"></i></a>
                                                    |
                                                <a href="{{route('services.destroy', $srvs->id)}}"><i class="fas fa-trash" style="color : red"></i></a>
                                            </td>
                                        </tbody>
                                        @endforeach
                                    </table>
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