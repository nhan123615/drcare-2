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
                            @include('includes.messages')
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
                            @foreach($appointments as $appointment)
                                <tr>
                                    <td class="text-center ">
                
                                                {{-- <a href="#" role="button" class="btn btn-outline-primary btn-sm">Edit</a>

                                            &nbsp; --}}
                                        
                                                {{-- <a href="#" role="button" class="btn btn-outline-danger btn-sm">Delete</a> --}}

                                                <form id="delete-form-{{$appointment->id}}" action="{{route('appointments.destroy',$appointment->id)}}" style="display:none" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                  </form>
                                                <a class="btn btn-outline-danger btn-sm" href="" onclick="
                                                if(confirm('Are you sure, you want to delete this ?')){
                                                  event.preventDefault();
                                                  document.getElementById('delete-form-{{$appointment->id}}').submit();
                                                }else{
                                                  event.preventDefault();
                                                }">Delete</a>
                                                                   
                                    </td>
                                    <td>{{$appointment->id}}</td>
                                    <td>{{$appointment->first_name}}</td>
                                    <td>{{$appointment->last_name}}</td>
                                    <td>{{\Illuminate\Support\Facades\DB::table('service_types')->find($appointment->service_type_id)->name}}</td>
                                    <td>{{$appointment->date}}</td>
                                    <td>{{$appointment->time}}</td>
                                    <td>{{$appointment->message}}</td>
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
