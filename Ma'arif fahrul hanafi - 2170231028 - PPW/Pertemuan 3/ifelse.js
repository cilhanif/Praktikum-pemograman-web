<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <script>
        function test() {
            var val1 = document.kirim.T1.value;
            if (val1 % 2 === 0) {
              document.kirim.T2.value = "Bilangan Genap";
            } else {
              document.kirim.T2.value = "Bilangan Ganjil";
            }
        }
    </script>
    <body>
        <form name="kirim">
            <p>
                BIL <input type="text" name="T1" size="20" />MERUPAKAN BIL
                <input type="text" name="T2" size="20" />
            </p>
            <p><input type="button" value="TEBAK" name="B1" onclick="test()" /></p>
        </form>
    </body>
</html>