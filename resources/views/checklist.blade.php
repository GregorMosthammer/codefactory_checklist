<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>


<form action="/insert" method="post">

{{csrf_field()}}

Firstname
<input type="text" name="firstname"></br>
Lastname
<input type="text" name="lastname"></br>
Phonenumber
<input type="text" name="phone"></br>
Occupation
<input type="text" name="occupation"></br>
Birthdate
<input type="date" name="birthdate"></br>
Street
<input type="text" name="street"></br>
Streetnumber
<input type="number" name="street_number"></br>
Postelcode
<input type="number" name="plz"></br>
City
<input type="text" name="city"></br>
Country
<input type="text" name="country"></br>
Essay
<textarea name="essay" rows="5" cols="40"></textarea></br>

<input type="submit" name"submit" value="Add">

</form>

<br>


<form action="/insert_passport" method="post">
{{csrf_field()}}
Do you have a passport?

Yes 
<input type="checkbox" name="passport" id="checkbox" value="1"/>

No
<input type="checkbox" name="passport" id="checkbox" value="0"/>
<input type="submit" name"submit" value="Add">


</form>

    </body>

    <script>
    // for the checkbox just to be clickable once
$("input:checkbox").on('click', function() {
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
    </script>

</html>
