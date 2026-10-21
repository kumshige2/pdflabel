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
@section('title', 'Contacts')
@if (session('flash_message'))
<div class="flash_message">
    {{ session('flash_message') }}
</div>
@endif
@section('content_header')
<h1><i class="fas fa-envelope"></i> お問い合わせ一覧</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-lightblue">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="table-resopnsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width:3rem">{{ __('ID') }}</th>
                                <th>{{ __('名前') }}</th>
                                <th>{{ __('件名') }}</th>
                                <th style="width:8rem">{{ __('ステータス') }}</th>
                                <th style="width:12rem">{{ __('受付日時') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td style="font-size:1.0rem"><a href="{{ route('admin.contacts.show', $contact) }}">{{ $contact->id }}</a></td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>
                                    @if ($contact->status === '新規')
                                    <span class="badge badge-danger">{{ $contact->status }}</span>
                                    @elseif ($contact->status === '対応中')
                                    <span class="badge badge-warning">{{ $contact->status }}</span>
                                    @else
                                    <span class="badge badge-success">{{ $contact->status }}</span>
                                    @endif
                                </td>
                                <td>{{ $contact->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $contacts->links() }}
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
