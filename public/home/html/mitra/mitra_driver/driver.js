$("#img-2").hide();
$("#img-3").hide();
$("#img-4").hide();
$("#img-5").hide();
$("#img-6").hide();
$("#btn-1").on("click", function () {
  $("#btn-1").addClass("aktif");
  $("#btn-2").removeClass("aktif");
  $("#btn-3").removeClass("aktif");
  $("#btn-4").removeClass("aktif");
  $("#btn-5").removeClass("aktif");
  $("#btn-6").removeClass("aktif");
  $("#img-1").show("slide");
  $("#img-2").hide("slide");
  $("#img-3").hide("slide");
  $("#img-4").hide("slide");
  $("#img-5").hide("slide");
  $("#img-6").hide("slide");
});

$("#btn-2").on("click", function () {
  $("#btn-2").addClass("aktif");
  $("#btn-1").removeClass("aktif");
  $("#btn-3").removeClass("aktif");
  $("#btn-4").removeClass("aktif");
  $("#btn-5").removeClass("aktif");
  $("#btn-6").removeClass("aktif");
  $("#img-2").show("slide");
  $("#img-1").hide("slide");
  $("#img-3").hide("slide");
  $("#img-4").hide("slide");
  $("#img-5").hide("slide");
  $("#img-6").hide("slide");
});

$("#btn-3").on("click", function () {
  $("#btn-3").addClass("aktif");
  $("#btn-1").removeClass("aktif");
  $("#btn-2").removeClass("aktif");
  $("#btn-4").removeClass("aktif");
  $("#btn-5").removeClass("aktif");
  $("#btn-6").removeClass("aktif");
  $("#img-3").show("slide");
  $("#img-2").hide("slide");
  $("#img-1").hide("slide");
  $("#img-4").hide("slide");
  $("#img-5").hide("slide");
  $("#img-6").hide("slide");
});

$("#btn-4").on("click", function () {
  $("#btn-4").addClass("aktif");
  $("#btn-1").removeClass("aktif");
  $("#btn-2").removeClass("aktif");
  $("#btn-3").removeClass("aktif");
  $("#btn-5").removeClass("aktif");
  $("#btn-6").removeClass("aktif");
  $("#img-4").show("slide");
  $("#img-2").hide("slide");
  $("#img-3").hide("slide");
  $("#img-1").hide("slide");
  $("#img-5").hide("slide");
  $("#img-6").hide("slide");
});

$("#btn-5").on("click", function () {
  $("#btn-5").addClass("aktif");
  $("#btn-1").removeClass("aktif");
  $("#btn-3").removeClass("aktif");
  $("#btn-4").removeClass("aktif");
  $("#btn-2").removeClass("aktif");
  $("#btn-6").removeClass("aktif");
  $("#img-5").show("slide");
  $("#img-2").hide("slide");
  $("#img-3").hide("slide");
  $("#img-4").hide("slide");
  $("#img-1").hide("slide");
  $("#img-6").hide("slide");
});

$("#btn-6").on("click", function () {
  $("#btn-6").addClass("aktif");
  $("#btn-1").removeClass("aktif");
  $("#btn-3").removeClass("aktif");
  $("#btn-4").removeClass("aktif");
  $("#btn-5").removeClass("aktif");
  $("#btn-2").removeClass("aktif");
  $("#img-6").show("slide");
  $("#img-2").hide("slide");
  $("#img-3").hide("slide");
  $("#img-4").hide("slide");
  $("#img-5").hide("slide");
  $("#img-1").hide("slide");
});
