<div class="leaderboard-wrapper">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold mb-0">
            🏆 Top {{ $limit }} Best Employees
        </h4>
    </div>

    <div class="table-responsive">
        <table class="table leaderboard-table align-middle">
            <thead>
                <tr>
                    <th width="80">Rank</th>
                    <th>Employee</th>
                    <th>Position</th>
                    <th>Rating</th>
                    <th>Total Survey</th>
                </tr>
            </thead>

            <tbody>
                @forelse($leaderboard as $index => $item)
                    <tr class="leaderboard-row {{ $index < 3 ? 'top-rank' : '' }}">

                        {{-- RANK --}}
                        <td>
                            <span class="rank-badge rank-{{ $index + 1 }}">
                                {{ $index + 1 }}
                            </span>
                        </td>

                        {{-- EMPLOYEE --}}
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                @if($item->photo)
                                    <img src="{{ asset('storage/'.$item->photo) }}"
                                         class="leaderboard-avatar">
                                @else
                                    <div class="leaderboard-avatar placeholder">
                                        {{ strtoupper(substr($item->name,0,1)) }}
                                    </div>
                                @endif

                                <div>
                                    <div class="fw-semibold">{{ $item->name }}</div>
                                </div>
                            </div>
                        </td>

                        {{-- POSITION --}}
                        <td class="text-muted">
                            {{ $item->position }}
                        </td>

                        {{-- RATING --}}
                        <td>
                            @if($item->avg_rating)
                                <span class="fw-semibold">
                                    {{ number_format($item->avg_rating, 1) }}
                                </span>
                                <span class="text-warning">★</span>
                                <small class="text-muted">/ 5</small>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>

                        {{-- TOTAL --}}
                        <td>
                            <span class="badge bg-light text-dark">
                                {{ $item->total_survey }} survey
                            </span>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            Belum ada data survey
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
