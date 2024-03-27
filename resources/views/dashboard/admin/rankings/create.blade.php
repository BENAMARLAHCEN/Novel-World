@extends('dashboard.layouts.app')
{{-- create ranking form --}}
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create Ranking</h1>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"
                            <div class="card-tools
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <form action="{{ route('dashboard.admin.rankings.store') }}" method="POST">
                            @csrf
                            <div class="form-group"
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
                   
                