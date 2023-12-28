<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Sample</title>
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Source Sans Pro', sans-serif;
}

.container {
    display: block;
    width: 100%;
    background: #fff;
    max-width: 350px;
    padding: 25px;
    margin: 50px auto 0;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
}

.receipt_header {
    padding-bottom: 40px;
    border-bottom: 1px dashed #000;
    text-align: center;
}

.receipt_header h1 {
    font-size: 20px;
    margin-bottom: 5px;
    text-transform: uppercase;
}

.receipt_header h1 span {
    display: block;
    font-size: 25px;
}

.receipt_header h2 {
    font-size: 14px;
    color: #727070;
    font-weight: 300;
}

.receipt_header h2 span {
    display: block;
}

.receipt_body {
    margin-top: 25px;
}

table {
    width: 100%;
}

thead, tfoot {
    position: relative;
}

thead th:not(:last-child) {
    text-align: left;
}

thead th:last-child {
    text-align: right;
}

thead::after {
    content: '';
    width: 100%;
    border-bottom: 1px dashed #000;
    display: block;
    position: absolute;
}

tbody td:not(:last-child), tfoot td:not(:last-child) {
    text-align: left;
}

tbody td:last-child, tfoot td:last-child{
    text-align: right;
}

tbody tr:first-child td {
    padding-top: 15px;
}

tbody tr:last-child td {
    padding-bottom: 15px;
}

tfoot tr:first-child td {
    padding-top: 15px;
}

tfoot::before {
    content: '';
    width: 100%;
    border-top: 1px dashed #000;
    display: block;
    position: absolute;
}

tfoot tr:first-child td:first-child, tfoot tr:first-child td:last-child {
    font-weight: bold;
    font-size: 20px;
}

.date_time_con {
    display: flex;
    justify-content: center;
    column-gap: 25px;
}

.items {
    margin-top: 25px;
}

h3 {
    border-top: 1px dashed #000;
    padding-top: 10px;
    margin-top: 25px;
    text-align: center;
    text-transform: uppercase;
}
   </style>
</head>
<body>

<div class="container">

    <div class="receipt_header">
    <h1>Receipt of Sale <span>Shop Name</span></h1>
    <h2>Address: Lorem Ipsum, 1234-5 <span>Tel: +1 012 345 67 89</span></h2>
    </div>

    <div class="receipt_body">

        <div class="date_time_con">
            <div class="date">11/12/2020</div>
            <div class="time">11:13:06 AM</div>
        </div>

        <div class="items">
            <table>

                <thead>
                    <th>QTY</th>
                    <th>ITEM</th>
                    <th>AMT</th>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum</td>
                        <td>2.3</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum</td>
                        <td>2.3</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum</td>
                        <td>2.3</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum</td>
                        <td>2.3</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td>32.1</td>
                    </tr>

                    <tr>
                        <td>Cash</td>
                        <td></td>
                        <td>32.1</td>
                    </tr>

                    <tr>
                        <td>Change</td>
                        <td></td>
                        <td>32.1</td>
                    </tr>
                </tfoot>

            </table>
        </div>

    </div>


    <h3>Thank You!</h3>

</div>

</body>
</html>
