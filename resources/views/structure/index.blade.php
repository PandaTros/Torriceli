@extends('layouts.app')

@section('template_title')
Structure
@endsection

@section('content')
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Fichas Estructuras</h2>
            @if ($message = Session::get('success'))
            
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-hover">
                    <thead class="thead">
                        <tr>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>Clave</th>
                            <th>Numero</th>
                            <th>Avance</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($structures as $structure)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $structure->nombres }}</td>
                            <td>{{ $structure->clave }}</td>
                            <td>{{ $structure->numero }}</td>
                            <td>{{ $structure->avance }}</td>
                            <td>
                                <form action="{{ route('structures.destroy',$structure->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " target="_blank" href="{{ route('structures.show',$structure->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                    <a class="btn btn-sm btn-success" href="{{ route('structures.edit',$structure->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


            {!! $structures->links() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
        <a href="{{ route('structures.create') }}" class="btn btn-primary">Añadir</a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>
@endsection