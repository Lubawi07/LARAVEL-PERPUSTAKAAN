<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @stack('scripts')
            {{-- isi sini alertnya jika data belum ada tapi mau nginput  --}}
            @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
            @endif

          <form action="{{ route('kategori/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" name="kode" id="kode" class="form-control" value="{{ old('kode') }}">

            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button class="btn btn-success" type="submit">
                <i class="fas fa-save"></i>
                Simpan
            </button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>


