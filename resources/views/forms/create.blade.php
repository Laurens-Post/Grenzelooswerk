<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>

</head>
<body>

<h1>Grenzelooswerk Testformulier</h1>

<div class="container">

    <form method="POST" action="post">

        {{ csrf_field() }}

        <div>
            <label>Land behaald opleiding</label>
            <input type="text" name="country" placeholder="Country">
        </div>
        <div>
            <label>Opleiding</label>
            <input type="text" name="education" placeholder="Education">
        </div>
        <div>
            <label>Soort Opleiding</label>
            <input type="text" name="kind_of_education" placeholder="Kind of education">
        </div>
        <div>
            <label>Naam school</label>
            <input type="text" name="name_school" placeholder="Name school">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" placeholder="Description"></textarea>
        </div>
        <div>
            <label>Datum</label>
            <input type="date" name="date" placeholder="Date">
        </div>
        <div>
            <label>Diploma</label>
            <input type="text" name="diploma" placeholder="diploma">
        </div>
        <div>

            <input type="submit" value="Verstuur">

        </div>

    </form>

</div>

</body>
</html>