<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Add Employee</h4>

        <div class="mb-2">
            <label>Name</label>
            <input type="text" class="form-control" wire:model.defer="name">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-2">
            <label>Position</label>
            <input type="text" class="form-control" wire:model.defer="position">
            @error('position') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-2">
            <label>Photo</label>
            <input type="file" class="form-control" wire:model="photo">
            @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" wire:model="is_active">
            <label class="form-check-label">Active</label>
        </div>

        <button class="btn btn-primary" wire:click="save">Save</button>
        <a href="/employees" class="btn btn-secondary">Back</a>
    </div>
</div>
