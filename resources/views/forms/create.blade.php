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
            width: 800px;
            margin: 0 auto;
        }

        .headertitle {
            margin: 1em auto;
            width: 800px;
        }

        .select2.select2-container {
            margin-top: 7px;
            margin-bottom: 20px;
            width: 100%!important;
        }

        #Nederland {
            display: none;
        }

        #Nederland.show {
            display: block;
        }

        #Duitsland {
            display: none;
        }

        #Duitsland.show {
            display: block;
        }

        #Frankrijk {
            display: none;
        }

        #Frankrijk.show {
            display: block;
        }
/*
        #nameschool {
            display: none;
        }

        #nameschool.show {
            display: block;
        }

        #niveau {
            display: none;
        }

        #niveau.show {
            display: block;
        }
 */
        .button {
            background-color: #ed743e;
            color: white;
            padding: 12px 20px;
            border: none;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #f2895a;
        }
    </style>

</head>
<body>

<h1 class="headertitle">Opleiding toevoegen</h1>

<div class="container">

    <form method="POST" action="post">

        {{ csrf_field() }}

        <div>
            <label for="country">Land waar je hebt gestudeerd</label>
            <div class="form-group">
                <select name="country" id="country" class="form-control">
                    @foreach($countries as $id => $country)
                        <option id="{{ $id }}" value="{{ $country }}">
                            {{ $country }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div id="Nederland">
            <div id="nameschool">
                <label>Naam school</label>
                <input type="text" name="name_school" placeholder="Wat is de naam van jou school?">
            </div>
            <div id="niveau">
                <label>Niveau opleiding</label>*
                <div class="form-group">
                    <select name="education" id="education" class="form-control">
                        @foreach($educations as $id => $education)
                            <option value="{{ $education }}">
                                {{ $education }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div id="education_type">
                <label>Soort opleiding</label>
                <div class="form-group">
                    <select name="kind_of_education" id="education_types" class="form-control">
                        @foreach($type_educations as $id => $type_education)
                            <option value="{{ $type_education }}">
                                {{ $type_education }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div id="description">
                <label>Description</label>
                <textarea name="description" placeholder="Geef hier een beschrijving"></textarea>
            </div>
            <div id="date">
                <label>Datum opleiding gestart</label>
                <input type="date" name="date" placeholder="Startdate">
            </div>
            <div id="date">
                <label>Datum opleiding behaald</label>
                <input type="date" name="date2" placeholder="Enddate">
            </div>
            <div id="present">
                <input type="checkbox" name="stillbusy" value="now"> Ik ben nog bezig met deze opleiding
            </div>
            <br />
            <div>
                <label>Diploma</label>
                <input type="radio" name="diploma" value="1"> Ja
                <input type="radio" name="diploma" value="0" checked> Nee
            </div>
            <br />
            <div>
            <br/>
                <input type="submit" value="Verstuur">
            </div>
        </div>
        <div id="Duitsland">
            <div id="nameschool">
                <label>Naam school</label>
                <input type="text" name="name_school" placeholder="Wat is de naam van jou school?">
            </div>
            <div id="niveau">
                <label>Niveau opleiding</label>*
                <div class="form-group">
                    <select name="education_des" id="education_des" class="form-control">
                        @foreach($educations_de as $id => $education_des)
                            <option value="{{ $education_des }}">
                                {{ $education_des }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div id="education_type">
                <label>Soort opleiding</label>
                <div class="form-group">
                    <input type="text" name="kind_of_education" placeholder="Wat is de naam van de opleiding?">
                </div>
            </div>
            <div id="description">
                <label>Description</label>
                <textarea name="description" placeholder="Geef hier een beschrijving"></textarea>
            </div>
        </div>
        <br/>
        <input type="submit" value="Verstuur">
        <div id="Frankrijk">
            <div id="niveau">
                <label>Niveau opleiding</label>*
                <div class="form-group">
                    <select name="education_des" id="education_des" class="form-control">
                        @foreach($educations_fr as $id => $education_fr)
                            <option value="{{ $education_fr }}">
                                {{ $education_fr }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


 <script type="text/javascript">
     document.getElementById("country").onchange = function () {
        if (this[this.selectedIndex].value === "Nederland") {
            document.getElementById("Nederland").className = "show";
        } else {
            document.getElementById("Nederland").className = "";
        }
        if (this[this.selectedIndex].value === "Duitsland") {
            document.getElementById("Duitsland").className = "show";
        } else {
            document.getElementById("Duitsland").className = "";
        }
         if (this[this.selectedIndex].value === "Frankrijk") {
             document.getElementById("Frankrijk").className = "show";
         } else {
             document.getElementById("Frankrijk").className = "";
         }
    };

    $("#education").select2({
        placeholder: "Geef de naam van je opleiding",
        allowClear: false
    });

    $("#education_types").select2({
        placeholder: "Soort opleiding",
        allowClear: false
    });
</script>

</body>
</html>
