<x-layout>
    <h1>Edit <Fieldset></h1>
    <form action="/fakultas/{{ $fakultas->id }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
            <input name="nama_fakultas"
             type="text" 
             placeholder="Nama Fakultas" 
             class="form-control"
             value="{{ $fakultas->nama_fakultas }}"
             >
        </div>
        <div class="form-group">
            <input type="text" name="nama_dekan" id="nama_dekan" placeholder="Nama Dekan" class="form-control"value="{{ $fakultas->nama_dekan }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>