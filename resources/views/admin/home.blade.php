@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @if (!Auth::check())
                <div class="panel-body">
                    You are logged in! {{ Auth::guard('admin')->user()->name }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
