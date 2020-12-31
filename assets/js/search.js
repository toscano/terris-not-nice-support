const searchBar = document.getElementById('searchBar');

$(document).ready(function() {
    $('#searchButton').click(function() {
      var searchString = ($(searchBar).val());
      document.getElementById("resultsContainer").style.display = "block";
      document.getElementById("srch").innerHTML = searchString;
      window.location.href = '#resultsContainer';
      $(".navbar-collapse").collapse('hide');
    });
    var input = document.getElementById("searchBar");
    input.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("searchButton").click();
        }
    });
});
