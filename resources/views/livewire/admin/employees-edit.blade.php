<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Edit Employee</h4>

        @if($employee->photo)
            <img src="{{ asset('storage/'.$employee->photo) }}" width="80" class="mb-3">
        @endif

        <div class="mb-2">
            <label>Name</label>
            <input type="text" class="form-control" wire:model.defer="name">
        </div>

        <div class="mb-2">
            <label>Position</label>
            <input type="text" class="form-control" wire:model.defer="position">
        </div>

        <div class="mb-2">
            <label>New Photo (optional)</label>
            <input type="file" class="form-control" wire:model="photo">
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" wire:model="is_active">
            <label class="form-check-label">Active</label>
        </div>

        <button class="btn btn-warning" wire:click="update">Update</button>
        <a href="/employees" class="btn btn-secondary">Back</a>
    </div>
</div>
