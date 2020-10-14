@extends('layouts.admin', ['pageHeader' => 'Appointments'])
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
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">Actions</th>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Service Type</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Message</th>
                            </tr>
                            </thead>
                            <tbody>                          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ stiped-table ] end -->
    </div>
@endsection
