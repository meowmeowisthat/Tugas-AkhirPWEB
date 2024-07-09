document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[name="form2"]');

    form.addEventListener('submit', function(event) {
        const fields = [
            { id: 'matkul', message: "Wajib diisi" },
            { id: 'dosen', message: "Wajib diisi!" },
            { id: 'waktu', message: "Wajib diisi" },
            { id: 'tenggat', message: "Wajib disi kak" }
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

        if (!valid) {
            event.preventDefault();
        }
    });
});
