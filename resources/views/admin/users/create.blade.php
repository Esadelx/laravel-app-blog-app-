@extends('layouts.admin')

@section('content')

    <h1> Create User</h1>
    {!!Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true])!!}
        <section class="form-group">
            {!!Form::label('name','Name:')!!}
            {!!Form::text('name',null,['class'=>'form-control'])!!}

        </section>
        <section class="form-group">
            {!!Form::label('email','Email:')!!}
            {!!Form::email('email',null,['class'=>'form-control'])!!}

        </section>
         <section class="form-group">
            {!!Form::label('password','Password:')!!}
            {!!Form::password('password',['class'=>'form-control'])!!}

        </section>
        <section class="form-group">
            {!!Form::label('role_id','Role:')!!}
            {!!Form::select('role_id',[''=>'Choose user role'] + $roles ,null,['class'=>'form-control'])!!}

        </section>
       <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), null , ['class'=>'form-control'])!!}
         </div>
        <section class="form-group">
            {!!Form::label('photo_id','Upload photo')!!}
            {!!Form::file('photo_id',null,['class'=>'form-control'])!!}

        </section>
        <section class="form-group">
            {!!Form::submit('Create User',['class'=>'btn btn-primary'])!!}
        </section>
    {!!Form::close()!!}
    @if(count($errors) > 0 )


    <div class="alert alert-danger">

        <ul>

            @foreach($errors->all() as $error)


                <li>{{$error}}</li>


            @endforeach



        </ul>



    </div>

@endif

    @stop