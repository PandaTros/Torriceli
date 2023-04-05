@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Structure
@endsection

@section('content')
    <section class="content container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <h2 class="text-center my-3">Añadir estructura</h2>
                @includeif('partials.errors')
                <form method="POST" action="{{ route('structures.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('structure.form')

                        </form>
                
            </div>
        </div>
    </section>
@endsection
