<a href="{{ route('admin.book.edit', $model) }}" class="btn btn-sm btn-warning">Edit</a>
<button href="{{ route('admin.book.destroy', $model) }}" class="btn btn-sm btn-danger" id="delete">Hapus</button>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>

    
    $('button#delete').on('click', function(e) {
        e.preventDefault();
        let href = $(this).attr('href');

        Swal.fire({
            title: 'Kamu yakin ingin hapus data ini ?',
            text: "Data tidak bisa dikembalikan jika dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
            }).then((result) => {
            if (result.value) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                
                Swal.fire(
                'Terhapus!',
                'Data berhasil dihapus.',
                'success'
                )
            }
        })

        
    })
</script>