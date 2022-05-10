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
                                        <strong>Tambah</strong> Data About
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('services.store')}}" method="post" class="">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Ikon</label>
                                                <input type="text" name="ikon"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Pekerjaan</label>
                                                <input type="text" name="pekerjaan"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Deskripsi Pekerjaan</label>
                                                <input type="text" name="desc_pekerjaan"  class="form-control">
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Tambah
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