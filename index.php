<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>

    <script>
        var interval = 1000;

        function setCountToElemnt(elemntId, count) {
            $("#" + elemntId).text(count);
        }

        function getNotifyCount() {
            $.ajax({
                type: "POST",
                url: "checker.php", //tady se volá php skript
                data: { //parametry
                    foo: Math.random(),
                    bar: Math.random()
                },
                success: function (payload) {
                    console.log(payload); // tohle to vrací
                    setCountToElemnt("count", payload.count);
                },
            })
            ;
        }

        //tady se to volá každý interval
        window.setInterval(function () {
            getNotifyCount();
        }, interval);


    </script>
</head>
<body>
<h1>Notify check</h1>
<hr>
Počet notfikací je <span style="color: red" id="count"></span>
<hr>
otevři si konzoli
</body>
</html>