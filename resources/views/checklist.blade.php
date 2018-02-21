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


Passport

<form action="/insert_passport" method="post">
{{csrf_field()}}
Do you have a passport?

Yes 
<input type="checkbox" name="passport" id="passportYes" value="1"/>

No
<input type="checkbox" name="passport" id="passportNo" value="0"/>
<input type="submit" name"submit" value="Add">

<div id="passportDiv" style="display:none">
<a href="https://www.usps.com/international/passports.htm">What you need for a passport</a>
</div>
</form>
<br>
Financing
(You must have financing available or be approved for financing in order to obtain your VISA. 
We recommend getting approved, getting your VISA, and then taking the loan out.)

<form action="/insert_financing" method="post">
{{csrf_field()}}
I already have 18,500$ 
<input type="checkbox" name="financing" id="financingYes" value="1"/>

I need financing
<input type="checkbox" name="financing" id="financingNo" value="0"/>
<input type="submit" name"submit" value="Add">

<div id="financingDiv"  style="display:none">
b.i. Since we are a coding bootcamp, traditional student financing is not an option. The best option is to obtain a ‘personal loan.’ We also recommend stating the purpose of the loan as “Travel.”  
b.i.1. We recommend applying to your local bank first.
b.i.2. Another good place to start is www.lendingtree.com Lending Tree also offers a free credit rating. 
b.i.3. https://personalloans.com/
b.i.4. https://www.lendingclub.com/loans/personal-loans
b.i.5. https://apply.santanderbank.com/personal/forms/ploan.aspx
b.i.6. https://www.marcus.com/us/en
b.i.7. Credit Card
</div>


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

// for the checkbox passport
$(function () {
        $("#passportNo").click(function () {
            if ($(this).is(":checked")) {
                $("#passportDiv").fadeIn( "slow", function() {});
            } else {
                $("#passportDiv").fadeOut( "slow", function() {});
            }
        });
    });
$(function () {
        $("#passportYes").click(function () {
            $('#passportDiv').fadeOut( "slow", function() {});
        });
    });

// for the checkbox financing
$(function () {
        $("#financingNo").click(function () {
            if ($(this).is(":checked")) {
                $("#financingDiv").fadeIn( "slow", function() {});
            } else {
                $("#financingDiv").fadeOut( "slow", function() {});
            }
        });
    });
$(function () {
        $("#financingYes").click(function () {
            $('#financingDiv').fadeOut( "slow", function() {});
        });
    });



    </script>

</html>
