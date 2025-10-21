import 'flatpickr'
// Profile Foreground Img
if (document.querySelector("#profile-img-file-input")) {
  document
    .querySelector("#profile-img-file-input")
    .addEventListener("change", function () {
      var preview = document.querySelector(".user-profile-image");
      var file = document.querySelector(".profile-img-file-input").files[0];
      var reader = new FileReader();
      reader.addEventListener(
        "load",
        function () {
          preview.src = reader.result;
        },
        false
      );
      if (file) {
        reader.readAsDataURL(file);
      }
    });
}

// Profile Foreground Img
if (document.querySelector("#profile-img-file-input1")) {
  document
    .querySelector("#profile-img-file-input1")
    .addEventListener("change", function () {
      var preview = document.querySelector(".user-profile-image1");
      var file = document.querySelector(".profile-img-file-input1").files[0];
      var reader = new FileReader();
      reader.addEventListener(
        "load",
        function () {
          preview.src = reader.result;
        },
        false
      );
      if (file) {
        reader.readAsDataURL(file);
      }
    });
}

