<x-layout>
    <form action="/fakultas" method="POST">
        @csrf
        <div class="form-group">
            <input name="nama_fakultas" type="text" placeholder="Nama Fakultas" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="nama_dekan" id="nama_dekan" placeholder="Nama Dekan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>