<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           .gondertusu{
                border: 1px solid #2afe00;
                background: #2afe00;
                height: 25px;
                padding: 5px 50px 5px 50px;
                margin: 0;
                color: #ffffff;
           } 
           .gondertusu:hover{
                border: 1px solid #2afe00;
                background: green;
                height: 25px;
                padding: 5px 50px 5px 50px;
                margin: 0;
                color: black;
                cursor:pointer;
           } 

    </style>
</head>
<body>
    <form action="sonuc.php" method="post">
        <table align="center" >
            <tr>
                <td> Adınız Soyadınız</td>
                <td>:</td>
                <td><input type="text" name="adisoyadi"> </td>
            </tr>
            <tr>
                <td> Telefon Numaranız</td>
                <td>:</td>
                <td><input type="text" name="telefon"> </td>
            </tr>
            <tr>
                <td> Email Adresiniz</td>
                <td>:</td>
                <td><input type="email" name="email"> </td>
            </tr>
            <tr>
                <td> Konu</td>
                <td>:</td>
                <td><input type="text" name="konu"> </td>
            </tr>
            <tr>
                <td valign="top"> Mesajınız</td>
                <td valign="top">:</td>
                <td><textarea height="100px"  name="mesaj"></textarea> </td>
            </tr>
            <tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td align="right"><input class="gondertusu"  type="submit" value="Gönder"></td>
            </tr>
        </table>
        


    
</body>
</html>