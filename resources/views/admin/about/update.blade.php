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
                                        <strong>Update</strong> Data About
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('about.update', $form_update_data_about->id)}}" method="post" class="">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Projek Selesai</label>
                                                <input type="number" name="projek_selesai"  class="form-control" value="{{$form_update_data_about->projek_selesai}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Client Senang</label>
                                                <input type="number" name="client_senang"  class="form-control" value="{{$form_update_data_about->client_senang}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Review Positif</label>
                                                <input type="number" name="review_positif"  class="form-control" value="{{$form_update_data_about->review_positif}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Skill HTML</label>
                                                <input type="number" name="skill_html"  class="form-control" value="{{$form_update_data_about->skill_html}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Skill CSS</label>
                                                <input type="number" name="skill_css"  class="form-control" value="{{$form_update_data_about->skill_css}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Skill Javascript</label>
                                                <input type="number" name="skill_javascript"  class="form-control" value="{{$form_update_data_about->skill_javascript}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Skill PHP</label>
                                                <input type="number" name="skill_php"  class="form-control" value="{{$form_update_data_about->skill_php}}">
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