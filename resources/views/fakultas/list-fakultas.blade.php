<<x-layout>

    <div class="container py-4">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0">List Fakultas</h2>

            <a href="/fakultas/create" class="btn btn-primary">
                + Tambah Fakultas
            </a>
        </div>

        {{-- Card --}}
        <div class="card shadow-sm border-0">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-dark">
                            <tr>
                                <th width="60">No</th>
                                <th>Nama Fakultas</th>
                                <th>Nama Dekan</th>
                                <th width="250" class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($fakultas as $item)

                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td class="fw-semibold">
                                        {{ $item->nama_fakultas }}
                                    </td>

                                    <td>
                                        {{ $item->nama_dekan }}
                                    </td>

                                    <td class="text-center">

                                        <div class="d-flex gap-2 justify-content-center">

                                            {{-- Detail --}}
                                            <a href="/fakultas/{{ $item->id }}"
                                               class="btn btn-info btn-sm text-white">
                                                Detail
                                            </a>

                                            {{-- Edit --}}
                                            <a href="/fakultas/{{ $item->id }}/edit"
                                               class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            {{-- Delete --}}
                                            <form action="/fakultas/{{ $item->id }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus data?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-danger btn-sm">
                                                    Hapus
                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="4" class="text-center text-muted py-4">
                                        Data fakultas belum tersedia.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</x-layout>