<div>
    @include('livewire.create')
    @include('livewire.update')
    @include('livewire.delete')
    <section>
        <div class="container ">
            <div class="row">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <div class="card bg-info">
                    <div class="card-header bg-secondary">
                        <h3>
                            Todos los Estudiantes
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                                Agregar Nuevo Estudiante
                            </button>
                        </h3>
                    </div>
                       <!-- Cuerpo de la tabla -->
                    <div class="card-body">
                        <table class="table tabl-striped table-bordered border-success table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Primer Nombre</th>
                                    <th>Apellido</th>
                                    <th>Correo</th>
                                    <th>N° Telefono</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->firstname}}</td>
                                    <td>{{$student->lastname}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateStudentMo" wire:click.prevent="edit({{$student->id}})">Editar</button>

                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#deleteStudentModal" wire:click.prevent="edit({{$student->id}})">Eliminar</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Paguinacion -->
                        <div class="d-flex justify-content-end text-danger">
                            {!! $students->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

