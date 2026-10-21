@extends('adminlte::page')
@can('system') {{-- システム管理者権限のみに表示される --}}
<li><a href="">system</a></li>
@elsecan('admin') {{-- 管理者権限以上に表示される --}}
<li><a href="">admin</a></li>
@elsecan('user7') {{-- 一般権限以上に表示される --}}
<li><a href="">user7</a></li>
@elsecan('user') {{-- 一般権限以上に表示される --}}
<li><a href="{{ route('admin.contacts.index') }}">お問い合わせ一覧</a></li>
@endcan
<style>
    span.vali01 {
        color: #cc33ff;
    }
</style>
@section('title', 'Contacts')
@if (session('flash_message'))
<div class="flash_message">
    {{ session('flash_message') }}
</div>
@endif
@section('content_header')
<h1><i class="fas fa-envelope"></i> お問い合わせ詳細 <span style="font-size:0.8rem">#{{ $contact->id }}</span></h1>
@stop

@section('content')
{{ csrf_field() }}
<div class="row">
    <div class="col-md-9">
        <div class="card card-lightblue">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>名前</b> <span class="float-right">{{ $contact->name }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>メールアドレス</b> <span class="float-right">{{ $contact->email }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>件名</b> <span class="float-right">{{ $contact->subject }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>本文</b><br>
                        <span style="white-space: pre-wrap;">{{ $contact->body }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>受付日時</b> <span class="float-right">{{ $contact->created_at }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card card-gray">
            <div class="card-header">
                <h3 class="card-title">ステータス変更</h3>
            </div>
            <form action="{{ route('admin.contacts.updateStatus', $contact) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">ステータス</label>
                        <div class="col-sm-4">
                            <select id="status" name="status" class="form-control">
                                @foreach (['新規', '対応中', '解決済み'] as $status)
                                <option value="{{ $status }}" @selected($contact->status === $status)>{{ $status }}</option>
                                @endforeach
                            </select>
                            @error('status')
                            <span class="vali01">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" style="width:105px;">
                        {{ __('更新する') }}
                    </button>
                    <button type="button" class="btn btn-default" style="width:105px;" onclick="location.href='{{ route('admin.contacts.index') }}'">
                        {{ __('一覧へ戻る') }}
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
