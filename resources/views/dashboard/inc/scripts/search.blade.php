<script>
    $('.searchCategory').on('keyup',function(){
        let filter = $(this).val().toUpperCase()
        let li = $('#categoryModal .modal-list li')

        for(let i = 0; i < li.length; i++){
        let txtValue = li[i].textContent || li[i].innerText
        if(txtValue.toUpperCase().indexOf(filter) > - 1) {
            $(li[i]).show()
        } else {
            $(li[i]).hide()
        }
        }
    })

    $('.search').on('keyup',function(){
        let filter = $(this).val().toUpperCase()
        let li = $('.modal-list li')

        for(let i = 0; i < li.length; i++){
        let txtValue = li[i].textContent || li[i].innerText
        if(txtValue.toUpperCase().indexOf(filter) > - 1) {
            $(li[i]).show()
        } else {
            $(li[i]).hide()
        }
        }
    })

    $('.searchTag').on('keyup',function(){
        let filter = $(this).val().toUpperCase()
        let li = $('#tagModal .modal-list li')

        for(let i = 0; i < li.length; i++){
        let txtValue = li[i].textContent || li[i].innerText
        if(txtValue.toUpperCase().indexOf(filter) > - 1) {
            $(li[i]).show()
        } else {
            $(li[i]).hide()
        }
        }
    })

    $('.searchSize').on('keyup',function(){
        let filter = $(this).val().toUpperCase()
        let li = $('#sizeModal .modal-list li')

        for(let i = 0; i < li.length; i++){
        let txtValue = li[i].textContent || li[i].innerText
        if(txtValue.toUpperCase().indexOf(filter) > - 1) {
            $(li[i]).show()
        } else {
            $(li[i]).hide()
        }
        }
    })

    $('.searchAttribute').on('keyup',function(){
        let filter = $(this).val().toUpperCase()
        let li = $('.attribute')

        for(let i = 0; i < li.length; i++){
        let txtValue = li[i].textContent || li[i].innerText
        if(txtValue.toUpperCase().indexOf(filter) > - 1) {
            $(li[i]).show()
        } else {
            $(li[i]).hide()
        }
        }
    })

</script>