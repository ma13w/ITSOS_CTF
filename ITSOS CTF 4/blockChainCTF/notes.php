<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotesAPP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        #noteInput {
            width: 70%;
            padding: 8px;
            margin-bottom: 10px;
        }

        #addNoteBtn {
            padding: 8px;
            cursor: pointer;
        }

        #notesList {
            list-style-type: none;
            padding: 0;
        }

        .noteItem {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .deleteNoteBtn {
            background-color: #ff6666;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>NotesAPP</h1>
    <h5><a href="./source_notes.html">Source code</a></h5>

    <form action="" method="post">
        <input type=" text" id="noteInput" name="noteInput" placeholder="Inserisci la tua nota">
        <button id="addNoteBtn" onclick="addNote()">Aggiungi Nota</button>
    </form>

    <ul id="notesList"></ul>

    <?php
    $FLAG = "flag{b4s1c_php_f4t4l_3rr0r}";

    if (
        $_SERVER["REQUEST_METHOD"] == "POST" &&
        isset($_POST["noteInput"]) &&
        !is_array($_POST["noteInput"])
    ) {
        if (strcmp($FLAG, $_POST["noteInput"]) == 0) {
            echo "<li class='noteItem'>$FLAG<button></button></li>.";
        } else {
            echo "<li class='noteItem'>Nota sospetta. <!-- Utlizzo strcmp() --></li>";
        }
    } else if (is_array($_POST["noteInput"])) {
        echo "<li class='noteItem'>Fatal error: Uncaught TypeError: strcmp(): Argument #2 ($string2) must be of type string, array given in itsos-ctf.great-site.net/notes.php:149 Stack trace: #0 itsos-ctf.great-site.net/notes.php(149): strcmp('flag{b4s1c_php_f4t4l_3rr0r}', Array) #1 {main} thrown in itsos-ctf.great-site.net/notes.php on line 149</li>.";
    }
    ?>

    <script>
    function addNote() { var e = document.getElementById("noteInput"), t = document.getElementById("notesList"); if ("" !== e.value.trim()) { var n = document.createElement("li"); n.className = "noteItem"; var a = document.createTextNode(e.value); n.appendChild(a); var o = document.createElement("button"); o.className = "deleteNoteBtn", o.appendChild(document.createTextNode("Elimina")), o.onclick = function () { n.remove(), updateLocalStorage() }, n.appendChild(o), t.appendChild(n), e.value = "", updateLocalStorage() } } function updateLocalStorage() { for (var e = document.getElementById("notesList"), t = [], n = 0; n < e.children.length; n++) { var a = e.children[n].firstChild.nodeValue; t.push(a) } localStorage.setItem("notes", JSON.stringify(t)) } function loadNotes() { var e = document.getElementById("notesList"), t = localStorage.getItem("notes"); t && JSON.parse(t).forEach((function (t) { var n = document.createElement("li"); n.className = "noteItem", n.appendChild(document.createTextNode(t)); var a = document.createElement("button"); a.className = "deleteNoteBtn", a.appendChild(document.createTextNode("Elimina")), a.onclick = function () { n.remove(), updateLocalStorage() }, n.appendChild(a), e.appendChild(n) })) } loadNotes();
    </script>

</body>

</html>