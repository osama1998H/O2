@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="row px-4">
                        <h3>create new menu</h3>
                        <div class="container py-6 px-4">
                            <form action="{{ route('menuMaker.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" name="name" id="name"
                                        aria-describedby="name" autofocus placeholder="Menu Name">
                                    <small id="name" class="form-text text-muted">Enter the menu name with singular word
                                        e.x: Item or Product</small>
                                </div>
                                <button type="submit" class="btn btn-outline-primary my-4">Submit</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row px-4">
                        <h3>create new model</h3>
                        <div class="container py-6 px-4">
                            <form action="{{ route('modelMaker.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" name="name" id="name"
                                        aria-describedby="name" autofocus placeholder="Model Name">
                                    <small id="name" class="form-text text-muted">Enter the model name with singular word
                                        e.x: Item or Product</small>
                                </div>
                                <div class="form-group">
                                  <label for="menu">Menu</label>
                                  <select class="form-control" name="menu" id="menu">
                                   @foreach ($menus as $menu)
                                     <option value="{{$menu->id}}">{{$menu->name}}</option>
                                   @endforeach
                                  </select>
                                </div>

                                <div class="form-check mt-4">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="create_permission" id="create_permission" checked>
                                    Create Permission
                                  </label>
                                </div>
                                <button type="submit" class="btn btn-outline-primary my-4">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
