<html>
    <head></head>
    <body>
        <?php
            /*echo "<b>Zadanie 1</b><br>";
            $x = "ta zmienna to pieciowyrazowe zdanie";
            $tab = array(10,22,45,89,5,53,75,38,67,99,$x);
            foreach($tab as $items)
            {
                echo $items."<br>";
            }
            

            
            echo "<br><b>Zadanie 2</b><br>";
            $tab2 = explode(' ',$x);
            print_r($tab2);



            echo "<br><br><b>Zadanie 3</b>";
            echo "<br> piewsza tablica: ".count($tab)."<br> druga tablica: ".count($tab2);



            echo "<br><br><b>Zadanie 4</b><br>";
            sort($tab);
            sort($tab2);
            echo "<u>posortowana pierwsza</u><br>";
            foreach($tab as $items)
            {
                echo $items."<br>";
            }
            echo "<br><u>posortowana druga</u><br>";
            foreach($tab2 as $items2)
            {
                echo $items2."<br>";
            }
            echo "<br>";
            rsort($tab);
            rsort($tab2);
            echo "<u>posortowana odwrotnie pierwsza</u><br>";
            foreach($tab as $ritems)
            {
                echo $ritems."<br>";
            }
            echo "<br><u>posortowana odwrotnie druga</u><br>";
            foreach($tab2 as $ritems2)
            {
                echo $ritems2."<br>";
            }



            echo "<br><br><b>Zadanie 5</b><br>";
            shuffle($tab);
            shuffle($tab2);
            echo "<u>przetasowana pierwsza</u><br>";
            foreach($tab as $sitems)
            {
                echo $sitems."<br>";
            }
            echo "<br><u>przetasowana druga</u><br>";
            foreach($tab2 as $sitems2)
            {
                echo $sitems2."<br>";
            }
            


            echo "<br><br><b>Zadanie 6</b><br>";
            $tab3 = array(1,2,3,4,5,6,7,8,9,0);
            echo current($tab3)."<br>";
            next($tab3);
            next($tab3);
            echo current($tab3)."<br>";
            echo reset($tab3); */

            echo "<br><br><b>Zadanie 7</b><br>";
        ?>
        <form method="POST">
            <input type="text" name="text"/>
            <input type="submit" name="dodaj1" value="Dodaj" />
            <input type="submit" name="usun1" value="Usun" />
        </form>
        <form method="POST">
            <input type="number" name="number" />
            <input type="submit" name="dodaj2" value="Dodaj" />
            <input type="submit" name="usun2" value="Usun" />
        </form>
        <?php
            if(isset($_POST['text']))
            {   
                $tabtext = array($_POST['text']);
                array_push($tabtext,'xyz','abc','zaq');
                print_r($tabtext);
            }
        
            if(isset($_POST['number']))
            {
                $tabnum = array($_POST['number']);
                array_push($tabnum,123,456,789);
                print_r($tabnum);
            }

            if($_POST['usun1'])
            {
                $removetext = array_pop($tabtext);
                print_r($tabtext);
            }

            if($_POST['usun2'])
            {
                $removenum = array_pop($tabnum);
                print_r($tabnum);
            }
        ?>
    </body>
</html>