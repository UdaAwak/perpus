{{-- <div class="alert alert-default-success">{{ session('success') }}</div> --}}

<script type="text/javascript">

$(function() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    @if (session('success'))
        Toast.fire({
            type: 'success',
            title: 'Data berhasil ditambahkan'
        })
    @elseif (session('info'))
        Toast.fire({
            type: 'info',
            title: 'Data berhasil diubah'
        })
    @elseif (session('danger'))
        Toast.fire({
            type: 'error',
            title: 'Data berhasil dihapus'
        })
    @endif
});

    </script>