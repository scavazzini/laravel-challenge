@extends('layout')

@section('title', 'OW Calendar | New event')

@section('css')
    <link href="{{ URL::asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" media="screen">
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/events') }}">Events</a></li>
    <li class="breadcrumb-item active">New event</li>
@endsection

@section('content')

    <div class="card mt-3">

        <div class="card-header">
            <span class="align-self-center">New Event</span>
        </div>

        <div class="card-body">

            <form method="post">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" class="form-control" id="inputTitle"
                           placeholder="Event title" value="{{old('title')}}">
                </div>

                <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea name="description" class="form-control" id="inputDescription" rows="3">{{old('description')}}</textarea>
                </div>

                <div class="form-group">
                    <label for="inputStart">Start in</label>
                    <input type="text" readonly name="start" class="form-control form_datetime"
                           id="inputStart" value="">
                </div>

                <div class="form-group">
                    <label for="inputEnd">End in</label>
                    <input type="text" readonly name="end" class="form-control form_datetime"
                           id="inputEnd" value="">
                </div>

                <button type="submit" class="btn btn-primary">Create event</button>

            </form>

        </div>

    </div>

@endsection

@section('scripts')
    @include('subviews.datetime_picker', ['input' => '.form_datetime'])
@endsection
