<div>
    <form wire:submit.prevent = "simpan_task">
        <div class="form-group">
            <label>Nama</label>
            <input wire:model = "nama" type="text" placeholder="Masukkan Nama" class="form-control">
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input wire:model = "judul_task" type="text" placeholder="Masukkan Judul Task" class="form-control">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea wire:model = "deskripsi_task" name="" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan deskripsi Task"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Kirim</button>
        </div>
    </form>
</div>
