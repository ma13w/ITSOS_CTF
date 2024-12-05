<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Code Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            gap: 20px;
            
            background-color: #f0f0f0;
        }
        .container {
            display: flex;
            width: 80%;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .code-block {
            display: none;
            flex: 1;
            padding: 20px;
            border-right: 1px solid #e0e0e0;
        }
        .code-block:last-child {
            border-right: none;
        }
        pre {
            background: #272822;
            color: #f8f8f2;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }
        .result {
            margin-top: 10px;
            background: #f8f8f2;
            padding: 10px;
            border-radius: 4px;
            color: #272822;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="code-block" id=5>
            <h2>Spiegazione</h2>
            <p>Il codice fornito quando viene eseguito restituisce un determinato output. Il secondo programma ha cifrato la flag, prova a capire come funziona aiutandoti anche con il primo programma e cerca di ottenere la flag. Inserire il testo all'interno di flag{QUI} per ottenere la flag completa.</p>
        </div>
    </div>
    <div class="container">
        <div class="code-block" id=1>
            <h2>Esempio di crittografia</h2>
            <pre>
flag = "ciao"

result = ""

for c in flag:
    result += str(ord(c)-96)
    result += "-"

print(result)
            </pre>
            <div class="result">
                <?php
                echo "Output: 3-9-1-15-";
                ?>
            </div>
        </div>
        <div class="code-block" id=2>
            <h2>Esempio di crittografia</h2>
            <pre>
flag = "aiuola"

result = ""

for c in flag:
    result += str(ord(c)-96)
    result += "-"

print(result)
            </pre>
            <div class="result">
                <?php
                echo "Output: 1-9-21-15-12-1-";
                ?>
            </div>
        </div>
        <div class="code-block" id=3>
            <h2>Esempio di crittografia</h2>
            <pre>
flag = "barca"

result = ""

for c in flag:
    result += str(ord(c)-96)
    result += "-"

print(result)
            </pre>
            <div class="result">
                <?php
                echo "Output: 2-1-18-3-1-";
                ?>
            </div>
        </div>
        <div class="code-block" id=4>
            <h2>Flag codificata</h2>
            <pre>
flag = "..." # flag nascosta appositamente dagli amministratori

result = ""

for c in flag:
    result += str(ord(c)-96)
    result += "-"

print(result)
            </pre>
            <div class="result">
                <?php
                echo "Output: 3-18-9-20-20-15-7-18-1-6-9-1-";
                ?>
            </div>
        </div>
    </div>

    <script>
        randomNumber = Math.floor(Math.random() * 3) + 1;
        document.getElementById(randomNumber).style.display = "block";        
        document.getElementById(4).style.display = "block";        
        document.getElementById(5).style.display = "block";        
    </script>
</body>
</html>