@extends('layouts.base')

@section('documentTitle')
    Houses
@endsection

@section('content')
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>{{ $house->name }}</h1>
        </div>
      </div>
      <div class="row">
          <div class="col">
            <div class="card mb-3">
              <img src="{{ $house->photo }}" class="card-img-top" alt="{{ $house->name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $house->name }}</h5>
                <p class="card-text">{{ $house->description }}</p>
              </div>
            </div>
          </div>
      </div>
    </div>
@endsection