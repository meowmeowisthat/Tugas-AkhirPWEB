document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[name="form1"]');

    form.addEventListener('submit', function(event) {
        const fields = [
            { id: 'matkul', message: "Nama wajib diisi" },
            { id: 'dosen', message: "Nomor hp wajib diisi!" },
            { id: 'waktu', message: "Ini jangan kosong" },
            { id: 'ruang', message: "Tempatnya dimana kak?" }
        ];

        let valid = true;

        for (let i = 0; i < fields.length; i++) {
            const field = document.getElementById(fields[i].id);
            if (!field.value.trim()) {
                alert(fields[i].message);
                valid = false;
                break; 
            }
        }

        
        if (valid) {
            const waktu = document.getElementById('waktu').value;
            const jam = parseInt(waktu.split(':')[0]);

            if (jam < 6 || jam > 18) {
                alert("Waktu harus di antara jam 6 pagi dan 6 sore");
                event.preventDefault();
            }
        } else {
            event.preventDefault();
        }
    });
});
