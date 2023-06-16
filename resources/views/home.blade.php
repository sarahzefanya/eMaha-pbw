@extends('layouts.main')

@section('title', 'eMaha - Home')
    
@section('content')
    <h1>Selamat Datang {{ Auth::user()->nama_user ?? ''}}</h1>
@endsection