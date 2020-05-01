@extends('layouts.app')

@section('body')
<div class="page">
  @include('layouts.header')
  @include('layouts.nav')
  <div class="content">
    @yield('content')
  </div>
</div>
@endsection
