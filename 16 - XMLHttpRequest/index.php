<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML Http Request</title>
</head>

<body>
    <?php
    // XHR, web sayfasında asenkron bir şekilde veri alışverişi yapmak için kullanılan bir JS nesnesidir. Bu nesne, sunucuya HTTP isteği göndermek ve sunucudan gelen verileri almak için kullanılır.
    ?>

    <div>
        <form>
            <div>
                <label for="">Username</label>
                <div><input type="text" name="username"></div>
            </div>
            <br />

            <div>
                <label>Comment</label>
                <div><textarea name="comment"></textarea></div>
            </div>

            <div>
                <button>Submit</button>
            </div>

        </form>

        <div id="content">Please fill the form and submit</div>

    </div>

    
    <script>
        let formElement = document.querySelector('form');
        formElement.addEventListener('submit', (event) => {
            // event.preventDefault(), formun submit edilmesi durumunda sayfanın yeniden yüklenmesi gibi varsayılan davranış engellenir. Yani JS'de bir olayın varsayılan davranışını engellemek için kullanılır.
            event.preventDefault();

            let xhr = new XMLHttpRequest();

            // Sunucuya göndermek istediğimiz HTTP isteğini (POST) tanımladık ve hangi url'e (dosyaya) gideceğini tanımladık.
            xhr.open('POST', 'message.php');


            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Yanıt tamamen alındığında (yani yükleme tamamlandığında) tetiklenecek bir işlev atadık.
                    xhr.onload = function(e) {
                        document.getElementById('content').innerHTML = xhr.responseText;
                    };
                }
            }

            // Formdaki verileri userData değişkenine atadık.
            let userData = new FormData(formElement);

            // İsteği sunuxcuya gönderdik.
            xhr.send(userData);
        })
    </script>
</body>

</html>