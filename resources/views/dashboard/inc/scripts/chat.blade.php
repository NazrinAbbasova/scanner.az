<script>

    // Insert emoji to chat box

    $(".emoji").on("click", function () {
        let e = $(this).text();
        $("#chat-box").val($("#chat-box").val() + e);
    });

    $(".emoji__toggler").on("click", () => {
        $(".emojis").toggleClass("emojis--active");
    });

    // Get messages for the specific chat 

    $('.chat').on('click', function() {
        $(this).addClass('active').siblings().removeClass('active')

        const id = $(this).data('id')

        $('#chat-id').val(id)

        $(this).data('name').length ? $('.chat-name').html($(this).data('name')) : ""
        $(this).data('email').length ? $('.chat-email').html($(this).data('email')) : ""

        $('.chat-ip').html($(this).data('ip'))
        $('.chat-date').html($(this).data('date'))

        $(this).find('.pending').fadeOut()

        $.ajax({

            type: "post",
            url: '/{{ app()->getLocale() }}/dashboard/chat/get',
            data: {
                id: id
            },
            success: function(data){
                $('.chat-body').html(data)
                $(".chat-body").animate({
                    scrollTop: 1e4
                }, 500)
            }

        })
    })

    // Send message
    
    $(".chat-submit").on("click", function (e) {

        e.preventDefault();
        

        let t = $("#chat-box")
                .val()
                .replace(/(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/gi, "<a href='$1' target='_blank'>$1</a>")
        
        let ty = $('#chat-box').data('type')
        let id = $("#chat-id").val()

        $.ajax({
            url: "{{ route('chat',app()->getLocale()) }}",
            method: "post",
            data: {
                text: t,
                type: ty,
                id: id
            },
            success: function (r) {
                
                $('.chat-body').html(r)
                $(".chat-body").animate({
                    scrollTop: 1e4
                }, 1200)
                $("#chat-box").val("")
            }
        })
    })


    setInterval(() => {

    let id = $("#chat-id").val()

    if(id){
        $.ajax({
            url: "{{ route('chat.get',app()->getLocale()) }}",
            method: "post",
            data: {
                id: id,
                type: 1
            },
            success: function (r) {
                if(r){
                    $('.chat-body').html(r)
                    $(".chat-body").animate({
                        scrollTop: 1e4
                    }, 1200)
                }
            }
        })
    }

    }, 3000)

</script>