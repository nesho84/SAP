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
    .then((data) => {


      document.querySelector("#content").innerHTML = data;

      // document.querySelector("#content").innerHTML = `
      // <iframe width="500" height="500" src="data:application/pdf;base64,${data}"></iframe>
      // `;

      // Mark top menu links as active
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
