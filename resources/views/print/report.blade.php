<!doctype html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        table,
        td,
        th {
            border: .5px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            padding: 5px;
            vertical-align: top;
        }

        td {
            padding: 5px;
            vertical-align: top;
            /* text-align: center; */
        }
        input[type=checkbox] {
            transform: scale(.7);
        }
         .a {
            width: 55px; 
            height: 55px;
         }
         label {
        display: block;
        padding-left: 15px;
        text-indent: -15px;
        }
        input {
        width: 13px;
        height: 13px;
        padding: 0;
        margin:0;
        vertical-align: bottom;
        position: relative;
        top: -5px;
        left: 7px;
        *overflow: hidden;
        
        }
        .spec_table td {
margin-left: -20px;
font-size: .9em;
line-height: 1.1em;
border-top: none !important;
}
.val {
    font-family: Courier New,Courier,Lucida Sans Typewriter,Lucida Typewriter,monospace;
    text-align: center;
    text-transform: uppercase;
    /* font-weight: bold; */
}
.nor {
    font-family: Courier New,Courier,Lucida Sans Typewriter,Lucida Typewriter,monospace;
    text-transform: uppercase;
    /* font-weight: bold; */
}
.tex {
    font-family: Courier New,Courier,Lucida Sans Typewriter,Lucida Typewriter,monospace;
    text-transform: uppercase;
    font-size: 11px;
    margin-left: 20px;
    /* font-weight: bold; */
}

    </style>
</head>

<body>
    <?php 
        $sessions = json_encode($sessions); 
        $sessions = json_decode($sessions, true); 
    
        $week = json_encode($week); 
        $week = json_decode($week, true); 
    ?>

    <div style="font-family:Calibri;">
        <center style="font-size: 13px; margin-bottom: 3px;"">POST INVENTORY SYSTEM</center>
        <center style="font-size: 8px; margin-bottom: 10px; font-family:Arial, Helvetica, sans-serif;">INVENTORY REPORT</center>
        <center style="font-size: 10px; font-weight: bold; margin-bottom: 10px; font-family:Arial, Helvetica, sans-serif;">{{strtoupper($week)}}</center>

        <table style="width:100%; font-size: 10px; padding: 20px; font-family:Arial, Helvetica, sans-serif">
            <thead>
                <tr style="background-color: #a7dceb;">
                    <th>Type</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sessions as $key=>$session)
                <tr>
                    <td width="20%">
                    <center>{{$session['type']}}</center>
                    </td>
                    <td width="35%" class="nor"><center>{{$session['product']}}</center></td>
                    <td width="10%" class="nor"><center>{{$session['quantity']}}</center></td>
                    <td width="15%" class="nor"><center>{{$session['price']}}</center></td>
                    <td width="20%" class="nor"><center>{{$session['date']}}</center></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
