// for the browser back and forward button
window.onpopstate = function (event) {
  if (event.state) {
    showPage(event.state.page);
  } else {
    showPage("home");
  }
};

// Load pages dinamically
function showPage(page) {
  fetch(`pages/${page}.php`)
    .then((response) => response.text())
    .then((text) => {
      document.querySelector("#content").innerHTML = text;

      // Make top menu links active
      document.querySelectorAll(".nav-link").forEach((link) => {
        link.classList.remove("active");

        if (link.dataset.page === page) {
          link.classList.add("active");
        }
      });
    })
    .catch((err) => {
      console.log(err);
    });
}

// Select all links in the header menu
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll("a[data-page]").forEach((link) => {
    link.onclick = function () {
      const page = this.dataset.page;

      history.pushState({ page: page }, "", `${page}`);
      showPage(page);
    };
  });
});
