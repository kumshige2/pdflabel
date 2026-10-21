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
@section('title', 'Contact')

@section('content_header')
<h1><i class="fas fa-envelope"></i> お問い合わせ内容の確認</h1>
@stop

@section('content')
{{ csrf_field() }}
<div class="row">
    <div class="col-md-9">
        <div class="card card-gray">
            <div class="card-header">
                <h3 class="card-title">以下の内容で送信します。よろしいですか？</h3>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>名前</b> <span class="float-right">{{ $input['name'] }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>メールアドレス</b> <span class="float-right">{{ $input['email'] }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>件名</b> <span class="float-right">{{ $input['subject'] }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>本文</b><br>
                        <span style="white-space: pre-wrap;">{{ $input['body'] }}</span>
                    </li>
                </ul>
            </div>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <input type="hidden" name="name" value="{{ $input['name'] }}">
                <input type="hidden" name="email" value="{{ $input['email'] }}">
                <input type="hidden" name="subject" value="{{ $input['subject'] }}">
                <input type="hidden" name="body" value="{{ $input['body'] }}">
                <div class="card-footer">
                    <button type="submit" name="action" value="submit" class="btn btn-primary" style="width:105px;">
                        {{ __('送信する') }}
                    </button>
                    <button type="submit" name="action" value="back" class="btn btn-default" style="width:105px;">
                        {{ __('戻る') }}
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
