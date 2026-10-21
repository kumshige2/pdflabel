@extends('adminlte::page')
@can('system') {{-- システム管理者権限のみに表示される --}}
<li><a href="">system</a></li>
@elsecan('admin') {{-- 管理者権限以上に表示される --}}
<li><a href="">admin</a></li>
@elsecan('user7') {{-- 一般権限以上に表示される --}}
<li><a href="">user7</a></li>
@elsecan('user') {{-- 一般権限以上に表示される --}}
<li><a href="">user</a></li>
@endcan
<style>
    span.vali01 {
        color: #cc33ff;
    }
</style>
@section('title', 'Contact')
@if (session('flash_message'))
<div class="flash_message">
    {{ session('flash_message') }}
</div>
@endif
@section('content_header')
<h1><i class="fas fa-envelope"></i> お問い合わせ</h1>
@stop

@section('content')
{{ csrf_field() }}
@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="row">
    <div class="col-md-9">
        <div class="card card-gray">
            <div class="card-header">
                <h3 class="card-title">お問い合わせ内容を入力してください</h3>
            </div>
            <form action="{{ route('contact.confirm') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">名前</label>
                        <div class="col-sm-10">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="vali01">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">メールアドレス</label>
                        <div class="col-sm-10">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="vali01">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subject" class="col-sm-2 col-form-label">件名</label>
                        <div class="col-sm-10">
                            <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}">
                            @error('subject')
                            <span class="vali01">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="body" class="col-sm-2 col-form-label">本文</label>
                        <div class="col-sm-10">
                            <textarea id="body" class="form-control" name="body" rows="8">{{ old('body') }}</textarea>
                            @error('body')
                            <span class="vali01">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" style="width:105px;">
                        {{ __('確認する') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('js')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{ asset(mix('js/app.js')) }}" defer></script>
@stop
