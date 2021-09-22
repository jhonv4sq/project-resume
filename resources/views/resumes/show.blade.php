@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card text-white bg-dark">
      <div class="card-header">{{ $resume->title }}</div>

      <div class="card-body">

        <div class="d-inline-flex">

          <div>
            <img style="width: 120px;" src="{{ $resume->picture }}">
          </div>

          <div class="ml-4">

            <div>
              <h2>{{ $resume->name }}<h2/>
            </div>

            <div class="d-inline-flex" style="margin-top: 15%">
              <div class="font-weight-bold">
                <a href="mailto:{{ $resume->email }}">{{ $resume->email }}</a>
              </div>
              <div class="font-weight-bold ml-3">
                <a href="{{ $resume->website }}">{{ $resume->website }}</a>
              </div>
            </div>

          </div>
        </div>

        <div style="text-align:center">
          @if (isset($resume->about))
            <div class="mt-3">
              <p class="font-weight-bold">{{ $resume->about }}</p>
            </div>
          @endif
        </div>

      </div>

      </div>
    </div>
  </div>
</div>
@endsection