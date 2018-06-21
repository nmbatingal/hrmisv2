@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">List of Vacant Positions</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Title</th>
                              <th scope="col">Salary Grade</th>
                              <th scope="col">Slot Available</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($positions as $key => $position)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $position->position_title }} ({{ $position->acronym }})</td>
                                    <td>{{ $position->salary_grade }}</td>
                                    <td>{{ $position->slot_available }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Vacant Position</div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('positions.store'), 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            {{ Form::label('position_title', 'Title', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">

                                {{ Form::text('position_title', old('username'), ['class' => 'form-control', 'required', 'autofocus']) }}
                                
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('acronym', 'Acronym', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">

                                {{ Form::text('acronym', old('acronym'), ['class' => 'form-control', 'required']) }}

                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('salary_grade', 'Salary Grade', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">

                                {{ Form::text('salary_grade', old('salary_grade'), ['class' => 'form-control', 'required']) }}

                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('slot', 'Slot Available', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">

                                {{ Form::text('slot', old('slot'), ['class' => 'form-control']) }}

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
