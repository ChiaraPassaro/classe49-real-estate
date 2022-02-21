@extends('layouts.base')

@section('documentTitle')
    Houses
@endsection

@section('content')
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Houses</h1>
        </div>
      </div>
      <div class="row">
          @foreach ($houses as $house)
          <div class="col-4">
            <div class="card mb-3">
              <img src="{{ $house->photo }}" class="card-img-top" alt="{{ $house->name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $house->name }}</h5>
                <p class="card-text">{{ $house->description }}</p>
                <a href="{{ route('houses.show', $house) }}" class="btn btn-primary">View House</a>
              </div>
            </div>
          </div>
          @endforeach
      </div>
      <div class="row">
        <div class="col">
          {{$houses->links()}}
        </div>
      </div>
    </div>
@endsection