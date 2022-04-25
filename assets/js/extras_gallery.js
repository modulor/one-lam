function selectPhoto(photoPath) {
  $("#thePhoto").attr("src", `${BASE_URL}assets/images/gallery/${photoPath}`);
  $("#downloadButton").attr(
    "href",
    `${BASE_URL}assets/images/gallery/${photoPath}`
  );
}
