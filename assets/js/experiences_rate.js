function selectStar(starNumber) {
  enableSubmitButton();
  setAllStarsEmpty();

  for (let index = 1; index <= starNumber; index++) {
    $(`#star_${index}`).removeClass("fa-regular fa-star");
    $(`#star_${index}`).addClass("fa-solid fa-star star-selected");
  }

  $("#total_stars").val(starNumber);
}

function enableSubmitButton() {
  $("#btn-submit").attr("disabled", false);
}

function setAllStarsEmpty() {
  $('i[name="star"]').removeClass("fa-solid fa-star star-selected");
  $('i[name="star"]').addClass("fa-regular fa-star");
}
