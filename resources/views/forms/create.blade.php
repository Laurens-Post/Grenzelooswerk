<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <style>
        body {font-family: Montserrat, Arial, sans-serif;}
        * {box-sizing: border-box;}

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #ed743e;
            color: white;
            padding: 12px 20px;
            border: none;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #f2895a;
        }

        .container {
            border-radius: 8px;
            background-color: #efefef;
            padding: 20px;
        }
    </style>

</head>
<body>

<h1>Opleidingsformulier</h1>

<div class="container">

    <form method="POST" action="post">

        {{ csrf_field() }}

        <div>
            <label for="country">Land waar je hebt gestudeerd</label>
            <div class="form-group">
                <select name="country_id" id="country" class="form-control">
                    @foreach($countries as $id => $country)
                        <option value="{{ $id }}">
                            {{ $country }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <label>Naam school</label>
            <input type="text" name="name_school" placeholder="Wat is de naam van jou school?">
        </div>
        <div>
            <label>Opleiding</label>*
            <div class="form-group">
                <select name="education_id" id="education" class="form-control">
                    @foreach($educations as $id => $education)
                        <option value="{{ $id }}">
                            {{ $education }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <label>Soort opleiding</label>
            <input type="text" name="kind_of_education" placeholder="Wat is de naam van uw opleiding?">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" placeholder="Geef hier een beschrijving"></textarea>
        </div>
        <div>
            <label>Datum</label>
            <input type="text" name="date" placeholder="Date">
        </div>
        <br />
        <div>
            <label>Diploma</label>
            <input type="radio" name="diploma" value="1"> Ja
            <input type="radio" name="diploma" value="0" checked> Nee
        </div>
        <div>
        <br/>
            <input type="submit" value="Verstuur">

        </div>

    </form>

</div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

    $("#education").select2({
        placeholder: "Kies opleiding",
        allowClear: false
    });
</script>

</body>
</html>
