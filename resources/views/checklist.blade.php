<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

    </body>
</html>
