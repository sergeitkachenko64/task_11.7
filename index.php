<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'calc.php';?>
    <style>
    <?php echo file_get_contents("style.css");
    ?>
    </style>
    <title>Task 11.7</title>
</head>

<body>
    <div class="container">
        <h2>Таблица истинности PHP.</h2>
        <table>
            <thead>
                <tr>
                    <th> <strong>A</strong> </th>
                    <th> <strong>B</strong> </th>
                    <th> <strong>!A</strong> </th>
                    <th> <strong>A || B</strong> </th>
                    <th> <strong>A && B</strong> </th>
                    <th> <strong>A xor B</strong> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 0 </td>
                    <td> 0 </td>
                    <td> <?php funNotA(0,0);?> </td>
                    <td> <?php funAorB(0,0);?> </td>
                    <td> <?php funAandB(0,0);?> </td>
                    <td> <?php funAxorB(0,0);?> </td>
                </tr>
                <tr>
                    <td> 0 </td>
                    <td> 1 </td>
                    <td> <?php funNotA(0,1);?> </td>
                    <td> <?php funAorB(0,1);?> </td>
                    <td> <?php funAandB(0,1);?> </td>
                    <td> <?php funAxorB(0,1);?> </td>
                </tr>
                <tr>
                    <td> 1 </td>
                    <td> 0 </td>
                    <td> <?php funNotA(1,0);?> </td>
                    <td> <?php funAorB(1,0);?> </td>
                    <td> <?php funAandB(1,0);?> </td>
                    <td> <?php funAxorB(1,0);?> </td>
                </tr>
                <tr>
                    <td> 1 </td>
                    <td> 1 </td>
                    <td> <?php funNotA(1,1);?> </td>
                    <td> <?php funAorB(1,1);?> </td>
                    <td> <?php funAandB(1,1);?> </td>
                    <td> <?php funAxorB(1,1);?> </td>
                </tr>
            </tbody>
        </table>
        <h2>Гибкое сравнение в PHP.</h2>
        <table>
            <thead>
                <tr>
                    <th> <strong></strong> </th>
                    <th> <strong>true</strong> </th>
                    <th> <strong>false</strong> </th>
                    <th> <strong>1</strong> </th>
                    <th> <strong>0</strong> </th>
                    <th> <strong>-1</strong> </th>
                    <th> <strong>"1"</strong> </th>
                    <th> <strong>null</strong> </th>
                    <th> <strong>"php"</strong> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <strong>true</strong> </td>
                    <td> <?php flexibleComparison(true,true);?> </td>
                    <td> <?php flexibleComparison(true,false);?> </td>
                    <td> <?php flexibleComparison(true,1);?> </td>
                    <td> <?php flexibleComparison(true,0);?> </td>
                    <td> <?php flexibleComparison(true,-1);?> </td>
                    <td> <?php flexibleComparison(true,"1");?> </td>
                    <td> <?php flexibleComparison(true,null);?> </td>
                    <td> <?php flexibleComparison(true,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>false</strong> </td>
                    <td> <?php flexibleComparison(false,true);?> </td>
                    <td> <?php flexibleComparison(false,false);?> </td>
                    <td> <?php flexibleComparison(false,1);?> </td>
                    <td> <?php flexibleComparison(false,0);?> </td>
                    <td> <?php flexibleComparison(false,-1);?> </td>
                    <td> <?php flexibleComparison(false,"1");?> </td>
                    <td> <?php flexibleComparison(false,null);?> </td>
                    <td> <?php flexibleComparison(false,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>1</strong> </td>
                    <td> <?php flexibleComparison(1,true);?> </td>
                    <td> <?php flexibleComparison(1,false);?> </td>
                    <td> <?php flexibleComparison(1,1);?> </td>
                    <td> <?php flexibleComparison(1,0);?> </td>
                    <td> <?php flexibleComparison(1,-1);?> </td>
                    <td> <?php flexibleComparison(1,"1");?> </td>
                    <td> <?php flexibleComparison(1,null);?> </td>
                    <td> <?php flexibleComparison(1,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>0</strong> </td>
                    <td> <?php flexibleComparison(0,true);?> </td>
                    <td> <?php flexibleComparison(0,false);?> </td>
                    <td> <?php flexibleComparison(0,1);?> </td>
                    <td> <?php flexibleComparison(0,0);?> </td>
                    <td> <?php flexibleComparison(0,-1);?> </td>
                    <td> <?php flexibleComparison(0,"1");?> </td>
                    <td> <?php flexibleComparison(0,null);?> </td>
                    <td> <?php flexibleComparison(0,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>-1</strong> </td>
                    <td> <?php flexibleComparison(-1,true);?> </td>
                    <td> <?php flexibleComparison(-1,false);?> </td>
                    <td> <?php flexibleComparison(-1,1);?> </td>
                    <td> <?php flexibleComparison(-1,0);?> </td>
                    <td> <?php flexibleComparison(-1,-1);?> </td>
                    <td> <?php flexibleComparison(-1,"1");?> </td>
                    <td> <?php flexibleComparison(-1,null);?> </td>
                    <td> <?php flexibleComparison(-1,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>"1"</strong> </td>
                    <td> <?php flexibleComparison("1",true);?> </td>
                    <td> <?php flexibleComparison("1",false);?> </td>
                    <td> <?php flexibleComparison("1",1);?> </td>
                    <td> <?php flexibleComparison("1",0);?> </td>
                    <td> <?php flexibleComparison("1",-1);?> </td>
                    <td> <?php flexibleComparison("1","1");?> </td>
                    <td> <?php flexibleComparison("1",null);?> </td>
                    <td> <?php flexibleComparison("1","php");?> </td>
                </tr>
                <tr>
                    <td> <strong>null</strong> </td>
                    <td> <?php flexibleComparison(null,true);?> </td>
                    <td> <?php flexibleComparison(null,false);?> </td>
                    <td> <?php flexibleComparison(null,1);?> </td>
                    <td> <?php flexibleComparison(null,0);?> </td>
                    <td> <?php flexibleComparison(null,-1);?> </td>
                    <td> <?php flexibleComparison(null,"1");?> </td>
                    <td> <?php flexibleComparison(null,null);?> </td>
                    <td> <?php flexibleComparison(null,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>"php"</strong> </td>
                    <td> <?php flexibleComparison("php",true);?> </td>
                    <td> <?php flexibleComparison("php",false);?> </td>
                    <td> <?php flexibleComparison("php",1);?> </td>
                    <td> <?php flexibleComparison("php",0);?> </td>
                    <td> <?php flexibleComparison("php",-1);?> </td>
                    <td> <?php flexibleComparison("php","1");?> </td>
                    <td> <?php flexibleComparison("php",null);?> </td>
                    <td> <?php flexibleComparison("php","php");?> </td>
                </tr>
            </tbody>
        </table>
        <h2>Жёсткое сравнение в PHP.</h2>
        <table>
            <thead>
                <tr>
                    <th> <strong></strong> </th>
                    <th> <strong>true</strong> </th>
                    <th> <strong>false</strong> </th>
                    <th> <strong>1</strong> </th>
                    <th> <strong>0</strong> </th>
                    <th> <strong>-1</strong> </th>
                    <th> <strong>"1"</strong> </th>
                    <th> <strong>null</strong> </th>
                    <th> <strong>"php"</strong> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <strong>true</strong> </td>
                    <td> <?php strictComparison(true,true);?> </td>
                    <td> <?php strictComparison(true,false);?> </td>
                    <td> <?php strictComparison(true,1);?> </td>
                    <td> <?php strictComparison(true,0);?> </td>
                    <td> <?php strictComparison(true,-1);?> </td>
                    <td> <?php strictComparison(true,"1");?> </td>
                    <td> <?php strictComparison(true,null);?> </td>
                    <td> <?php strictComparison(true,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>false</strong> </td>
                    <td> <?php strictComparison(false,true);?> </td>
                    <td> <?php strictComparison(false,false);?> </td>
                    <td> <?php strictComparison(false,1);?> </td>
                    <td> <?php strictComparison(false,0);?> </td>
                    <td> <?php strictComparison(false,-1);?> </td>
                    <td> <?php strictComparison(false,"1");?> </td>
                    <td> <?php strictComparison(false,null);?> </td>
                    <td> <?php strictComparison(false,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>1</strong> </td>
                    <td> <?php strictComparison(1,true);?> </td>
                    <td> <?php strictComparison(1,false);?> </td>
                    <td> <?php strictComparison(1,1);?> </td>
                    <td> <?php strictComparison(1,0);?> </td>
                    <td> <?php strictComparison(1,-1);?> </td>
                    <td> <?php strictComparison(1,"1");?> </td>
                    <td> <?php strictComparison(1,null);?> </td>
                    <td> <?php strictComparison(1,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>0</strong> </td>
                    <td> <?php strictComparison(0,true);?> </td>
                    <td> <?php strictComparison(0,false);?> </td>
                    <td> <?php strictComparison(0,1);?> </td>
                    <td> <?php strictComparison(0,0);?> </td>
                    <td> <?php strictComparison(0,-1);?> </td>
                    <td> <?php strictComparison(0,"1");?> </td>
                    <td> <?php strictComparison(0,null);?> </td>
                    <td> <?php strictComparison(0,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>-1</strong> </td>
                    <td> <?php strictComparison(-1,true);?> </td>
                    <td> <?php strictComparison(-1,false);?> </td>
                    <td> <?php strictComparison(-1,1);?> </td>
                    <td> <?php strictComparison(-1,0);?> </td>
                    <td> <?php strictComparison(-1,-1);?> </td>
                    <td> <?php strictComparison(-1,"1");?> </td>
                    <td> <?php strictComparison(-1,null);?> </td>
                    <td> <?php strictComparison(-1,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>"1"</strong> </td>
                    <td> <?php strictComparison("1",true);?> </td>
                    <td> <?php strictComparison("1",false);?> </td>
                    <td> <?php strictComparison("1",1);?> </td>
                    <td> <?php strictComparison("1",0);?> </td>
                    <td> <?php strictComparison("1",-1);?> </td>
                    <td> <?php strictComparison("1","1");?> </td>
                    <td> <?php strictComparison("1",null);?> </td>
                    <td> <?php strictComparison("1","php");?> </td>
                </tr>
                <tr>
                    <td> <strong>null</strong> </td>
                    <td> <?php strictComparison(null,true);?> </td>
                    <td> <?php strictComparison(null,false);?> </td>
                    <td> <?php strictComparison(null,1);?> </td>
                    <td> <?php strictComparison(null,0);?> </td>
                    <td> <?php strictComparison(null,-1);?> </td>
                    <td> <?php strictComparison(null,"1");?> </td>
                    <td> <?php strictComparison(null,null);?> </td>
                    <td> <?php strictComparison(null,"php");?> </td>
                </tr>
                <tr>
                    <td> <strong>"php"</strong> </td>
                    <td> <?php strictComparison("php",true);?> </td>
                    <td> <?php strictComparison("php",false);?> </td>
                    <td> <?php strictComparison("php",1);?> </td>
                    <td> <?php strictComparison("php",0);?> </td>
                    <td> <?php strictComparison("php",-1);?> </td>
                    <td> <?php strictComparison("php","1");?> </td>
                    <td> <?php strictComparison("php",null);?> </td>
                    <td> <?php strictComparison("php","php");?> </td>
                </tr>
            </tbody>
        </table>
        <div class="conclusion">
            <h4>
                <strong>Вывод:</strong>
            </h4>
            <p>
                Поскольку PHP является языком со слабой неявной динамической типизацией, то это означает, что в языке
                существует неявное приведение типов, позволяющее совершать некоторые операции над объектами разного типа
                без строгого их приведения к одному типу. Так, например, при "гибком сравнении" числа 1 с булевым
                значением true или со строкой "1" мы видим равенство <strong>(true)</strong>, в то же время "жёсткое
                сравнение" говорит нам о том, что эти объекты не подобны <strong>(false)</strong>.
            </p>
        </div>
    </div>
</body>

</html>