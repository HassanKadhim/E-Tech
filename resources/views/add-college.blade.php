@extends('layouts.master')
@section('title', 'Add-College')
@section('content')

<section id="contact" class="contact">
    <div class="row justify-content-center align-items-center h-100">
     <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
          <form action="{{route('add-college')}}" method="POST" role="form" class="form">
                    @csrf
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul class="text-right"> 
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach 
                            </ul>
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                        <div class="alert alert-success text-right"> 
                            {{$message}}
                        </div>
                    @endif
                    @if($message = Session::get('error'))
                        <div class="alert alert-danger text-right"> 
                            {{$message}}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="text" name="college_name" class="form-control" id="name" placeholder="College Name"  data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        
                        <div class="form-group mt-3 mt-md-0 pt-4">
                            <input type="number" class="form-control" name="avarage" id="email" placeholder="avarag"  data-msg="Please enter a valid avarage">
                            <div class="validate"></div>
                        </div>
                        <div class="form-group mt-3 mt-md-0 pt-4">
                            <select class="form-select" aria-label="Default select example" name="section">
                                <option selected="" disabled="">الدراسة</option>
                                <option value="تطبيقي">
                                    تطبيقي</option>
                                <option value="احيائي">
                                    احيائي</option>
                                <option value="ادبي">
                                    ادبي</option>
                            </select>
                        </div>
                        <div class="form-group mt-3 mt-md-0 pt-4">
                            <select class="form-select" aria-label="Default select example" name="gender">
                                <option selected="" disabled="">الجنس</option>
                                <option value="ذكر">
                                    ذكر</option>
                                <option value="انثى">
                                    انثى</option>
                                <option value="كِلا">
                                    كِلا</option>    
                            </select>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-outline-success btn-lg">Add College</button>
                    </div>
                </form>
    </div>
</section>

@stop