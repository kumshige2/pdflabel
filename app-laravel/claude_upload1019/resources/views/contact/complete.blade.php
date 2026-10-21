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
<h1><i class="fas fa-envelope"></i> 送信完了</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card card-gray">
            <div class="card-body text-center">
                <p>お問い合わせありがとうございました。</p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-default" onclick="location.href='{{ route('contact.create') }}'">
                    {{ __('戻る') }}
                </button>
            </div>
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
