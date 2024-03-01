document.addEventListener("DOMContentLoaded", function() {
    var currentLocation = window.location.href;

    var sidebarLinks = document.querySelectorAll(".sidebar-nav a");

    sidebarLinks.forEach(function(link) {
        if (link.href === currentLocation) {
            link.classList.add("active");
            // Jika item menu adalah submenu, tandai juga parentnya sebagai aktif
            var parent = link.parentElement.parentElement;
            if (parent.classList.contains("nav-item")) {
                parent.classList.add("active");
            }
        }
    });
});

function kembalikan(button) {
    // Mengubah teks tombol menjadi "Dikembalikan"
    button.innerHTML = "Dikembalikan";
    
    // Mengubah warna latar belakang tombol menjadi hijau
    button.style.backgroundColor = "green";
}





