// Ambil elemen flash message
const flashMessages = document.querySelectorAll('.alert');

// Iterasi melalui setiap pesan flash
flashMessages.forEach((flashMessage) => {
    // Ambil durasi dari atribut data-duration (jika tersedia), jika tidak, gunakan default 5000 milidetik (5 detik)
    const duration = flashMessage.dataset.duration || 5000;

    // Atur timeout untuk menghapus flash message setelah durasi tertentu
    setTimeout(() => {
        flashMessage.style.display = 'none';
    }, duration);
});
