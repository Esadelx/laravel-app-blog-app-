@extends('layouts.admin')

@section('content')

    <h1> Edit User</h1>
    {!!Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true])!!}
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
            {!!Form::select('role_id', $roles ,null,['class'=>'form-control'])!!}

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
            {!!Form::submit('Update User',['class'=>'btn btn-primary'])!!}
        </section>
    {!!Form::close()!!}
    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}

                 <div class="form-group">
                    {!! Form::submit('Delete user', ['class'=>'btn btn-danger']) !!}
                 </div>

    {!! Form::close() !!}









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