document.addEventListener("DOMContentLoaded", () => {
  document.addEventListener("click", function (e) {
    if (!e.target.classList.contains("delete-btn")) return;

    const userId = e.target.dataset.id;

    if (!confirm("Are you sure?")) return;

    fetch(BASE_URL + "public/delete-user.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `id=${userId}&csrf_token=${CSRF_TOKEN}`,
    })
      .then((res) => res.json())
      .then((data) => {
        if (data.status === "success") {
          e.target.closest("tr").remove();
        } else {
          alert(data.message);
        }
      });
  });
});
