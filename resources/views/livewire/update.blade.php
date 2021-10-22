<!-- Modal de actualizar estudiante-->
<div wire:ignore.selt class="modal fade" id="updateStudentMo" tabindex="-1" role="dialog" aria-labelledby="updateStudentMo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateStudentMo">Editar Estudiante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="id" wire:model="ids" disable/>
                    <div class="form-group">
                        <label for="firtname">Primer Nombre</label>
                        <input type="text" name="firstname" class="form-control" wire:model="firstname" /> @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastname">Apellido</label>
                        <input type="text" name="lastname" class="form-control" wire:model="lastname" /> @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" name="email" class="form-control" wire:model="email" /> @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">N° Telefono</label>
                        <input type="text" name="phone" class="form-control" wire:model="phone" /> @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </form>
            </div>
            <!--Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click.prevent="update()">Actualizar Estudiante</button>
            </div>
        </div>
    </div>
</div>
