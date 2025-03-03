@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            oderdetail
        </h1>
    </section>
    <div class="content">
        @include('basic-template::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'oderdetails.store']) !!}

                        @include('oderdetails.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
