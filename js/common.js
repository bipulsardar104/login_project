$(document).ready(function () {
  init("oninit");

  var windowWidth = $(window).width();
  console.log(windowWidth);
  if (windowWidth < 720) {
    $("span#label_side_bar_icon").hide();
  }

  $('button[data-bs-toggle="pill"]').on({
    click: function () {
      init("ngDestroy");
      if ($(this).data("bs-target") == "#v-pills-home") {
        $("#v-pills-home").addClass("show active");
      }
    },
  });
});


function init(what) {
  if (what == "oninit") {
    $("#v-pills-home").addClass("show active");
  } else {
    $("#v-pills-home").removeClass("show active");
  }

  console.log("Initialization logic for static elements");
}
