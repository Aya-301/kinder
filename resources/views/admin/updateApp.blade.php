@extends('layouts.pages')

@section('content')
<!-- Appointment Start -->
 <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Update Appointment</h1>
                                <form action="{{route('updateApp', $appointment->id)}}" method="post">
                                  @csrf
                                  @method('put')
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="gurdian_name" name="gurdian_name" placeholder="Gurdian Name" value="{{$appointment->gurdian_name}}">
                                                <label for="gurdian_name" >Gurdian Name</label>
                                                @error('gurdian_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="gurdian_email" name="gurdian_email" class="form-control border-0" id="gurdian_email" placeholder="Gurdian Email" value="{{$appointment->gurdian_email}}">
                                                <label for="gurdian_email">Gurdian Email</label>
                                                @error('gurdian_email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="child_name" name="child_name" placeholder="Child Name" value="{{$appointment->child_name}}">
                                                <label for="child_name">Child Name</label>
                                                @error('child_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="child_age" name="child_age" placeholder="Child Age" value="{{$appointment->child_age}}">
                                                <label for="child_age">Child Age</label>
                                                @error('child_age')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 100px">{{$appointment->message}}</textarea>
                                                <label for="message">Message</label>
                                                @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="{{asset('assets/img/appointment.jpg')}}" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->
        @endsection

@section('title')
appointment
@endsection