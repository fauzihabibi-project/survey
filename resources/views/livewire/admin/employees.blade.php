<div>

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="mb-0 fw-bold">Employees</h3>
            <small class="text-muted">List of registered employees</small>
        </div>

        <a href="{{ route('admin.employees.add') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i>
            Add Employee
        </a>
    </div>

    {{-- TABLE --}}
    <div class="card shadow-sm border-0">
        <div class="card-body table-responsive">

            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="60">No</th>
                        <th width="80">Photo</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th width="120">Status</th>
                        <th width="150">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($employees as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            @if($item->photo)
                                <img src="{{ asset('storage/'.$item->photo) }}"
                                     class="rounded-circle"
                                     style="width:45px;height:45px;object-fit:cover">
                            @else
                                <div class="avatar-placeholder">
                                    <i class="bi bi-person"></i>
                                </div>
                            @endif
                        </td>

                        <td class="fw-semibold">{{ $item->name }}</td>

                        <td>
                            <span class="text-muted">{{ $item->position }}</span>
                        </td>

                        <td>
                            <span class="badge rounded-pill
                                {{ $item->is_active ? 'bg-success' : 'bg-secondary' }}">
                                {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
                            </span>
                        </td>

                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.employees.edit', $item->id) }}"
                                   class="btn btn-sm btn-outline-warning">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <button class="btn btn-sm btn-outline-danger"
                                        wire:click="delete({{ $item->id }})"
                                        onclick="confirm('Yakin hapus karyawan ini?') || event.stopImmediatePropagation()">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                            Data karyawan masih kosong
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>
