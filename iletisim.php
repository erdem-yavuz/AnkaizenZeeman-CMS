<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="section-title">
        <h2>Bize Ulaşın</h2>
    </div>
    <div style="display: flex; gap: 50px; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 300px;">
            <form action="mail/send.php" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
                <input type="text" name="name" placeholder="Adınız Soyadınız" required style="padding: 12px; border: 1px solid #ccc; border-radius: 5px;">
                <input type="email" name="email" placeholder="E-posta Adresiniz" required style="padding: 12px; border: 1px solid #ccc; border-radius: 5px;">
                <textarea name="message" rows="5" placeholder="Mesajınız" required style="padding: 12px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
                <button type="submit" class="btn-prime" style="border: none; cursor: pointer;">Gönder</button>
            </form>
        </div>
        <div style="flex: 1; min-width: 300px;">
            <h3>İletişim Bilgileri</h3>
            <p>📍 Adres: [Katalogdaki Adresinize Yazınız]</p>
            <p>📞 Telefon: [Telefon Numaranız]</p>
            <p>✉️ E-posta: info@ankaizen.com / info@zeeman.com</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
