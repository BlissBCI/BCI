document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("searchForm");
    const input = document.getElementById("searchInput");
  
    if (form && input) {
      form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent page reload
        alert("Search handler is working!"); // For debugging
  
        const keyword = input.value.toLowerCase();
        const bodyText = document.body.innerText.toLowerCase();
  
        if (keyword && bodyText.includes(keyword)) {
          alert(`Found: "${keyword}" on this page.`);
        } else {
          alert(`Sorry, "${keyword}" not found on this page.`);
        }
      });
    }
  });  