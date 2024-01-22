function toggleDropdown() {
  var dropdown = document.getElementById("profile-d");
  dropdown.style.display =
    dropdown.style.display === "block" ? "none" : "block";
}
window.onclick = function (event) {
  if (!event.target.matches(".p")) {
    var dropdown = document.getElementById("profile-d");
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
    }
  }
};
    function showPopup() {
        var popup = document.getElementById("myPopup");
        var overlay = document.getElementById("overlay");

        popup.style.display = "block";
        overlay.style.display = "block";
    }
    function closePopup() {
        var popup = document.getElementById("myPopup");
        var overlay = document.getElementById("overlay");

        popup.style.display = "none";
        overlay.style.display = "none";
    }
    function confirmAction(isConfirmed) {
        if (isConfirmed) {
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = '';
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'nama'; 
            input.value = 'data yang ingin ditambahkan';
            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
        }

        closePopup();
    }
     function hidePopup() {
       var popup = document.getElementById("myPopup");
       var overlay = document.getElementById("overlay");

       popup.style.display = "none";
       overlay.style.display = "none";
     }
     