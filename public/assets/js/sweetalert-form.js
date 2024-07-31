document.getElementById('openFormBtn').addEventListener('click', function() {
    Swal.fire({
        title: 'Formu Doldurun',
        html: `
            <form id="swalForm">
                <label for="name">İsim:</label>
                <input type="text" id="name" name="name" class="swal2-input" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="swal2-input" required>

                <label for="experience">İş Tecrüben Kaç Sene?</label>
                <input type="number" id="experience" name="experience" class="swal2-input" required>

                <label for="sector">İş Sektörün?</label>
                <input type="text" id="sector" name="sector" class="swal2-input" required>

                <label for="infoSource">Mapa Hakkında Bilgiye Nereden Ulaştın?</label>
                <select id="infoSource" name="infoSource" class="swal2-input" required>
                    <option value="internet">İnternet</option>
                    <option value="arkadas">Arkadaş</option>
                    <option value="sosyalMedya">Sosyal Medya</option>
                    <option value="diger">Diğer</option>
                </select>

                <label for="interestReason">Bu Programa Neden İlgi Duyuyorsun?</label>
                <input type="text" id="interestReason" name="interestReason" class="swal2-input" required>

                <label for="hindrance">Bize Katılmanı Ne Engelleyebilir?</label>
                <input type="text" id="hindrance" name="hindrance" class="swal2-input" required>
            </form>
        `,
        showCancelButton: true,
        confirmButtonText: 'Gönder',
        preConfirm: () => {
            const form = document.getElementById('swalForm');
            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());

            if (Object.values(data).some(value => !value)) {
                Swal.showValidationMessage(`Lütfen tüm alanları doldurun`);
                return false;
            }

            return data;
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: formSubmitUrl,
                method: 'POST',
                data: {
                    _token: csrfToken,
                    name: result.value.name,
                    email: result.value.email,
                    experience: result.value.experience,
                    sector: result.value.sector,
                    infoSource: result.value.infoSource,
                    interestReason: result.value.interestReason,
                    hindrance: result.value.hindrance
                },
                success: function(response) {
                    Swal.fire({
                        title: 'Form Gönderildi!',
                        text: 'Bilgileriniz başarıyla gönderildi.',
                        icon: 'success'
                    });
                },
                error: function() {
                    Swal.fire({
                        title: 'Hata!',
                        text: 'Form gönderilirken bir hata oluştu.',
                        icon: 'error'
                    });
                }
            });
        }
    });
});
