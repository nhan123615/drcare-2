@extends('layouts.admin', ['pageHeader' => 'Oral Diseases'])
@section('content')
    <div class="row">
        <!-- [ stiped-table ] start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Oral Diseases</h5>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Actions</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\Illuminate\Support\Facades\DB::table('diseases')->where('disease_type_id', 1)->get() as $disease)
                                <tr>
                                    <td class="text-center">
                                        <a href="{{route('oral-diseases-edit', ['id' => $disease->id])}}" role="button" class="btn btn-outline-primary btn-sm">Edit</a>
                                    </td>
                                    <td>{{$disease->id}}</td>
                                    <td>{{$disease->name}}</td>
                                    <td>{{$disease->description}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ stiped-table ] end -->
    </div>
@endsection
