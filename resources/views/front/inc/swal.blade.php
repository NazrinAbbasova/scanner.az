<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    @if (session('success'))
    swal({
        text: "{{ session('success') }}",
        icon: "success",
        button: "Ok",
    });
    @endif

    @if (session('error'))
    swal({
        text: "{{ session('error') }}",
        icon: "error",
        button: "Ok",
    });
    @endif
</script>