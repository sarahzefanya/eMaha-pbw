<div>
    <form wire:submit.prevent = "simpan">
        <div class="form-group">
            <label>Judul</label>
            <input wire:model = "judul" type="text" placeholder="Masukkan Judul" class="form-control">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea wire:model = "deskripsi" name="" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan deskripsi"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </form>
</div>
