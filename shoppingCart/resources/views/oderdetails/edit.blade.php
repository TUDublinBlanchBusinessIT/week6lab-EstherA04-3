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
                   {!! Form::model($oderdetail, ['route' => ['oderdetails.update', $oderdetail->id], 'method' => 'patch']) !!}

                        @include('oderdetails.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
@endsection