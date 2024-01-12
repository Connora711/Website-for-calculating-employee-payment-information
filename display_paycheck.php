<!-- Program : assignment 4 -->
<!-- Name: Nicholas Adams -->
<!-- Date: 10/9/23 -->
<!-- Purpose: A website that inputs user information, calculates it, and then displays it. -->
<html>
    <head>  
        <title>Paycheck</title>
        <!-- inline css -->
        <style>
            table{
                border-collapse: collapse;
                width: 50%;
                margin: 20px auto;
            }
            th, td{
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th{
                background-color: #f2f2f2;
            }
            h1{
                text-align: center;
            }
            .return-button{
                text-align: center;
                margin-top: 20px;
            }
        </style>
    </head>
    <body><!--php code that takes the user input from the html page and calculates and displays it.-->
        <form action="user_input_a4.html" method="post">
            <?php
                //variables
                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $weekly_hours = $_POST["weekly_hours"];
                $hourly_rate = floatval($_POST["hourly_rate"]);

                //calculations
                $gross_pay = $weekly_hours * $hourly_rate;

                $federal_tax = $gross_pay * 0.1065;
                $state_tax = $gross_pay * 0.04;
                $social_security_tax = $gross_pay * 0.038;
                $medicare_tax = $gross_pay * 0.013;

                $total_taxes = $federal_tax + $state_tax + $social_security_tax + $medicare_tax;

                $net_pay = $gross_pay - $total_taxes;

                //output
                echo "<h1>Paycheck Information</h1>";
                echo "<table>";
                echo "<tr><th>Hello $first_name $last_name. This week you worked $weekly_hours hours and based on the pay rate of $$hourly_rate per hour, your pay check information is: </th></tr><br>";
                echo "<tr><td>Gross Pay: $".number_format($gross_pay, 2)."</td></tr><br>";
                echo "<tr><td>Federal Taxes: $".number_format($federal_tax, 2)."</td></tr><br>";
                echo "<tr><td>State Taxes: $".number_format($state_tax, 2)."</td></tr><br>";
                echo "<tr><td>Social Security Taxes: $".number_format($social_security_tax, 2)."</td></tr><br>";
                echo "<tr><td>Medicare Taxes: $".number_format($medicare_tax, 2)."</td></tr><br>";
                echo "<tr><td>Total Taxes: $".number_format($total_taxes, 2)."</td></tr><br>";
                echo "<tr><td>Net Pay: $".number_format($net_pay, 2)."</td></tr><br>";
                echo "</table>";
            ?>

            <!-- Return link -->
            <div class="return-button">
                <a href="user_input_a4.html">Return to input form</a>
        </form>
    </body>
</html>