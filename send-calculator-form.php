<?php
$place = trim(strip_tags($_POST['shkafPlace'])); //В какой комнате разместить
$contain = implode(',', $_POST['ZshkafContain']); // массив Что будет хранится в шкафу
$dt = date("Y-m-d H:i:s"); // Вывод даты и времени
$typeOfFurnityre = implode(',', $_POST['OffType']);
$type = trim(strip_tags($_POST['officeType'])); // Тип шкафа купе
$deep= trim(strip_tags($_POST['deep'])); // Глубина шкафа
$height = trim(strip_tags($_POST['height'])); // Высота шкафа
$width =trim(strip_tags($_POST['width'])); // Ширина шкафа
$cover = implode(',', $_POST['ZshkafCover']); // Наполнение дверей купе
$terms = implode(',', $_POST['Zdopusloviya']); //Доп условия
$name = trim(strip_tags($_POST['name']));
$phone =  trim(strip_tags($_POST['phone']));
$utm = trim(strip_tags($_POST['utm']));
$tableAmount = trim(strip_tags($_POST['table']));
$armchairAmount = trim(strip_tags($_POST['armchair']));
$sofaAmount = trim(strip_tags($_POST['sofa']));
$nightstandAmount = trim(strip_tags($_POST['nightstand']));
$closetAmount = trim(strip_tags($_POST['closet']));
$kitchenAmount = trim(strip_tags($_POST['kitchen']));
$shoemakerAmount = trim(strip_tags($_POST['shoemaker']));
$hangerAmount = trim(strip_tags($_POST['hanger']));
$partitionAmount = trim(strip_tags($_POST['partition']));
$otherAdditional = trim(strip_tags($_POST['otherAdditional']));


if((isset($phone)&&$_POST['phone']!='')){
    $to = 'vitaliy.flashnika@gmail.com';
    $subject = 'Заявка на подбор шкафа-купе! сайт Get-best.com.ua';
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Дата: '.$dt.'</p>
                        <p>Имя: '.$name.'</p>
                        <p>Телефон: '.$phone.'</p> 
                        <p>Комната: '.$place.'</p>
                        <p>Стиль офисной мебели: '.$type.'</p>
                        <p>Тип мебели: '.$typeOfFurnityre.'</p>
                        <p>Количество столов: '.$tableAmount.' шт.</p>
                        <p>Количество кресел: '.$armchairAmount.' шт.</p>
                        <p>Количество диванов: '.$sofaAmount.' шт.</p>
                        <p>Количество тумб: '.$nightstandAmount.' шт.</p>
                        <p>Количество шкафов: '.$closetAmount.' шт.</p>
                        <p>Количество кухонь: '.$kitchenAmount.' шт.</p>
                        <p>Дополнительная комплектация: '.$contain.' шт.</p>
                        <p>Количество урн: '.$shoemakerAmount.' шт.</p>
                        <p>Количество вешалок: '.$hangerAmount.' шт.</p>
                        <p>Количество перегородок: '.$partitionAmount.' шт.</p>
                        <p>Другая дополнительная комплектация: '.$otherAdditional.'</p>                        
                        <p>Дополнительные условия покупки: '.$terms.'</p>                                                                                        
                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Просчет офиски <info@get-best.com.ua>\r\n";
    $response = [];
    if(mail($to, $subject, $message, $headers)){
        $response = ['success'=> true,'name'=>$name,'phone'=>$phone];
    } else {
        $response = ['success'=> false,'message'=>'Что-то пошло не так! Попробуйте отправить сообщение позже !'];
    }
    $response['success'] ? header('HTTP/1.1 200 OK') : header('HTTP/1.1 500 Internal Server Error') ;
    header('Content-Type: application/json');
    echo json_encode($response);
}
 $msg = "Просчет офисной мебели"."%0A"."Дата: $dt"."%0A"."Имя: $name"."%0A"."Телефон: $phone"."%0A"."Комната: $place"."%0A"."Стиль офисной мебели: $type"."%0A"."Тип мебелиь: $typeOfFurnityre"."%0A"."Количество столов: $tableAmount"."%0A"."Количество кресел: $armchairAmount"."%0A"."Количество диванов: $sofaAmount"
     ."%0A"."Количество тумб: $nightstandAmount"."%0A"."Количество шкафов: $closetAmount"."%0A"."Количество кухонь: $kitchenAmount"."%0A"."Дополнительная комплектация: $contain"
     ."%0A"."Количество урн: $shoemakerAmount"."%0A"."Количество вешалок: $hangerAmount"."%0A"."Количество перегородок: $partitionAmount"."%0A"."Другая дополнительная комплектация: $otherAdditional"."%0A"."Дополнительные условия покупки: $terms";
 file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=@get123best123shkaf&text=$msg"."%0A"."Ключевое слово: $utm");
