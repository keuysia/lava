<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-7">

                {{-- Card Detail --}}
                <div class="card shadow-sm border-0">

                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">Detail Fakultas</h4>
                    </div>

                    <div class="card-body">

                        <table class="table table-borderless align-middle mb-0">

                            <tbody>

                                <tr>
                                    <th width="200">Nama Fakultas</th>
                                    <td width="20">:</td>
                                    <td class="fw-semibold">
                                        {{ $fakultas->nama_fakultas }}
                                    </td>
                                </tr>

                                <tr>
                                    <th>Nama Dekan</th>
                                    <td>:</td>
                                    <td>
                                        {{ $fakultas->nama_dekan }}
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                    <div class="card-footer bg-white border-0">

                        <div class="d-flex justify-content-end gap-2">

                            <a href="/fakultas"
                               class="btn btn-secondary">
                                Kembali
                            </a>

                            <a href="/fakultas/{{ $fakultas->id }}/edit"
                               class="btn btn-warning">
                                Edit
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>