<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>String App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="index.css">

    <script>
        function String_Operations(string_obj) {
            if (string_obj.length == 0) {
                document.getElementById("text_generator").innerHTML = "";
                return;
            } else {
                var xmlHttpRequest = new XMLHttpRequest();

                xmlHttpRequest.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("text_generator").innerHTML = this.responseText;
                    }
                };
                xmlHttpRequest.open("GET", "My_string_Operation.php?str_obj=" + string_obj, true);
                // xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlHttpRequest.send();
            }
        }



        function Searching(Searching_string) {
            if (Searching_string.length == 0) {
                document.getElementById("text_generator").innerHTML = "";
                return;
            } else {
                var xmlHttpRequest_Searching = new XMLHttpRequest();

                xmlHttpRequest_Searching.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("text_generator").innerHTML = this.responseText;
                    }
                };
                xmlHttpRequest_Searching.open("GET", "My_string_Operation.php?Searching_obj=" + Searching_string, true);
                // xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlHttpRequest_Searching.send();
            }
        }
    </script>


</head>

<body>
    <p id="text_generator"></p>


    <h1>String Based Application</h1>
    <form class="fm">
        <div class="mb-3">
            <label for="text" class="form-label">Write Your Text Here for Checking Various Facts
                About your Text</label>
            <textarea class="form-control" onkeyup="String_Operations(this.value)" id="text" rows="6"></textarea>
        </div>
        <!-- <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">If You Want to Search Anything From This String.
                Write Here...</label>
            <input type="text" name="text" onkeyup="Searching(this.value)" id="text">

        </div> -->

    </form>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>