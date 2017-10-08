@extends('pages.front-end.layouts.template')
@section('title', 'Hubungi Kami')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/hubungikami.css') }}">
@endsection
@section('content')
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Hubungi Kami <small>Harap tulis apa yang ingin dilaporkan dengan jelas</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="{{ route('message.store') }}" method="POST">
                	{{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name Lengkap</label>
                            <input type="text" class="form-control" id="name" required="required" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Alamat email</label>
                                <input type="email" class="form-control" id="email" required="required" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subjek</label>
                            <select id="subject" name="subject" class="form-control" name="subject" required="required">
                                <option value="1">General Customer Service</option>
                                <option value="2">Suggestions</option>
                                <option value="3">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Pesan</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-warning pull-right" id="btnContactUs">
                            Kirim Pesan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                Medan<br>
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="#">sampahKU@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
@endsection