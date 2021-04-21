<script>
    $(document).on('click','.btn-delete',function (e) {
        e.preventDefault()
        
        swal({
            title: "Are you sure?",
            text: "Deletion process can't be undone",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = $(this).data('href');
            } 
        });
    });
 </script>