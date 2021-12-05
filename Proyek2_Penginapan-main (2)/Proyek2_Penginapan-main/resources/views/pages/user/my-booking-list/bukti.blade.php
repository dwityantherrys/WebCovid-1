@extends('layouts.main')

@section('title')
  Pembayaran - Penginapan SDH
@endsection 

@section('header-title')
  Pembayaran
@endsection 
    
@section('breadcrumbs')
  <div class="breadcrumb-item"><a href="#">Transaksi</a></div>
  <div class="breadcrumb-item"><a href="{{ route('my-booking-list.index') }}">My Booking</a></div>
  <div class="breadcrumb-item active">
Pembayaran  </div>
@endsection

@section('section-title')
  Pembayaran
@endsection 
    
@section('section-lead')
  Silakan melakukan pembayaran via transfer.
@endsection
@section('content')

  @component('components.form')
    @slot('row_class', 'justify-content-center')
    @slot('col_class', 'col-12 col-md-6')
    
    @slot('form_method', 'POST')
    @slot('form_action', 'my-booking-list.store')



  @slot('input_form')

  @component('components.input-field')
  @slot('input_label', 'Rekening BCA')
  @slot('input_type', 'text')
  @slot('input_name', 'purpose')
  @slot('input_value','3680156042')
  @slot('readonly','readonly')
  @endcomponent

  @component('components.input-field')
  @slot('input_label', 'Rekening BNI')
  @slot('input_type', 'text')
  @slot('input_name', 'purpose')
  @slot('input_value','1112866372')
  @slot('readonly','readonly')
  @endcomponent

  @component('components.input-field')
  @slot('input_label', 'Rekening BTN')
  @slot('input_type', 'text')
  @slot('input_name', 'purpose')
  @slot('input_value','11301016158844')
  @slot('readonly','readonly')
  @endcomponent

  @component('components.input-field')
  @slot('input_label', 'Link Aja  Ovo ')
  @slot('input_type', 'text')
  @slot('input_name', 'purpose')
  @slot('input_value','081222219606')
  @slot('readonly','readonly')
@endcomponent
    @component('components.input-field')
        @slot('input_label', 'Foto / Screenshot Bukti Pembayaran')
        @slot('input_type', 'file')
        @slot('input_name', 'photo')
        @isset($item)
          @slot('input_value')
        @endisset 
    @endcomponent

@endslot

  @slot('card_footer', 'true')
  @slot('card_footer_class', 'text-right')
  @slot('card_footer_content')
    @include('includes.save-cancel-btn')
  @endslot 

@endcomponent

@endsection
