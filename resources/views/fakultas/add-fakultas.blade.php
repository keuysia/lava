<<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                {{-- Card Form --}}
                <div class="card shadow-sm border-0">

                    <div class="card-header bg-warning">
                        <h4 class="mb-0 text-dark">Edit Fakultas</h4>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif
                        <form action="{{ route('fakultas.store') }}" method="POST">
                            @csrf

                            {{-- Nama Fakultas --}}
                            <div class="mb-3">
                                <label for="nama_fakultas" class="form-label">
                                    Nama Fakultas
                                </label>

                                <input type="text" name="nama_fakultas" id="nama_fakultas" class="form-control"
                                    placeholder="Masukkan nama fakultas" value="" required>
                            </div>

                            {{-- Nama Dekan --}}
                            <div class="mb-4">
                                <label for="nama_dekan" class="form-label">
                                    Nama Dekan
                                </label>

                                <input type="text" name="nama_dekan" id="nama_dekan" class="form-control"
                                    placeholder="Masukkan nama dekan" value="" required>
                            </div>

                            {{-- Button --}}
                            <div class="d-flex justify-content-between">

                                <a href="/fakultas" class="btn btn-secondary">
                                    Kembali
                                </a>

                                <button type="submit" class="btn btn-warning text-dark">
                                    submit
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    </x-layout>
