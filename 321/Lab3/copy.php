<?php

    if(!empty($_GET)){
        foreach($_GET as $key=>$value){
            // eval("\$$key='$value';");// eval(\$firstname=sin(30/180*pi()))
            $$key=$value;
        }
        print("Фамилия = $firstname, оклад = $oklad");
    }

    if (!empty($_POST))
    {
        $XVI="Иван Васильевич";
        $XVIII="Пётр Алексеевич";
        $XIX="Николай Павлович";
        
        $vek = $_POST['vek'];
        echo "В $vek царствовал ".$$vek;
    }


