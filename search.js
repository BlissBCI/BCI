document.addEventListener("DOMContentLoaded", function () {
    const searchForm = document.getElementById("searchForm");
    const searchInput = document.getElementById("searchInput");
  
    if (searchForm && searchInput) {
      searchForm.addEventListener("submit", function (event) {
        event.preventDefault();
  
        const keyword = searchInput.value.toLowerCase();
        const bodyText = document.body.innerText.toLowerCase();
  
        if (keyword && bodyText.includes(keyword)) {
          alert(`Found: "${keyword}" on this page.`);
        } else {
          alert(`Sorry, "${keyword}" not found on this page.`);
        }
      });
    }
  });
  
