@extends('index')
@section('content')
<div class="container">

    <form method="get" action="">

        <h1 class="main-heading">Payment form</h1>

        <h2>Contact information</h2>

        <p>Name: *<input type="text" placeholder="Enter Your Name" required name="Name" id="name" value=""></p>

        <fieldset>

            <legend>Gender *</legend>

            <p>

                Male: <input type="radio" name="gender" required id="Male"><br>Female: <input type="radio" name="gender" id="Female"><br>other: <input type="radio" name="gender" id="gender">

            </p>

        </fieldset>

        <p>Address: *<textarea placeholder="Enter Your Address (permanent or temporary)" required name="address" rows="10" cols="100"></textarea></p>

        <p>Email: * <input placeholder="Enter your email address" required type="email" name="email" id="email"></p>

        <p>Pincode: *<input placeholder="Enter your Pincode" required type="number" name="pincode" id="pincode"></p>

        <hr>



        <div class="Payement-information">

            <h2>Payment information</h2>

        </div>

        Card-Type: <select required name="cardType" id="cardType">

            <option value="">Select a card type</option>

            <option value="VISA">VISA</option>

            <option value="RUPAY">RUPAY</option>

            <option value="MASTERCARD">MASTERCARD</option>

        </select>



        <p>Card-Number: *<br><input placeholder="Enter your Card Number" required type="number" name="cardNumber" id="cardNumber"></p>

        <p>Expires: *<br><input required type="date" name="expires" id="expires"></p>

        <p>Required CVV: *<input required type="password" name="CVV" id="CVV"></p>

        <button id="Button" type="submit">Pay Now</button>

    </form>

</div>
@endsection
