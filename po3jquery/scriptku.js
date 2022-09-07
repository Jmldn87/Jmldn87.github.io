$(document).ready(() => {
    $("td").click(function (event) {
      alert("Sekien lagi ning " + $(this).html() + "!");
    });
    $("th").click(function (event) {
      alert("Sekien lagi ning " + $(this).html() + "!");
    });
  });