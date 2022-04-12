$(() => {
  openEventModal();
});

function openEventModal() {
  console.log("openEventModal");
  const eventModal = new bootstrap.Modal(document.getElementById("eventModal"));
  eventModal.show();
}
