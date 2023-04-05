@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Structure
@endsection

@section('content')
    <section class="content container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <h2 class="text-center my-3">Editar informacion</h2>
                @includeif('partials.errors')
                <form method="POST" action="{{ route('structures.update', $structure->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('structure.form')

                        </form>
                
            </div>
        </div>
    </section>
@endsection
