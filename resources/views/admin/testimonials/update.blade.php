@extends('layouts.app')
@section('title','Ghani | Tambah Data About')
@section('container')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update</strong> Data Testimonials
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('testimonials.update', $testimonials->id)}}" enctype="multipart/form-data" method="post" class="">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama</label>
                                                <input type="text" name="nama"  class="form-control" value="{{$testimonials->nama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Deskripsi</label>
                                                <input type="text" name="pekerjaan"  class="form-control" value="{{$testimonials->pekerjaan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Ulasan</label>
                                                <textarea type="text" name="ulasan"  class="form-control">{{$testimonials->ulasan}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Profil</label>
                                                <input type="file" accept="image/*" name="profil"  class="form-control">
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Update
                                                </button> 
                                            </div>
                                        </form>
                                    </div>    
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