<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
    <script>
        function String_Operations(string_obj) {
            if (string_obj.length == 0) {
                document.getElementById("text_generator").innerHTML = "";
                return;
            } else {
                var xmlHttpRequest = new XMLHttpRequest();
    
                xmlHttpRequest.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("text_generator").innerHTML = this.responseText;
                    }
                };
                xmlHttpRequest.open("GET", "My_string_Operation.php?str_obj=" + encodeURIComponent(string_obj), true);
                xmlHttpRequest.send();
            }
        }
    
        function Searching(Searching_string) {
            if (Searching_string.length == 0) {
                document.getElementById("text_generator").innerHTML = "";
                return;
            } else {
                var xmlHttpRequest_Searching = new XMLHttpRequest();
    
                xmlHttpRequest_Searching.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("text_generator").innerHTML = this.responseText;
                    }
                };
                xmlHttpRequest_Searching.open("GET", "My_string_Operation.php?Searching_obj=" + encodeURIComponent(Searching_string), true);
                xmlHttpRequest_Searching.send();
            }
        }
    </script>
</head>
<body>
    <input type="text" id="string_input" placeholder="Enter a string">
    <button onclick="String_Operations(document.getElementById('string_input').value)">Perform String Operations</button>
    <br>
    <input type="text" id="search_input" placeholder="Enter a search string">
    <button onclick="Searching(document.getElementById('search_input').value)">Perform Searching</button>
    <br>
    <div id="text_generator"></div>
</body>
</html>