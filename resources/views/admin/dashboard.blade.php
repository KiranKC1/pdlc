@extends('layouts.admin')

@section('body')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Dashboard</h2>
        </div>
        <div class="text-xs-right">
            <button class="btn btn-primary btn-min-width mr-2 mb-1" data-toggle="modal" data-target="#addAlbum">Add new</button>
        </div>
    </div>
    <div class="content-body">
        <div class="card">
            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <div class="row">
                        <form action="{{ route('test') }}" method="POST">
                            {{ csrf_field() }}
                            <button id='delete' type="button" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
@stop

@section('js')

@endsection