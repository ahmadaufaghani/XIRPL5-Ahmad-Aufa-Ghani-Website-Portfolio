@extends('layouts.app')
@section('title','Ghani | About')
@section('container')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data About Me</h2>
                                    <a href="{{route('about.create')}}" class="btn btn-primary btn-sm">
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
                                                <th>Projek Selesai</th>
                                                <th>Client Senang</th>
                                                <th>Review Positif</th>
                                                <th>Skill HTML</th>
                                                <th>Skill CSS</th>
                                                <th>Skill Javascript</th>
                                                <th>Skill PHP</th>
                                                <th style="width: 15%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($about as $index => $abt)
                                            
                                            <tr>
                                                <td>{{$index + 1}}</td>
                                                <td>{{$abt->projek_selesai}}</td>
                                                <td>{{$abt->client_senang}}</td>
                                                <td>{{$abt->review_positif}}</td>
                                                <td>{{$abt->skill_html}}</td>
                                                <td>{{$abt->skill_css}}</td>
                                                <td>{{$abt->skill_javascript}}</td>
                                                <td>{{$abt->skill_php}}</td>
                                                <td>
                                                    <a href="{{route('about.edit', $abt->id)}}"><i class="fas fa-edit"></i></a>
                                                    |
                                                    <a href="{{route('about.destroy', $abt->id)}}"><i class="fas fa-trash" style="color : red"></i></a>
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
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