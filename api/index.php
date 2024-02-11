<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
    <style>
                @import url("https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap");

        body {
        background-image: linear-gradient(
            to right,
            #fff3ff,
            #fee7ff,
            #fdceff,
            #ffa7ff
        );
        text-align: center;
        font-family: "Great Vibes", serif;
        font-size: 40px;
        }

        button {
        font-size: 60px;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 40px;
        padding-right: 40px;
        border-radius: 10px;
        text-transform: uppercase;
        cursor: pointer;
        }

        button.no {
        background-color: red;
        }

        button.yes {
        background-color: lightgreen;
        }

        .btn-container {
        display: flex;
        column-gap: 15px;
        justify-content: center;
        }

        @media (max-width: 600px) {
        body {
            font-size: 30px;
        }

        button {
            font-size: 40px;
        }
        }
    </style>
</head>
<body>
    <main>
        <form action="index.php" method="post">
            <h1>
                Will you be my valentine?
            </h1>
            <div class="btn-container">
                <button type="submit" class="yes">yes</button>
                <button type="button" class="no">no</button>
            </div>
        </form>
    </main>
    <script>
        const nobtn = document.querySelector(".no")
        const btnContainer = document.querySelector(".btn-container")

        nobtn.addEventListener("mouseover", () => {
        btnContainer.style.flexDirection = "row-reverse"
        })
        nobtn.addEventListener("mouseleave", () => {
        btnContainer.style.flexDirection = "row"
        })

        nobtn.addEventListener("touchstart", (e) => {
        e.preventDefault()
        if (btnContainer.style.flexDirection === "row-reverse") {
            btnContainer.style.flexDirection = "row"
        } else {
            btnContainer.style.flexDirection = "row-reverse"
        }
        })
    </script>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        echo "<p>Thank you</p>";
    }
?>