function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document
                .querySelector(".profile-pic")
                .setAttribute("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

document
    .getElementById("upload-avatar")
    .addEventListener("change", function () {
        readURL(this);
        document.querySelector(".avatar-wrapper label").style.padding = 0;
        document.getElementById("save-avatar").style.display = "inline-block";
    });
